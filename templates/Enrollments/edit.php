<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enrollment $enrollment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $enrollment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $enrollment->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Enrollments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="enrollments form content">
            <?= $this->Form->create($enrollment) ?>
            <fieldset>
                <legend><?= __('Edit Enrollment') ?></legend>
                <?php
                    echo $this->Form->control('student_id');
                    echo $this->Form->control('course_id');
                    echo $this->Form->control('enrollment_date', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
