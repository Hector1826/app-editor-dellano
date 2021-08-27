<nav class="main-header navbar navbar-expand-md navbar-dark">
    <!-- Left navbar links -->
    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <ul class="navbar-nav nav">

            <li class="nav-item" title="Inicio">
                <a href="#" onclick="viewHome()" class="nav-link form-control text-orange home">
                    <i class="nav-icon fas fa-home"></i>
                </a>
            </li>


            <li class="nav-item" title="Perfil">
                <a href="#" onclick="viewProfile()" class="nav-link form-control text-orange profile">
                    <i class="fas fa-user"></i>
                    <!--Inicio sesión-->
                </a>
            </li>

            <li class="nav-item" title="Editor">
                <a href="#" onclick="viewEdit()" class="nav-link form-control text-orange" role="button">
                    <i class="fas fa-image"></i>
                </a>
            </li>
        </ul>
    </div>

    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" onclick="btn_pagar();" class="nav-link form-control text-orange" role="button">
                <i class="fas fa-shopping-cart"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
