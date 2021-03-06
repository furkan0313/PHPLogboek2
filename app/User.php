<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Silber\Bouncer\Database\HasRolesAndAbilities;

class User extends Authenticatable
{
    use Notifiable, HasRolesAndAbilities;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function groups() {
        return $this->belongsToMany(Group::class);
    }

    public function entries() {
        return $this->hasMany(JournalEntry::class);
    }

    public function getCoursesAttribute() {
        return $this->groups->reduce(function($courses, $group) {
            return $courses->merge($group->courses);
        }, collect())->keyBy('id');
    }
}
