<!-- @auth -->
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Scripts -->
    <script src="<?php echo base_url('js/app.js'); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap" rel="stylesheet" >

    <!-- Styles -->
    <link href="<?php echo base_url('css/app.css'); ?>" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="<?php //echo base_url('css/bootstrap.min.css'); ?>"> -->
    <link href="<?php echo base_url('vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendors/bootstrap-daterangepicker/daterangepicker.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div id="app">

    <body class="nav-md admin">
    <div class="container body admin" >
        <div class="main_container">
            <div id="dashboard" class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <!-- <img src="{{ asset('img/logo4.png') }}" style="margin: -25px 0 0 10px; width: 180px"> -->
                </div>

                <div class="clearfix"></div>

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <ul class="nav side-menu">
                    <li><a><i class="fa fa-edit"></i> Product <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="<?php echo base_url('/seller/create'); ?>">Daftar Produk</a></li>
                        <li><a href="<?php echo base_url('/seller/formCreate'); ?>">Tambah Produk</a></li>
                        </ul>
                    </li>
                    </ul>
                </div>

            </div>
            <!-- /sidebar menu -->

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu" >
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav" >
                <ul class=" navbar-right">
                    <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a style="color: white; text-decoration: none;" href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user admin"></i>Admin
                    </a>
                    <div style="margin: auto" class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="<?php echo base_url('/user/logout');?>"><i class="fa fa-sign-out pull-right"></i>Log Out</a>
                    </div>
                    </li>

                </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <main>
        <?= $this->renderSection('content') ?>
        </main>

        </div>
    </div>

    </div>
    <!-- @yield('scripts') -->
</body>
</html>
<!-- @else -->
<!-- <script type="text/javascript">
    window.location = "{{ route('login') }}";
</script> -->
<!-- @endauth -->