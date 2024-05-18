<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Enrollment> $enrollments
 */
?>
<div class="enrollments index content">
    <?= $this->Html->link(__('New Enrollment'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Enrollments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('student_id') ?></th>
                    <th><?= $this->Paginator->sort('course_id') ?></th>
                    <th><?= $this->Paginator->sort('enrollment_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($enrollments as $enrollment): ?>
                <tr>
                    <td><?= $this->Number->format($enrollment->id) ?></td>
                    <td><?= $this->Number->format($enrollment->student_id) ?></td>
                    <td><?= $this->Number->format($enrollment->course_id) ?></td>
                    <td><?= h($enrollment->enrollment_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $enrollment->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enrollment->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enrollment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enrollment->id)]) ?>
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
