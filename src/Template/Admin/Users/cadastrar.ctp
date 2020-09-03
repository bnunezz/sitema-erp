<?= $this->Form->create($user, ['class' => 'form-login'])   ?>

<h1 class="h3 mb-3 font-weight-normal">Cadastrar</h1>

<?= $this->Flash->render(); ?>

<div class="justify-content-center align-items-center">
    <label for="exampleInputEmail1">Nome</label>
</div>
<div class="row h-100 justify-content-center align-items-center" style="text-align: center;">
    <?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Nome', 'label' => false]); ?>
    <!--<input type="text" class="form-control" placeholder="Username">-->
</div>
<div class="justify-content-center align-items-center">
    <label for="exampleInputEmail1">E-mail</label>
</div>
<div class="row h-100 justify-content-center align-items-center" style="text-align: center;">
    <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'E-mail', 'label' => false]); ?>
    <!--<input type="text" class="form-control" placeholder="Username">-->
</div>

<div class="justify-content-center align-items-center">
    <label for="exampleInputEmail1">Usuário</label>
</div>
<div class="row h-100 justify-content-center align-items-center" style="text-align: center;">
    <?= $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Usuário', 'label' => false]); ?>
    <!--<input type="text" class="form-control" placeholder="Username">-->
</div>

<div class="justify-content-center align-items-center">
    <label for="exampleInputEmail1">Senha</label>
</div>
<div class="row h-100 justify-content-center align-items-center">
    <?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'Senha', 'label' => false]); ?>
    <!--<input type="text" class="form-control" placeholder="Username">-->
</div>
<p></p>

<?= $this->Form->button(__('Acessar'), ['class' => 'btn btn-lg btn-success btn-block']) ?>

<p class="text-center">
    <?= $this->Html->link(__('Clique aqui'), ['controller' => 'Users', 'action' => 'login']) ?> para acessar!

</p>

<?= $this->Form->end() ?>