<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CourseClass $courseClass
 * @var \Cake\Collection\CollectionInterface|string[] $courses
 * @var \Cake\Collection\CollectionInterface|string[] $teachers
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Course Classes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="courseClasses form content">
            <?= $this->Form->create($courseClass) ?>
            <fieldset>
                <legend><?= __('Add Course Class') ?></legend>
                <?php
                    echo $this->Form->control('course_id', ['options' => $courses]);
                    echo $this->Form->control('teacher_id', ['options' => $teachers]);
                    echo $this->Form->control('schedule');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
