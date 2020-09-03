<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
            <?= $this->Html->link(__('Water'), ['controller' => 'Home', 'action' => 'index'], ['class' => 'navbar-brand']) ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active menu">
                        <?= $this->Html->link(__('Home'), ['controller' => 'Home', 'action' => 'index'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item menu">
                        <?= $this->Html->link(__('Sobre'), ['controller' => 'Sobre', 'action' => 'index'], ['class' => 'nav-link']) ?>

                    </li>
                    <li class="nav-item menu">
                        <?= $this->Html->link(__('Contato'), ['controller' => 'Contato', 'action' => 'index'], ['class' => 'nav-link']) ?>

                    </li>
                    <li class="nav-item menu">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>