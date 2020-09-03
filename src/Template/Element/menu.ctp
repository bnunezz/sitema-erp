<nav class="sidebar">
    <ul class="list-unstyled">
        <li>
        <?= $this->Html->link(
            '<i class="fas fa-chart-bar"></i> Dashboard',
            [
                'controller' => 'welcome',
                'action' => 'index'
            ],
            [
                'escape' => false
            ]
        ); ?>

        <li>

        <li>
        <?= $this->Html->link(
            '<i class="fas fa-users"></i> Usuários',
            [
                'controller' => 'users',
                'action' => 'index'
            ],
            [
                'escape' => false
            ]
        ); ?>

        <li>

        <li>
        <?= $this->Html->link(
            '<i class="far fa-images"></i> Carousel',
            [
                'controller' => 'Carousels',
                'action' => 'index'
            ],
            [
                'escape' => false
            ]
        ); ?>

        <li>

        <li>
        <?= $this->Html->link(
            '<i class="far fa-file-alt"></i> Servicos',
            [
                'controller' => 'Servicos',
                'action' => 'view',
                '1'
            ],
            [
                'escape' => false
            ]
        ); ?>

        <li>

        <li>
        <?= $this->Html->link(
            '<i class="fas fa-video"></i> Videos',
            [
                'controller' => 'Depoimentos',
                'action' => 'view',
                '1'
            ],
            [
                'escape' => false
            ]
        ); ?>

        <li>

        <li>
        <?= $this->Html->link(
            '<i class="fas fa-address-card"></i> Sobre',
            [
                'controller' => 'EmpresaSobs',
                'action' => 'index',
                '1'
            ],
            [
                'escape' => false
            ]
        ); ?>

        <li>

        <?= $this->Html->link(
            '<i class="far fa-envelope"></i> Mensagem',
            [
                'controller' => 'ContatosMsgs',
                'action' => 'index',
                
            ],
            [
                'escape' => false
            ]
        ); ?>

        <li>

        <li>

        <?= $this->Html->link(
            '<i class="far fa-newspaper "></i> Artigos',
            [
                'controller' => 'Artigos',
                'action' => 'index',
                
            ],
            [
                'escape' => false
            ]
        ); ?>

        <li>


        <li>
        <?= $this->Html->link(
            '<i class="fas fa-sign-out-alt"></i> Sair',
            [
                'controller' => 'users',
                'action' => 'logout'
            ],
            [
                'escape' => false
            ]
        ); ?>

        <li>

        
            
    </ul>
</nav>