<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Depoimentos</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(__('Visualizar Depoimentos'), ['controller' => 'Depoimentos', 'action' => 'view', 1], ['class' => 'btn btn-outline-info btn-sm']) ?>


        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                <?= $this->Html->link(__('Visualizar Serviços'), ['controller' => 'Depoimentos', 'action' => 'view', 1], ['class' => 'dropdown-item']) ?>

            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($depoimento) ?>
<div class="form-row">
    <div class="form-group col-md-12">
        <label><span class="text-danger">*</span>Título</label>
        <?= $this->Form->control('nome_dep', ['class' => 'form-control', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-12">
        <label>Descrição</label>
        <?= $this->Form->control('descricao_dep', ['class' => 'form-control', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-12">
        <label>Video um</label>
        <?= $this->Form->control('video_um', ['class' => 'form-control', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-12">
        <label>Video dois</label>
        <?= $this->Form->control('video_dois', ['class' => 'form-control', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-12">
        <label>Video tres</label>
        <?= $this->Form->control('video_tres', ['class' => 'form-control', 'label' => false]) ?>
    </div>

</div>
<?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-warning']) ?>
<?= $this->Form->end() ?>