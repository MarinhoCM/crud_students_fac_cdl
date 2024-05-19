<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teacher $teacher
 */
?>
<div class="row">
    <div align="center">
        <aside class="column">
            <div class="side-nav">
                <h1 class="heading"><?= __('Edit Teacher') ?></h1>
            </div>
        </aside>
        <div class="column-responsive column-50">
            <div class="teachers form content">
                <?= $this->Form->create($teacher) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('first_name', [
                        'class' => 'form-control form-control-custom',
                    ]);
                    echo $this->Form->control('last_name', [
                        'class' => 'form-control form-control-custom',
                    ]);
                    echo $this->Form->control('email', [
                        'class' => 'form-control form-control-custom',
                    ]);
                    echo $this->Form->control('phone', [
                        'class' => 'form-control form-control-custom',
                    ]);
                    echo $this->Form->control('department', [
                        'class' => 'form-control form-control-custom',
                    ]);
                    ?>
                </fieldset>
                <div class="btn-custom-container">
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-custom']) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
        <div class="custom-list-link">
            <div class="row">
                <div class="col">
                    <?= $this->Html->link(__('List Teachers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                </div>
                <div class="col">
                    <?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $course->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $course->id), 'class' => 'side-nav-item']
                    ) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .btn-custom-container {
        padding-top: 30px;
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
        padding: 10px;
        border: 1px solid #ccc;
        background-color: #f0f0f0;
        text-decoration: none;
        display: block;
        text-align: center;
    }
</style>