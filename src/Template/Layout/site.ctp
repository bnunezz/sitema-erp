<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title>
       
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['bootstrap.min', 'persite']) ?>
    <script defer src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"> </script>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->element('menu_site') ?>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
    <?= $this->element('rodape_site') ?>

    <?= $this->Html->script(['jquery-3.3.1.min', 'bootstrap.min', 'popper.min']) ?>

</body>
</html> 