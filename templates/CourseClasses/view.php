<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CourseClass $courseClass
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Course Class'), ['action' => 'edit', $courseClass->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Course Class'), ['action' => 'delete', $courseClass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courseClass->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Course Classes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Course Class'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="courseClasses view content">
            <h3><?= h($courseClass->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Course') ?></th>
                    <td><?= $courseClass->has('course') ? $this->Html->link($courseClass->course->course_name, ['controller' => 'Courses', 'action' => 'view', $courseClass->course->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Teacher') ?></th>
                    <td><?= $courseClass->has('teacher') ? $this->Html->link($courseClass->teacher->first_name, ['controller' => 'Teachers', 'action' => 'view', $courseClass->teacher->id]) : '' ?></td>
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
    </div>
</div>
