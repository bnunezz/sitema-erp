<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Listar Carousel</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(__('Cadastrar'), ['controller' => 'EmpresaSobs', 'action' => 'add'], ['class' => 'btn btn-outline-success btn-sm']);
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
                <th class="d-none d-sm-table-cell">Ordem</th>
                <th class="d-none d-lg-table-cell">Situação</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empresaSobs as $empresaSob) : ?>
                <tr>
                    <td><?= $this->Number->format($empresaSob->id) ?></td>
                    <td><?= h($empresaSob->titulo) ?></td>
                    <td class="d-none d-sm-table-cell">
                        <?= h($empresaSob->ordem) ?>
                    </td>
                    <td class="d-none d-lg-table-cell">
                        <?php
                        if ($empresaSob->situation->id == 1) {
                            echo "<span class='badge badge-success'>" . $empresaSob->situation->nome_situacao . "</span>";
                        } else {
                            echo "<span class='badge badge-danger'>" . $empresaSob->situation->nome_situacao . "</span>";
                        }
                        ?>
                    </td>
                    <td class="text-center">
                        <span class="d-none d-md-block">
                            <?= $this->Html->link(__('<i class="fas fa-angle-double-up"></i>'), ['controller' => 'EmpresaSobs', 'action' => '#', $empresaSob->id], ['class' => 'btn btn-outline-info btn-sm', 'escape' => false]) ?>
                            <?= $this->Html->link(__('Visualizar'), ['controller' => 'EmpresaSobs', 'action' => 'view', $empresaSob->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
                            <?= $this->Html->link(__('Editar'), ['controller' => 'EmpresaSobs', 'action' => 'edit', $empresaSob->id], ['class' => 'btn btn-outline-warning btn-sm']) ?>
                            <?= $this->Form->postLink(__('Apagar'), ['controller' => 'EmpresaSobs', 'action' => 'delete', $empresaSob->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __('Deseja apagar o Sobre # {0}', $empresaSob->id)]) ?>
                        </span>
                        <div class="dropdown d-block d-md-none">
                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ações
                            </button>

                            <div class="dropdown-menu dropdown-menu-right" aria-label="acoesListar">



                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Empresa_Sobs', 'action' => 'view', $empresaSob->id], ['class' => 'dropdown-item']) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'EmpresaSobs', 'action' => 'edit', $empresaSob->id], ['class' => 'dropdown-item']) ?>
                                <?= $this->Form->postLink(__('Apagar'), ['controller' => 'EmpresaSobs', 'action' => 'delete', $empresaSob->id], ['class' => 'dropdown-item', 'confirm' => __('Deseja apagar o Sobre # {0}', $empresaSob->id)]) ?>
                            </div>
                        </div>

                    </td>
                </tr>
            <?PHP endforeach; ?>
        </tbody>
    </table>
</div>