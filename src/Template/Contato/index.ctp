<main role="main">
    <div class="jumbotron contato">
        <div class="container">
            <h2 class="display-4 text-center contato-titulo">Contato</h2>
            <?= $this->Flash->render() ?>
            <?= $this->Form->create($contatoMsg) ?>

            <?= $this->Form->control('conts_msgs_sit_id', ['type' =>'hidden','value' => 2 ,'label' => false]) ?>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nome</label>
                    <?= $this->Form->control('nome', ['class' => 'form-control', 'placeholder' => 'Nome', 'label' => false]) ?>
                </div>
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'E-mail', 'label' => false]) ?>

                </div>
            </div>
            <div class="form-group">
                <label>Assunto</label>
                <?= $this->Form->control('assunto', ['class' => 'form-control', 'placeholder' => 'Assunto da mensagem', 'label' => false]) ?>

            </div>
            <div class="form-group">
                <label for="inputAddress2">Mensagem</label>
                <?= $this->Form->control('mensagem', ['class' => 'form-control', 'placeholder' => 'Conteudo da mensagem','rows' => 4 ,'label' => false]) ?>

            </div>
        </div>
        <div class="container">
            <?= $this->Form->button(__('Enviar'), ['class' => 'btn btn-info']) ?>
            <?= $this->Form->end() ?>
        </div>

    </div>
    </div>
</main>