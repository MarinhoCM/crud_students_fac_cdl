<?php /** * @var \App\View\AppView $this * @var \App\Model\Entity\CourseClass $courseClass */ ?>
<div align="center">
    <div class="row">
        <div align="center">
            <div class="column-responsive column-50">
                <div class="courseClasses view content">
                    <h2><?= h($courseClass->id) ?></h2>
                    <table>
                        <tr>
                            <th><?= __('Course') ?></th>
                            <td><?= $courseClass->has('course') ? $this->Html->link($courseClass->course->course_name, ['controller' => 'Courses', 'action' => 'view', $courseClass->course->id]) : '' ?>
                            </td>
                        </tr>
                        <tr>
                            <th><?= __('Teacher') ?></th>
                            <td><?= $courseClass->has('teacher') ? $this->Html->link($courseClass->teacher->first_name, ['controller' => 'Teachers', 'action' => 'view', $courseClass->teacher->id]) : '' ?>
                            </td>
                        </tr>
                        <tr>
                            <th><?= __('Schedule') ?></th>
                            <td><?= h($courseClass->schedule) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <td><?= $this->Number->format($courseClass->id) ?></td>
                        </tr>
                    </table>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Html->link(__('Edit Course Class'), ['action' => 'edit', $courseClass->id], ['class' => 'side-nav-item']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->postLink(__('Delete Course Class'), ['action' => 'delete', $courseClass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courseClass->id), 'class' => 'side-nav-item btn btn-danger']) ?>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Html->link(__('List Course Classes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Html->link(__('New Course Class'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    tr {
        font-size: 15px;
    }

    .btn {
        width: 100%;
        margin-bottom: 10px;
    }

    .side-nav-item {
        display: block;
        text-align: center;
        padding: 10px;
        margin-bottom: 10px;
    }

    .column-responsive {
        max-width: 100%;
    }

    .btn-custom {
        font-size: 18px;
    }

    .form-control-custom {
        font-size: 17px;
    }

    .custom-list-link {
        font-size: 17px;
        padding-top: 45px;
        position: fixed;
        bottom: 0;
        left: 80%;
        margin-bottom: 20px;
        margin-right: 20px;
        margin-top: 20px;
        padding-bottom: 25px;
        white-space: nowrap;
    }

    .custom-list-link .row {
        display: flex;
        justify-content: space-between;
    }

    .side-nav-item {
        font-size: 16px;
        padding: 10px;
        border: 1px solid #ccc;
        background-color: #f0f0f0;
        text-decoration: none;
        display: block;
        text-align: center;
        margin-bottom: 10px;
    }
</style>