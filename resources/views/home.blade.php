@extends('layouts.hom')

@section('content')

    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                            <!--This is dark logo icon--><img src="uploads/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="uploads/admin-logo-dark.png" alt="home" class="light-logo" />
                        </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="uploads/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="uploads/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Пошук..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="index.html"> <img src="uploads/users/ava.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Люба</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="profile.html" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Мій профіль</a>
                    </li>
                    <li >
                        <a href="/schedule/" class="waves-effect"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i>Розклад</a>
                    </li>
                    <li >
                        <a href="statistics.html" class="waves-effect"><i class="fa fa-bar-chart-o fa-fw" aria-hidden="true"></i>Статистика</a>
                    </li>
                    <li >
                        <a href="dialogue.html" class="waves-effect"><i class="fa fa-comments-o fa-fw" aria-hidden="true"></i>Діалоги</a>
                    </li>
                </ul>

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Сторінка профіля викладача</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Сторінка профіля викладача</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="uploads/large/img1.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="uploads/users/ava.jpg" class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white">Данченко Люба</h4>
                                        <h5 class="text-white">Danchenko@myadmin.com</h5> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material">
                                <div class="form-group">
                                    <label class="col-md-12">П.І.Б.</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Любов Данченко" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Посада</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>Викладач</option>
                                            <option>Зав.кафедри</option>
                                            <option>Декан</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Факультет</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>Факультет 1</option>
                                            <option>Факультет 2</option>
                                            <option>Факультет 3</option>
                                            <option>Факультет 4</option>
                                            <option>Факультет 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Кафедра</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>Кафедра 1</option>
                                            <option>Кафедра 2</option>
                                            <option>Кафедра 3</option>
                                            <option>Кафедра 4</option>
                                            <option>Кафедра 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="Danchenko@admin.com" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Телефон</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="093 456 7890" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Логін</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Данченко Люба" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Пароль</label>
                                    <div class="col-md-12">
                                        <input type="password" value="password" class="form-control form-control-line"> </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Оновыти профіль</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; created by <a href="https://www.facebook.com/profile.php?id=100013830070077&ref=br_rs" target="_blank">Danchenko Lyubov</a></footer>
        </div>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="js/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>

@endsection
