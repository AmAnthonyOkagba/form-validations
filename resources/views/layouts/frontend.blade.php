<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registration</title>
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">       
        <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
        <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
        <link rel="stylesheet" href="{{ asset('dist/css/toastr.min.css')}}">
        <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
        <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}">
        <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css')}}">
        
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">        
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="index.html" class="brand-link">
                    <img src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Anthony</span>
                </a>
                <div class="sidebar">
                  
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{ asset('dist/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">Anthony</a>
                        </div>
                    </div>
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item">
                                <a href="/" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>Register</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/view" class="nav-link ">
                                    <i class="nav-icon fas fa-wallet"></i>
                                    <p>All Users</p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            
            <div class="content-wrapper">
                @yield('content')
            </div>

            <footer class="main-footer">
                <strong>Copyright &copy; {{date('Y')}} <a href="">VTU</a>.</strong>
                    All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Anthony</b> Okagba
                </div>
            </footer>
        
        </div>

        <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>
        <script src="{{ asset('plugins/sparklines/sparkline.js')}}"></script>
        <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
        <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
        <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
        <script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
        <script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
        <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
        <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <script src="{{ asset('dist/js/adminlte.js')}}"></script>
        <script src="{{ asset('dist/js/toastr.min.js')}}"></script>
        <script src="{{ asset('dist/js/pages/dashboard.js')}}"></script>
        
        <script>
            $(function() {
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
            
                $('.swalDefaultSuccess').click(function() {
                    Toast.fire({
                        icon: 'success',
                        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                    })
                });
                $('.swalDefaultInfo').click(function() {
                    Toast.fire({
                        icon: 'info',
                        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                    })
                });
                $('.swalDefaultError').click(function() {
                    Toast.fire({
                        icon: 'error',
                        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                    })
                });
                $('.swalDefaultWarning').click(function() {
                    Toast.fire({
                        icon: 'warning',
                        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                    })
                });
                $('.swalDefaultQuestion').click(function() {
                    Toast.fire({
                        icon: 'question',
                        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
                    })
                });
          
            });
        </script>
          
    </body>
</html>