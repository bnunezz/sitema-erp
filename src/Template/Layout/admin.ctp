<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Administrativo';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['bootstrap.min', 'font-awesome.min', 'dashboard']) ?>
    <?= $this->Html->script(['fontawesome.min']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <?= $this->element('cabecalho') ?>
    

    <div class="d-flex bd-highlight">
    <?= $this->element('menu') ?>
        <div class="content p-1">
            <div class="list-group-item">
                
            <?= $this->fetch('content') ?>
            
            </div>
        </div>
    </div>

 

    
    

    <?= $this->Html->script(['jquery-3.3.1.min', 'popper.min', 'bootstrap.min', 'dashboard']) ?>


</body>

</html>