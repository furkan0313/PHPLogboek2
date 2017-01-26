<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 2-12-2016
 * Time: 16:38
 */
?>

<div class="panel panel-blue">
    <div class="panel-heading dark-overlay"><svg class="glyph stroked clipboard-with-paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>To-do List</div>
    <div class="panel-body">
        <ul class="todo-list">
            <li class="todo-list-item">
                <div class="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <label for="checkbox">Make a plan for today</label>
                </div>
                <div class="pull-right action-buttons">
                    <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                    <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                    <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                </div>
            </li>
            <li class="todo-list-item">
                <div class="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <label for="checkbox">Update Basecamp</label>
                </div>
                <div class="pull-right action-buttons">
                    <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                    <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                    <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                </div>
            </li>
            <li class="todo-list-item">
                <div class="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <label for="checkbox">Send email to Jane</label>
                </div>
                <div class="pull-right action-buttons">
                    <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                    <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                    <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                </div>
            </li>
            <li class="todo-list-item">
                <div class="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <label for="checkbox">Drink coffee</label>
                </div>
                <div class="pull-right action-buttons">
                    <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                    <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                    <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                </div>
            </li>
            <li class="todo-list-item">
                <div class="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <label for="checkbox">Do some work</label>
                </div>
                <div class="pull-right action-buttons">
                    <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                    <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                    <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                </div>
            </li>
            <li class="todo-list-item">
                <div class="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <label for="checkbox">Tidy up workspace</label>
                </div>
                <div class="pull-right action-buttons">
                    <a href="#"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg></a>
                    <a href="#" class="flag"><svg class="glyph stroked flag"><use xlink:href="#stroked-flag"></use></svg></a>
                    <a href="#" class="trash"><svg class="glyph stroked trash"><use xlink:href="#stroked-trash"></use></svg></a>
                </div>
            </li>
        </ul>
    </div>
    <div class="panel-footer">
        <div class="input-group">
            <input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task" />
            <span class="input-group-btn">
								<button class="btn btn-primary btn-md" id="btn-todo">Add</button>
							</span>
        </div>
    </div>
</div>

