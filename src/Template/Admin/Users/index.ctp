<div class="d-flex">

    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Lista de Usuários</h2>
    </div>

    <div class="p-2">
        <?= $this->Html->link(
            __('Cadastrar'),
            ['controller' => 'users', 'action' => 'add'],
            ['class' => 'btn btn-outline-success btn-sm']
        ); ?>
    </div>

</div>
<?= $this->Flash->render() ?>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th class="d-none d-sm-table-cell">E-mail</th>
                <th class="d-none d-lg-table-cell">Cadastro</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td class="d-none d-sm-table-cell"><?= h($user->email) ?></td>
                    <td class="d-none d-lg-table-cell"><?= h($user->created) ?> </td>
                    <td class="text-center">
                        <span class="d-none d-md-block">
                            <?= $this->Html->link(__('Visualizar'), ['controller' => 'users', 'action' => 'view', $user->id], ['class' => 'btn btn-outline-primary btn-sm']); ?>
                            <?= $this->Html->link(__('Editar'), ['controller' => 'users', 'action' => 'edit', $user->id], ['class' => 'btn btn-outline-warning btn-sm']); ?>
                            <?= $this->Form->postLink(__('Apagar Usuário'), ['controller' => 'users', 'action' => 'delete', $user->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __('Relamente deseja apagar o usuário # {0}?', $user->id)]) ?>

                        </span>
                        <div class="dropdown d-block d-md-none">
                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ações
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'users', 'action' => 'view', $user->id], ['class' => 'dropdown-item']) ?>

                                <?= $this->Html->link(__('Editar'), ['controller' => 'users', 'action' => 'edit', $user->id], ['class' => 'dropdown-item']) ?>

                                <?= $this->Form->postLink(__('Apagar Usuário'), ['controller' => 'users', 'action' => 'delete', $user->id], ['class' => 'dropdown-item', 'confirm' => __('Relamente deseja apagar o usuário # {0}?', $user->id)]) ?>

                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->element('pagination'); ?>
</div> 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/dashboard.js"></script>
<script src="https://kit.fontawesome.com/2e675940fa.js" crossorigin="anonymous"></script>
