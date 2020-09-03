<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Servicos</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(__('Editar Depoimentos'), ['controller' => 'Depoimentos', 'action' => 'edit', 1], ['class' => 'btn btn-outline-warning btn-sm']) ?>


        </span>
    </div>
</div>
<div class="dropdown d-block d-md-none">
    <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Ações
    </button>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
        <?= $this->Html->link(__('Editar Depoimentos'), ['controller' => 'Depoimentos', 'action' => 'edit', 1], ['class' => 'dropdown-item']) ?>
    </div>
</div>
<?= $this->Flash->render() ?>
<dl class="row">
    <dt class="col-sm-3">ID</dt>

    <dd class="col-sm-9"><?= $this->Number->format($depoimento->id) ?></dd>

    <dt class="col-sm-3">Titulo</dt>
    <dd class="col-sm-9"><?= h($depoimento->nome_dep) ?></dd>

    <dt class="col-sm-3">Descrição</dt>
    <dd class="col-sm-9"><?= h($depoimento->descricao_dep) ?></dd>
    
    <dt class="col-sm-3">Video um</dt>
    <dd class="col-sm-9"><?= h($depoimento->descricao_dep) ?></dd>  

    <dt class="col-sm-3">Video dois</dt>
    <dd class="col-sm-9"><?= h($depoimento->descricao_dep) ?></dd>  

    <dt class="col-sm-3">Video tres</dt>
    <dd class="col-sm-9"><?= h($depoimento->descricao_dep) ?></dd>  

</dl>