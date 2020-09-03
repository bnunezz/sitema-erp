<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Contatos</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(__('Listar'), ['controller' => 'ContatosMsgs', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']) ?>

            <?= $this->Html->link(__('Visualizar'), ['controller' => 'ContatosMsgs', 'action' => 'view', $contatosMsg->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>

            <?= $this->Form->postLink(__('Apagar'), ['controller' => 'ContatosMsgs', 'action' => 'delete', $contatosMsg->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __('Relamente deseja apagar o usuário # {0}?', $contatosMsg->id)]) ?>
        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                <?= $this->Html->link(__('Listar'), ['controller' => 'ContatosMsgs', 'action' => 'index'], ['class' => 'dropdown-item']) ?>

                <?= $this->Html->link(__('Visualizar'), ['controller' => 'ContatosMsgs', 'action' => 'view', $contatosMsg->id], ['class' => 'dropdown-item']) ?>

                <?= $this->Form->postLink(__('Apagar'), ['controller' => 'ContatosMsgs', 'action' => 'delete', $contatosMsg->id], ['class' => 'dropdown-item', 'confirm' => __('Relamente deseja apagar o usuário # {0}?', $contatosMsg->id)]) ?>
            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($contatosMsg) ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label>Nome</label>
        <?= $this->Form->control('nome', ['class' => 'form-control', 'label' => false]) ?>
    </div>

    <div class="form-group col-md-6">
        <label>E-mail</label>
        <?= $this->Form->control('email', ['class' => 'form-control', 'label' => false]) ?>
    </div>

    <div class="form-group col-md-12">
        <label>Assunto</label>
        <?= $this->Form->control('assunto', ['class' => 'form-control', 'label' => false]) ?>
    </div>

    <div class="form-group col-md-12">
        <label>Mensagem</label>
        <?= $this->Form->control('mensagem', ['class' => 'form-control', 'label' => false]) ?>
    </div>

    <div class="form-group col-md-6">
        <label>Usuário</label>
        <?= $this->Form->control('user_id', ['class' => 'form-control', 'label' => false]) ?>
    </div>

    <div class="form-group col-md-6">
        <label>Situação</label>
        <?= $this->Form->control('conts_msgs_sit_id', ['class' => 'form-control', 'label' => false]) ?>
    </div>
</div>
<?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-warning']) ?>
<?= $this->Form->end() ?>















