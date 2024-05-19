<div class="row">
    <div align="center">
        <aside class="column">
            <div class="side-nav">
                <h1 class="heading"><?= __('Add Student') ?></h1>
            </div>
        </aside>
        <div class="column-responsive column-50">
            <div class="students form content">
                <?= $this->Form->create($student) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('first_name', ['class' => 'form-control form-control-custom']);
                    echo $this->Form->control('last_name', ['class' => 'form-control form-control-custom']);
                    echo $this->Form->control('birthdate', ['empty' => true, 'class' => 'form-control form-control-custom']);
                    echo $this->Form->control('email', ['class' => 'form-control form-control-custom']);
                    echo $this->Form->control('phone', ['class' => 'form-control form-control-custom']);
                    echo $this->Form->control('address', ['class' => 'form-control form-control-custom']);
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-custom mt-3']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

<div class="custom-list-link">
    <div class="row justify-content-end">
        <div class="col-auto">
            <?= $this->Html->link(__('List Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
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