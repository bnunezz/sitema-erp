<?= $this->Form->create('post', ['class' => 'form-login'])   ?>
<?= $this->Html->image('icone1.png', ['class' => 'mb-4', 'alt' => 'logo', 'width' => '72', 'height' => '72']) ?>

<h1 class="h3 mb-3 font-weight-normal">Log in</h1>

<?= $this->Flash->render(); ?>

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
<p class="text-center">
    <?= $this->Html->link(__('Cadastrar'), ['controller' => 'Users', 'action' => 'cadastrar']) ?> -
    Esqueceu a senha?
</p>

<?= $this->Form->button(__('Acessar'), ['class' => 'btn btn-lg btn-primary btn-block']) ?>

<?= $this->Form->end() ?>

