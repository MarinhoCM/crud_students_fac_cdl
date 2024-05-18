<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CourseClass> $courseClasses
 */
?>
<div class="courseClasses index content">
    <?= $this->Html->link(__('New Course Class'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Course Classes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('course_id') ?></th>
                    <th><?= $this->Paginator->sort('teacher_id') ?></th>
                    <th><?= $this->Paginator->sort('schedule') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courseClasses as $courseClass): ?>
                <tr>
                    <td><?= $this->Number->format($courseClass->id) ?></td>
                    <td><?= $courseClass->has('course') ? $this->Html->link($courseClass->course->course_name, ['controller' => 'Courses', 'action' => 'view', $courseClass->course->id]) : '' ?></td>
                    <td><?= $courseClass->has('teacher') ? $this->Html->link($courseClass->teacher->first_name, ['controller' => 'Teachers', 'action' => 'view', $courseClass->teacher->id]) : '' ?></td>
                    <td><?= h($courseClass->schedule) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $courseClass->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $courseClass->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $courseClass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courseClass->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
