<nav class="navbar navbar-expand navbar-dark bg-dark">
    <a class="sidebar-toggle text-light mr-3"><span class="navbar-toggler-icon"></span></a>
    <a class="navbar-brand" href="#">Administrativo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                    <?php if (!empty($perfilUser->imagem)) { ?>
                        <?= $this->Html->image('../files/user/' . $perfilUser->id . '/' . $perfilUser->imagem, ['class' => 'rounded-circle', 'width' => '20', 'height' => '20']); ?>&nbsp;
                    <?php } else { ?>
                        <?= $this->Html->image('../files/user/usuario.png', ['class' => 'rounded-circle', 'width' => '20', 'height' => '20']); ?>&nbsp;

                    <?php } ?>
                    <span class="d-none d-sm-inline">
                        <?= current(str_word_count($perfilUser->name, 2)); ?>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <?= $this->Html->link('<i class="fas fa-user"></i> Perfil', [
                        'controller' => 'users',
                        'action' => 'perfil'
                    ], [
                        'class' => 'dropdown-item',
                        'escape' => false
                    ]); ?>

                    <div class="dropdown-divider"></div>
                    <?= $this->Html->link('<i class="fas fa-sign-out-alt"></i> Sair', [
                        'controller' => 'users',
                        'action' => 'logout'
                    ], [
                        'class' => 'dropdown-item',
                        'escape' => false
                    ]); ?>
                </div>
        </ul>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/dashboard.js"></script>
<script src="https://kit.fontawesome.com/2e675940fa.js" crossorigin="anonymous"></script>