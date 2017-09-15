<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2><?= __('Agregar Usuarios') ?></h2>
        </div>
        <?= $this->Form->create($user) ?>
   <section>
       <?php
       echo $this->Form->control('first_name', array('label' => 'Nombre'));
       echo $this->Form->control('last_name',array('label' => 'Apellido'));
       echo $this->Form->control('email',array('label' => 'Correo'));
       echo $this->Form->control('password', array('label' => 'Contraseña'));
       echo $this->Form->control('role', ['options' => array(0 => 'Administrador', 1 => 'Usuario'), 'label'=> 'Rol']);
       echo $this->Form->control('active' , array('label' => 'Activo'));
       ?>
   </section>
        <?= $this->Form->button(__('guardar'), array('class' => 'btn btn-success')) ?>
        <?= $this->Form->end() ?>

    </div>
</div>





