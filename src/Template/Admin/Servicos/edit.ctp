<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Serviço</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(__('Visualizar Serviço'), ['controller' => 'Servicos', 'action' => 'view', 1], ['class' => 'btn btn-outline-info btn-sm']) ?>


        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                <?= $this->Html->link(__('Visualizar Serviços'), ['controller' => 'Servicos', 'action' => 'view', 1], ['class' => 'dropdown-item']) ?>

            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($servico) ?>
<div class="form-row">
    <div class="form-group col-md-12">
        <label><span class="text-danger">*</span>Título</label>
        <?= $this->Form->control('titulo_serv', ['class' => 'form-control', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label>Icone um</label>
        <?= $this->Form->control('icone_um', ['class' => 'form-control', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label>Título um</label>
        <?= $this->Form->control('titulo_um', ['class' => 'form-control', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-12">
        <label>Descrição um</label>
        <?= $this->Form->control('descricao_um', ['class' => 'form-control', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label>Icone dois</label>
        <?= $this->Form->control('icone_dois', ['class' => 'form-control', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label>Título dois</label>
        <?= $this->Form->control('titulo_dois', ['class' => 'form-control', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-12">
        <label>Descrição dois</label>
        <?= $this->Form->control('descricao_dois', ['class' => 'form-control', 'label' => false]) ?>
    </div>

    <div class="form-group col-md-6">
        <label>Icone tres</label>
        <?= $this->Form->control('icone_tres', ['class' => 'form-control', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label>Título tres</label>
        <?= $this->Form->control('titulo_tres', ['class' => 'form-control', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-12">
        <label>Descrição tres</label>
        <?= $this->Form->control('descricao_tres', ['class' => 'form-control', 'label' => false]) ?>
    </div>
</div>






<?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-warning']) ?>
<?= $this->Form->end() ?>
