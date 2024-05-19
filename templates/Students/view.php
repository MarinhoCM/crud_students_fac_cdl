<?php /** * @var \App\View\AppView $this * @var \App\Model\Entity\Student $student */ ?>
<div align="center">
    <div class="row">
        <div align="center">
            <div class="column-responsive column-50">
                <div class="students view content">
                    <h2><?= h($student->first_name) ?></h2>
                    <table>
                        <tr>
                            <th><?= __('Last Name') ?></th>
                            <td><?= h($student->last_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Email') ?></th>
                            <td><?= h($student->email) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Phone') ?></th>
                            <td><?= h($student->phone) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Address') ?></th>
                            <td><?= h($student->address) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <td><?= $this->Number->format($student->id) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Birthdate') ?></th>
                            <td><?= h($student->birthdate) ?></td>
                        </tr>
                    </table>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id], ['class' => 'side-nav-item']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id), 'class' => 'side-nav-item btn btn-danger']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?= $this->Html->link(__('List Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
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