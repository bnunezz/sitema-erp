<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmpresaSob $empresaSob
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Empresa Sob'), ['action' => 'edit', $empresaSob->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresa Sob'), ['action' => 'delete', $empresaSob->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresaSob->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresa Sobs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa Sob'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Situations'), ['controller' => 'Situations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Situation'), ['controller' => 'Situations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="empresaSobs view large-9 medium-8 columns content">
    <h3><?= h($empresaSob->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($empresaSob->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagem') ?></th>
            <td><?= h($empresaSob->imagem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situation') ?></th>
            <td><?= $empresaSob->has('situation') ? $this->Html->link($empresaSob->situation->nome_situacao, ['controller' => 'Situations', 'action' => 'view', $empresaSob->situation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($empresaSob->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordem') ?></th>
            <td><?= $this->Number->format($empresaSob->ordem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($empresaSob->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($empresaSob->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($empresaSob->descricao)); ?>
    </div>
</div>
