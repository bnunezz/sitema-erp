<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Servicos</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(__('Editar Serviço'), ['controller' => 'Servicos', 'action' => 'edit', 1], ['class' => 'btn btn-outline-warning btn-sm']) ?>


        </span>
    </div>
</div>
<div class="dropdown d-block d-md-none">
    <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Ações
    </button>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
        <?= $this->Html->link(__('Editar Serviço'), ['controller' => 'Servicos', 'action' => 'edit'], ['class' => 'dropdown-item']) ?>
    </div>
</div>
<?= $this->Flash->render() ?>
<dl class="row">
    <dt class="col-sm-3">ID</dt>

    <dd class="col-sm-9"><?= $this->Number->format($servico->id) ?></dd>

    <dt class="col-sm-3">Titulo</dt>
    <dd class="col-sm-9"><?= h($servico->titulo_serv) ?></dd>

    <dt class="col-sm-3">Icone um</dt>
    <dd class="col-sm-9"><i class="fas fa-file"></i> - <?= h($servico->icone_um) ?></dd>

    <dt class="col-sm-3">Titulo um</dt>
    <dd class="col-sm-9"><?= h($servico->titulo_um) ?></dd>

    <dt class="col-sm-3">Descrição um</dt>
    <dd class="col-sm-9"><?= h($servico->descricao_um) ?></dd>

    <dt class="col-sm-3">Icone dois</dt>
    <dd class="col-sm-9"><i class="fas fa-book"></i> - <?= h($servico->icone_dois) ?></dd>

    <dt class="col-sm-3">Titulo dois</dt>
    <dd class="col-sm-9"><?= h($servico->titulo_dois) ?></dd>

    <dt class="col-sm-3">Descrição dois</dt>
    <dd class="col-sm-9"><?= h($servico->descricao_dois) ?></dd>

    <dt class="col-sm-3">Icone tres</dt>
    <dd class="col-sm-9"><i class="fas fa-envelope-open"></i> - <?= h($servico->icone_tres) ?></dd>

    <dt class="col-sm-3">Titulo tres</dt>
    <dd class="col-sm-9"><?= h($servico->titulo_tres) ?></dd>

    <dt class="col-sm-3">Descrição tres</dt>
    <dd class="col-sm-9"><?= h($servico->descricao_tres) ?></dd>

    <dt class="col-sm-3">Modificado</dt>
    <dd class="col-sm-9"><?= h($servico->modified) ?></dd>
</dl>