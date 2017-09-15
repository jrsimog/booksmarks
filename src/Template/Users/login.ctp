<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="users form">
<?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Login') ?></legend>
        <?= $this->Form->control('email',['label'=> 'Email']) ?>
        <?= $this->Form->control('password',['label'=> 'Contrasena']) ?>
    </fieldset>
    <?= $this->Form->button(__('Login', ['class'=>'btn btn-primary']))?>
    <?= $this->Form->end() ?>
</div>
