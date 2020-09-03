<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Listar Contatos</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(__('Cadastrar'), ['controller' => 'ContatosMsgs', 'action' => 'add'], ['class' => 'btn btn-outline-success btn-sm']);
        ?>
    </div>
</div>
<?= $this->Flash->render() ?>
<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th class="d-none d-sm-table-cell">Email</th>
                <th class="d-none d-lg-table-cell">Assunto</th>
                <th class="text-center">Situação</th>
                <th class="text-center">Ações

                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contatosMsgs as $contatosMsg) : ?>
                <tr class="table-<?=$contatosMsg->conts_msgs_sit->color->cor; ?>">
                    <td><?= $this->Number->format($contatosMsg->id) ?></td>
                    <td><?= h($contatosMsg->nome) ?></td>
                    <td class="d-none d-sm-table-cell">
                        <?= h($contatosMsg->email) ?>
                    <td class="d-none d-sm-table-cell">
                        <?= h($contatosMsg->assunto) ?>
                    <td class="d-none d-sm-table-cell">
                        <?= "<span class= 'badge badge-". $contatosMsg->conts_msgs_sit->color->cor . "'>". $contatosMsg->conts_msgs_sit->nome_sit_msg_cont . "</span>"; ?>
                    <td class="text-center">
                        <span class="d-none d-md-block">

                            <?= $this->Html->link(__('Visualizar'), ['controller' => 'ContatosMsgs', 'action' => 'view', $contatosMsg->id], ['class' => 'btn btn-primary btn-sm']) ?>

                            <?= $this->Html->link(__('Editar'), ['controller' => 'ContatosMsgs', 'action' => 'edit', $contatosMsg->id], ['class' => 'btn btn-warning btn-sm']) ?>

                            <?= $this->Form->postLink(__('Apagar'), ['controller' => 'ContatosMsgs', 'action' => 'delete', $contatosMsg->id], ['class' => 'btn btn-danger btn-sm', 'confirm' => __('Relamente deseja apagar o Contatos # {0}?', $contatosMsg->id)]) ?>
                        </span>
                        <div class="dropdown d-block d-md-none">
                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ações
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'ContatosMsgs', 'action' => 'view', $contatosMsg->id], ['class' => 'dropdown-item']) ?>

                                <?= $this->Html->link(__('Editar'), ['controller' => 'ContatosMsgs', 'action' => 'edit', $contatosMsg->id], ['class' => 'dropdown-item']) ?>

                                <?= $this->Form->postLink(__('Apagar'), ['controller' => 'ContatosMsgs', 'action' => 'delete', $contatosMsg->id], ['class' => 'dropdown-item', 'confirm' => __('Relamente deseja apagar o Contatos # {0}?', $contatosMsg->id)]) ?>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


