<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users

 un commit mas porque decidi editar codigo en ultimo minuto
 *
 * editar test
 * editar test
 * editar test
 * editar test
 * editar test
 * editar test
 * editar test
 * editar test
 * editar test
 *
 *
 * editar develop
 * editar develop
 * editar develop
 * editar develop
 * editar develop
 * editar develop
  */

?>

<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h3><?= __('Usuarios') ?></h3>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('first_name' , 'Nombre') ?></th>
                    <th><?= $this->Paginator->sort('last_name', 'Apellido') ?></th>
                    <th><?= $this->Paginator->sort('email', 'Correo') ?></th>
                    <th><?= $this->Paginator->sort('role', 'Role') ?></th>
                    <th><?= $this->Paginator->sort('active', 'Activo') ?></th>
                    <th><?= __('Acciones') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id)?></td>
                    <td><?= h($user->first_name) ?></td>
                    <td><?= h($user->last_name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h( $user->role = ($user->role == 0) ? "ADMIN" : "USER") ?></td>
                    <td><?= h($user->active = ($user->active == 0) ? "INACTIVO" : "ACTIVO") ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id], array('class'=>'btn btn-small btn-primary')) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id],array('class'=>'btn btn-small btn-warning')) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], array('class'=>'btn btn-small btn-danger'), ['confirm' => __('Estas seguro de que quieres eliminar el registro ?# {0}?', $user->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
        </div>



    </div>
</div>

<div class="users index large-9 medium-8 columns content">

        <nav aria-label="Page navigation paginator">
            
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Inicio')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers(array('before'=> '', 'after'=>'')) ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
    </nav>
    </div>
</div>
