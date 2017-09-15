
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="">
                <?=$this->Html->image("bookmark.png", ["alt" => "BookMarks",'width'=> '60%','url' => ['controller' => 'Users', 'action' => 'view']])?>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><?=$this->Html->link('Aplicacion', ['controller'=> 'Users', 'action'=> 'home'])?></li>
                <?php if($this->request->session()->read('auth')):?>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Modulos<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <li class="dropdown-header">Usuarios</li>
                        <li><?=$this->Html->link('Listar Usuarios', ['controller'=> 'Users', 'action'=> 'index'])?></li>
                        <li><?=$this->Html->link('Crear Usuarios', ['controller'=> 'Users', 'action'=> 'add'])?></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">BookMarks</li>
                        <li><?=$this->Html->link('Listar BookMarks', ['controller'=> 'Users', 'action'=> 'add'])?></li>
                        <li><?=$this->Html->link('Crear BookMarks', ['controller'=> 'Users', 'action'=> 'add'])?></li>
                        <li><?=$this->Html->link('Salir', array('controller' => 'Users', 'action' => 'logout'))?></li>
                    </ul>
                </li>
                    <?php else: ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acceso<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Login</li>
                            <li role="separator" class="divider"></li>
                            <li><?=$this->Html->link('Ingresar', ['controller'=> 'Users', 'action'=> 'login'])?></li>
                            <li><?=$this->Html->link('Registrate', ['controller'=> 'Users', 'action'=> 'register'])?></li>
                        </ul>
                    </li>
                <?php endif;?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

