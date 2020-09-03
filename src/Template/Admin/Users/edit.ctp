<div class="d-flex">

    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Usuário</h2>
    </div>

    <div class="p-2">

        <span class=" d-none d-md-block">
            <?= $this->Html->link(__('Lista de Usuários'), ['controller' => 'users', 'action' => 'index'], ['class' => 'btn btn-outline-primary btn-sm']) ?>
            <?= $this->Form->postLink(__('Apagar Usuário'), ['controller' => 'users', 'action' => 'delete', $user->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __("Deseja apagar o usuário # {0}?", $user->id)]); ?>
        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoeslistar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoeslistar">
                <?= $this->Html->link(__('Lista de Usuários'), ['controller' => 'users', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                <?= $this->Form->postLink(__('Apagar Usuário'), ['controller' => 'users', 'action' => 'delete', $user->id], ['class' => 'dropdown-item', 'confirm' => __("Deseja apagar o usuário # {0}?", $user->id)]); ?>
            </div>
        </div>

    </div>

</div>
<?= $this->Flash->render() ?>
<?= $this->Form->create($user) ?>
<form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Nome<span class="text-danger"></span></label>
            <?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Nome completo', 'label' => false]); ?>
        </div>
        <div class="form-group col-md-6">
            <label>E-mail<span class="text-danger"></span></label>
            <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'E-mail', 'label' => false]) ?>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Usuário</label>
            <?= $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Usuário', 'label' => false]); ?>
        </div>

    </div>
    
    <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-warning']) ?>


    <?= $this->Form->end() ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/dashboard.js"></script>
<script src="https://kit.fontawesome.com/2e675940fa.js" crossorigin="anonymous"></script>
