<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Courses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Course'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="courses view content">
            <h3><?= h($course->course_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Course Name') ?></th>
                    <td><?= h($course->course_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($course->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Credits') ?></th>
                    <td><?= $course->credits === null ? '' : $this->Number->format($course->credits) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($course->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Classes') ?></h4>
                <?php if (!empty($course->classes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Course Id') ?></th>
                            <th><?= __('Teacher Id') ?></th>
                            <th><?= __('Schedule') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($course->classes as $classes) : ?>
                        <tr>
                            <td><?= h($classes->id) ?></td>
                            <td><?= h($classes->course_id) ?></td>
                            <td><?= h($classes->teacher_id) ?></td>
                            <td><?= h($classes->schedule) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Classes', 'action' => 'view', $classes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Classes', 'action' => 'edit', $classes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Classes', 'action' => 'delete', $classes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Enrollments') ?></h4>
                <?php if (!empty($course->enrollments)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Course Id') ?></th>
                            <th><?= __('Enrollment Date') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($course->enrollments as $enrollments) : ?>
                        <tr>
                            <td><?= h($enrollments->id) ?></td>
                            <td><?= h($enrollments->student_id) ?></td>
                            <td><?= h($enrollments->course_id) ?></td>
                            <td><?= h($enrollments->enrollment_date) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Enrollments', 'action' => 'view', $enrollments->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Enrollments', 'action' => 'edit', $enrollments->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Enrollments', 'action' => 'delete', $enrollments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enrollments->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
