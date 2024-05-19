<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<div class="row">
    <div align="center">
        <aside class="column">
            <div class="side-nav">
                <h1><?= __('Add Course') ?></h1>
            </div>
        </aside>
        <div class="column-responsive column-50">
            <div class="courses form content">
                <?= $this->Form->create($course) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('course_name', [
                        'class' => 'form-control form-control-custom',
                    ]);
                    echo $this->Form->control('description', [
                        'class' => 'form-control form-control-custom',
                    ]);
                    echo $this->Form->control('credits', [
                        'class' => 'form-control form-control-custom',
                    ]);
                    ?>
                </fieldset>
                <br>
                <br>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-custom']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
        <div class="custom-list-link">
            <div class="row">
                <div class="col">
                    <?= $this->Html->link(__('List Courses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
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
        padding: 10px;
        border: 1px solid #ccc;
        background-color: #f0f0f0;
        text-decoration: none;
        display: block;
        text-align: center;
    }
</style>