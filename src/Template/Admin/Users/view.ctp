<div class="d-flex">

    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Usuário</h2>
    </div>

    <div class="p-2">

        <span class=" d-none d-md-block">
            <?= $this->Html->link(__('Lista de Usuários'), ['controller' => 'users', 'action' => 'index'], ['class' => 'btn btn-outline-primary btn-sm']); ?>
            <?= $this->Html->link(__('Editar Usuário'), ['controller' => 'users', 'action' => 'edit', $user->id], ['class' => 'btn btn-outline-warning btn-sm']); ?>
            <?= $this->Form->postLink(__('Apagar Usuário'), ['controller' => 'users', 'action' => 'delete', $user->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __('Relamente deseja apagar o usuário # {0}?', $user->id)]) ?>
            <?= $this->Html->link(__('Editar Senha do Usuário'), ['controller' => 'users', 'action' => 'editSenha', $user->id], ['class' => 'btn btn-outline-danger btn-sm']); ?>

        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoeslistar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoeslistar">
                <?= $this->Html->link(__('Listar Usuários'), ['controller' => 'users', 'action' => 'index'], ['class' => 'dropdown-item']); ?>
                <?= $this->Html->link(__('Editar Usuário'), ['controller' => 'users', 'action' => 'edit', $user->id], ['class' => 'dropdown-item']); ?>
                <?= $this->Form->postLink(__('Apagar Usuário'), ['controller' => 'users', 'action' => 'delete', $user->id], ['class' => 'dropdown-item', 'confirm' => __('Relamente deseja apagar o usuário # {0}?', $user->id)]) ?>
                <?= $this->Html->link(__('Editar Senha de Usuário'), ['controller' => 'users', 'action' => 'editSenha', $user->id], ['class' => 'dropdown-item']); ?>

            </div>
        </div>

    </div>

</div>
<hr>
<?= $this->Flash->render() ?>

<dl class="row">
    <dt class="col-sm-3">Imagem</dt>
    <dd class="col-sm-9">
        <div class="img-perfil">

            <?php if (!empty($user->imagem)) { ?>
                <?= $this->Html->image('../files/user/' . $user->id . '/' . $user->imagem, ['class' => 'rounded-circle', 'width' => '120', 'height' => '120']); ?>&nbsp;

                <div class="edit">
                    <?= $this->Html->link(
                        '<i class="fas fa-pencil-alt"></i>',
                        [
                            'controller' => 'users',
                            'action' => 'alterarFotoUsuario',
                            $user->id
                        ],
                        [
                            'escape' => false
                        ]
                    ) ?>
                </div>

            <?php } else { ?>
                <?= $this->Html->image('../files/user/usuario.png', ['class' => 'rounded-circle', 'width' => '120', 'height' => '120']); ?>&nbsp;

                <div class="edit">
                    <?= $this->Html->link(
                        '<i class="fas fa-pencil-alt"></i>',
                        [
                            'controller' => 'users',
                            'action' => 'alterarFotoUsuario',
                            $user->id
                        ],
                        [
                            'escape' => false
                        ]
                    ) ?>
                </div>
            <?php } ?>
        </div>
    </dd>
    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $this->Number->format($user->id) ?></dd>

    <dt class="col-sm-3">Nome</dt>
    <dd class="col-sm-9"><?= h($user->name) ?></dd>

    <dt class="col-sm-3">E-mail</dt>
    <dd class="col-sm-9"><?= h($user->email) ?></dd>

    <dt class="col-sm-3">Usuário</dt>
    <dd class="col-sm-9"><?= h($user->username) ?></dd>


    <dt class="col-sm-3 text-truncate">Data do Cadastro</dt>
    <dd class="col-sm-9"><?= h($user->created) ?></dd>

    <dt class="col-sm-3 text-truncate">Data de Modificação</dt>
    <dd class="col-sm-9"><?= h($user->modified) ?></dd>
</dl>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/dashboard.js"></script>
<script src="https://kit.fontawesome.com/2e675940fa.js" crossorigin="anonymous"></script>