<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Teacher $teacher
 */
?>
<div align="center">
    <div class="row">
        <div align="center">
            <div class="column-responsive column-50">
                <div class="teachers view content">
                    <h2><?= h($teacher->first_name) ?></h2>
                    <table>
                        <tr>
                            <th><?= __('Last Name') ?></th>
                            <td><?= h($teacher->last_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Email') ?></th>
                            <td><?= h($teacher->email) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Phone') ?></th>
                            <td><?= h($teacher->phone) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Department') ?></th>
                            <td><?= h($teacher->department) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <td><?= $this->Number->format($teacher->id) ?></td>
                        </tr>
                    </table>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Html->link(__('Edit Teacher'), ['action' => 'edit', $teacher->id], ['class' => 'side-nav-item']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->postLink(__('Delete Teacher'), ['action' => 'delete', $teacher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teacher->id), 'class' => 'side-nav-item btn btn-danger']) ?>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Html->link(__('List Teachers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Html->link(__('New Teacher'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
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