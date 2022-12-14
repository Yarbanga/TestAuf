<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SoniaShop | Dashboard</title>

    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
 <link rel="stylesheet" href="css/style.css">
   

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__spin" src="dist/img/loader.png" alt="loader" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li>
                    <div>
                        <img src="{{asset('dist/img/avatar.jpg')}}" width="40px" height="40px" alt="">
                    </div>
                <li class=" mt-2 mx-1">
                    <h6 class="font-weight-bold"></h6>
                </li>
                </li>
                <li class="mx-3 mt-1">
                <form action="{{ route('deconnexion') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-secondary btn-sm "><i class="ml-3" data-feather="power"></i>Se déconnecter</button>
                    </form>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="./img/thumb-product01.jpg" alt="Study" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bolder">SoniaShop</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <p>Gestion des produits</p>
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-tasks" aria-hidden="true"></i>
                                <p>
                                    Paramétrage des produits
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/categorie" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Catégories</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ajouter un produit</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-address-card" aria-hidden="true"></i>
                                <p>
                                    Gestion Articles
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                                <p>
                                    Gestion FAQs
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p>
                                    Gestion Notifications
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <main id="main">
            <div class=" ">
                @yield('contenu')
            </div>
        </main>
<!-- 
        <footer class="main-footer">
            <p class="font-weight-bold text-center">&copy;Copyright - SoniaShop - 2022</p>
        </footer> -->
    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="dist/js/adminlte.js"></script>

</body>

</html>