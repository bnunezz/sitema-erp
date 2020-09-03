
<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar Artigo</h2>
    </div>
        <div class="p-2">
            <span class="d-none d-md-block">
                <?= $this->Html->link(__('Listar'), ['controller' => 'Artigos', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']) ?>
            </span>
            <div class="dropdown d-block d-md-none">
                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ações
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                    <?= $this->Html->link(__('Listar'), ['controller' => 'Artigos', 'action' => 'index'], ['class' => 'dropdown-item']) ?>                                  
                </div>
            </div>
        </div>
</div><hr>
<?= $this->Flash->render() ?>

<?= $this->Form->create($artigo, ['enctype' => 'multipart/form-data']) ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span>Titulo</label>
        <?= $this->Form->control('titulo', ['class' => 'form-control', 'placeholder' => 'Titulo', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-12">
        <label> Descrição</label>
        <?= $this->Form->control('descricao', ['class' => 'form-control', 'placeholder' => 'Descrição', 'label' => false]) ?>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <label> Conteúdo</label>
        <?= $this->Form->control('conteudo', ['class' => 'form-control', 'placeholder' => 'Conteúdo', 'label' => false]) ?>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label> slug</label>
        <?= $this->Form->control('slug', ['class' => 'form-control', 'placeholder' => 'Slug', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-4">
        <label> keywords</label>
        <?= $this->Form->control('keywords', ['class' => 'form-control', 'placeholder' => 'Keywords', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-4">
        <label> Description</label>
        <?= $this->Form->control('description', ['class' => 'form-control', 'placeholder' => 'Description', 'label' => false]) ?>
    </div>    
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <label>Resumo Público</label>
        <?= $this->Form->control('resumo_publico', ['class' => 'form-control', 'placeholder' => 'Resumo publico ', 'label' => false]) ?>
    </div>  
    <div class="form-group col-md-6">
        <label>Qnt acesso</label>
        <?= $this->Form->control('qnt_acesso', ['class' => 'form-control', 'placeholder' => 'Acesso ', 'label' => false]) ?>
    </div>  
    <div class="form-group col-md-6">
        <label>Robot</label>
        <?= $this->Form->control('robot_id', ['class' => 'form-control', 'placeholder' => 'Robot ', 'label' => false]) ?>
    </div> 
    <div class="form-group col-md-6">
        <label>Usuário<label>
        <?= $this->Form->control('user_id', ['class' => 'form-control', 'placeholder' => 'Usuário ', 'label' => false]) ?>
    </div> 
    <div class="form-group col-md-6">
        <label>Situação<label>
        <?= $this->Form->control('situation_id', ['class' => 'form-control', 'placeholder' => 'Situação ', 'label' => false]) ?>
    </div> 

    <div class="form-group col-md-6">
        <label>Artigos Tp<label>
        <?= $this->Form->control('artigos_tp_id', ['class' => 'form-control', 'placeholder' => 'Artigos tp ', 'label' => false]) ?>
    </div> 

    <div class="form-group col-md-6">
        <label>Artigos cat<label>
        <?= $this->Form->control('artigos_cat_id', ['class' => 'form-control', 'placeholder' => 'Artigos cat ', 'label' => false]) ?>
    </div> 
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label>Imagem</label>
        <?= $this->Form->control('imagem', ['type' => 'file', 'label' => false, 'onchange'=>'previewImagem()']) ?>
    </div>

    <div class="form-group col-md-6">
        <?php
        $imagem_antiga = '../../files/artigo/preview.png';        
        ?>

        <img src='<?= $imagem_antiga ?>' alt='Preview da Imagem' id='preview-img' class='img-thumbnail' style="width: 250px; height: 120px;">
    </div>
</div>


<?= $this->Form->button(__('Cadastrar'), ['class' => 'btn btn-success']) ?>
<?= $this->Form->end() ?> 































