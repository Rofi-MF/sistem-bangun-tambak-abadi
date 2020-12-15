<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>CV Bangun Tambak Abadi</title>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/gritter/css/jquery.gritter.css')}}"/>
    {{--    <link rel="stylesheet" href="{{asset('lib/advanced-datatable/css/DT_bootstrap.css')}}" />--}}
    <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-datepicker/css/datepicker.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-timepicker/compiled/timepicker.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/dataTables/css/bootstrap/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fixedColumns.dataTables/fixedColumns.dataTables.min.css')}}"></link>
    <link href="{{asset('assets/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/select2/select2.css')}}"/>

    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/table-responsive.css')}}" rel="stylesheet">
    <script src="{{asset('lib/chart-master/Chart.js')}}"></script>

    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
</head>

<body>
<section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b>CV Bangun Tambak<span> Abadi</span></b></a>
        <!--logo end-->
        {{--        <div class="nav notify-row" id="top_menu">--}}
        {{--            <!--  notification start -->--}}
        {{--            <ul class="nav top-menu">--}}
        {{--                <!-- settings start -->--}}
        {{--                <li class="dropdown">--}}
        {{--                    <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">--}}
        {{--                        <i class="fa fa-tasks"></i>--}}
        {{--                        <span class="badge bg-theme">4</span>--}}
        {{--                    </a>--}}
        {{--                    <ul class="dropdown-menu extended tasks-bar">--}}
        {{--                        <div class="notify-arrow notify-arrow-green"></div>--}}
        {{--                        <li>--}}
        {{--                            <p class="green">You have 4 pending tasks</p>--}}
        {{--                        </li>--}}
        {{--                        <li>--}}
        {{--                            <a href="index.html#">--}}
        {{--                                <div class="task-info">--}}
        {{--                                    <div class="desc">Dashio Admin Panel</div>--}}
        {{--                                    <div class="percent">40%</div>--}}
        {{--                                </div>--}}
        {{--                                <div class="progress progress-striped">--}}
        {{--                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"--}}
        {{--                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%">--}}
        {{--                                        <span class="sr-only">40% Complete (success)</span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </a>--}}
        {{--                        </li>--}}
        {{--                        <li>--}}
        {{--                            <a href="index.html#">--}}
        {{--                                <div class="task-info">--}}
        {{--                                    <div class="desc">Database Update</div>--}}
        {{--                                    <div class="percent">60%</div>--}}
        {{--                                </div>--}}
        {{--                                <div class="progress progress-striped">--}}
        {{--                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"--}}
        {{--                                         aria-valuemin="0" aria-valuemax="100" style="width: 60%">--}}
        {{--                                        <span class="sr-only">60% Complete (warning)</span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </a>--}}
        {{--                        </li>--}}
        {{--                        <li>--}}
        {{--                            <a href="index.html#">--}}
        {{--                                <div class="task-info">--}}
        {{--                                    <div class="desc">Product Development</div>--}}
        {{--                                    <div class="percent">80%</div>--}}
        {{--                                </div>--}}
        {{--                                <div class="progress progress-striped">--}}
        {{--                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80"--}}
        {{--                                         aria-valuemin="0" aria-valuemax="100" style="width: 80%">--}}
        {{--                                        <span class="sr-only">80% Complete</span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </a>--}}
        {{--                        </li>--}}
        {{--                        <li>--}}
        {{--                            <a href="index.html#">--}}
        {{--                                <div class="task-info">--}}
        {{--                                    <div class="desc">Payments Sent</div>--}}
        {{--                                    <div class="percent">70%</div>--}}
        {{--                                </div>--}}
        {{--                                <div class="progress progress-striped">--}}
        {{--                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"--}}
        {{--                                         aria-valuemin="0" aria-valuemax="100" style="width: 70%">--}}
        {{--                                        <span class="sr-only">70% Complete (Important)</span>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </a>--}}
        {{--                        </li>--}}
        {{--                        <li class="external">--}}
        {{--                            <a href="#">See All Tasks</a>--}}
        {{--                        </li>--}}
        {{--                    </ul>--}}
        {{--                </li>--}}
        {{--                <!-- settings end -->--}}
        {{--                <!-- inbox dropdown start-->--}}
        {{--                <li id="header_inbox_bar" class="dropdown">--}}
        {{--                    <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">--}}
        {{--                        <i class="fa fa-envelope-o"></i>--}}
        {{--                        <span class="badge bg-theme">5</span>--}}
        {{--                    </a>--}}
        {{--                    <ul class="dropdown-menu extended inbox">--}}
        {{--                        <div class="notify-arrow notify-arrow-green"></div>--}}
        {{--                        <li>--}}
        {{--                            <p class="green">You have 5 new messages</p>--}}
        {{--                        </li>--}}
        {{--                        <li>--}}
        {{--                            <a href="index.html#">--}}
        {{--                                <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>--}}
        {{--                                <span class="subject">--}}
        {{--                  <span class="from">Zac Snider</span>--}}
        {{--                  <span class="time">Just now</span>--}}
        {{--                  </span>--}}
        {{--                                <span class="message">--}}
        {{--                  Hi mate, how is everything?--}}
        {{--                  </span>--}}
        {{--                            </a>--}}
        {{--                        </li>--}}
        {{--                        <li>--}}
        {{--                            <a href="index.html#">--}}
        {{--                                <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>--}}
        {{--                                <span class="subject">--}}
        {{--                  <span class="from">Divya Manian</span>--}}
        {{--                  <span class="time">40 mins.</span>--}}
        {{--                  </span>--}}
        {{--                                <span class="message">--}}
        {{--                  Hi, I need your help with this.--}}
        {{--                  </span>--}}
        {{--                            </a>--}}
        {{--                        </li>--}}
        {{--                        <li>--}}
        {{--                            <a href="index.html#">--}}
        {{--                                <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>--}}
        {{--                                <span class="subject">--}}
        {{--                  <span class="from">Dan Rogers</span>--}}
        {{--                  <span class="time">2 hrs.</span>--}}
        {{--                  </span>--}}
        {{--                                <span class="message">--}}
        {{--                  Love your new Dashboard.--}}
        {{--                  </span>--}}
        {{--                            </a>--}}
        {{--                        </li>--}}
        {{--                        <li>--}}
        {{--                            <a href="index.html#">--}}
        {{--                                <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>--}}
        {{--                                <span class="subject">--}}
        {{--                  <span class="from">Dj Sherman</span>--}}
        {{--                  <span class="time">4 hrs.</span>--}}
        {{--                  </span>--}}
        {{--                                <span class="message">--}}
        {{--                  Please, answer asap.--}}
        {{--                  </span>--}}
        {{--                            </a>--}}
        {{--                        </li>--}}
        {{--                        <li>--}}
        {{--                            <a href="index.html#">See all messages</a>--}}
        {{--                        </li>--}}
        {{--                    </ul>--}}
        {{--                </li>--}}
        {{--                <!-- inbox dropdown end -->--}}
        {{--                <!-- notification dropdown start-->--}}
        {{--                <li id="header_notification_bar" class="dropdown">--}}
        {{--                    <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">--}}
        {{--                        <i class="fa fa-bell-o"></i>--}}
        {{--                        <span class="badge bg-warning">7</span>--}}
        {{--                    </a>--}}
        {{--                    <ul class="dropdown-menu extended notification">--}}
        {{--                        <div class="notify-arrow notify-arrow-yellow"></div>--}}
        {{--                        <li>--}}
        {{--                            <p class="yellow">You have 7 new notifications</p>--}}
        {{--                        </li>--}}
        {{--                        <li>--}}
        {{--                            <a href="index.html#">--}}
        {{--                                <span class="label label-danger"><i class="fa fa-bolt"></i></span>--}}
        {{--                                Server Overloaded.--}}
        {{--                                <span class="small italic">4 mins.</span>--}}
        {{--                            </a>--}}
        {{--                        </li>--}}
        {{--                        <li>--}}
        {{--                            <a href="index.html#">--}}
        {{--                                <span class="label label-warning"><i class="fa fa-bell"></i></span>--}}
        {{--                                Memory #2 Not Responding.--}}
        {{--                                <span class="small italic">30 mins.</span>--}}
        {{--                            </a>--}}
        {{--                        </li>--}}
        {{--                        <li>--}}
        {{--                            <a href="index.html#">--}}
        {{--                                <span class="label label-danger"><i class="fa fa-bolt"></i></span>--}}
        {{--                                Disk Space Reached 85%.--}}
        {{--                                <span class="small italic">2 hrs.</span>--}}
        {{--                            </a>--}}
        {{--                        </li>--}}
        {{--                        <li>--}}
        {{--                            <a href="index.html#">--}}
        {{--                                <span class="label label-success"><i class="fa fa-plus"></i></span>--}}
        {{--                                New User Registered.--}}
        {{--                                <span class="small italic">3 hrs.</span>--}}
        {{--                            </a>--}}
        {{--                        </li>--}}
        {{--                        <li>--}}
        {{--                            <a href="index.html#">See all notifications</a>--}}
        {{--                        </li>--}}
        {{--                    </ul>--}}
        {{--                </li>--}}
        {{--                <!-- notification dropdown end -->--}}
        {{--            </ul>--}}
        {{--            <!--  notification end -->--}}
        {{--        </div>--}}
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="{{url('/logout')}}">Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <p class="centered"><a href="profile.html"><img src="{{asset('img/male.png')}}"
                                                                class="img-circle"
                                                                width="80"></a></p>
                <h5 class="centered">{{Auth::user()->name}}</h5>
                <li class="mt">
                    <a href="{{url('/')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Master</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('/project')}}">Proyek</a></li>
                        <li><a href="{{url('/typeTransaction')}}">Tipe Transaksi</a></li>
                        <li><a href="{{url('/user')}}">Users</a></li>
                        <li><a href="{{url('/role')}}">Role</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Transaction</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('/transaction')}}">Input Transaksi</a></li>
                        <li><a href="{{url('/kasbon')}}">Kasbon</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Report</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{url('/report')}}">Keseluruhan</a></li>
                        <li><a href="{{url('/inout')}}">Keluar & Masuk</a></li>
                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        @yield('content')
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            <p>
                &copy; Copyrights {{--<strong>Dashio</strong>--}}. All Rights Reserved
            </p>
            <div class="credits">
                <!--
                  You are NOT allowed to delete the credit link to TemplateMag with free version.
                  You can delete the credit link only if you bought the pro version.
                  Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
                  Licensing information: https://templatemag.com/license/
                -->
                {{--                Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>--}}
            </div>
            <a href="index.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>

<script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/jquery.sparkline.js')}}"></script>
<script type="text/javascript" language="javascript"
        src="{{asset('lib/advanced-datatable/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/advanced-datatable/js/DT_bootstrap.js')}}"></script>
<script src="{{ asset('assets/dataTables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript"
        src="{{asset('assets/fixedColumns.dataTables/dataTables.fixedColumns.min.js')}}"></script>
<script src="{{ asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
<script src="{{asset('assets/sweetalert2/sweetalert2.min.js')}}"></script>
<!--common script for all pages-->
<script src="{{asset('lib/common-scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/gritter/js/jquery.gritter.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/gritter-conf.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/jquery.price_format_min.js')}}"></script>
<script type="text/javascript">
    if ('{{Session::has('swal')}}') {
        swal({
            title: '{{Session::get('swal')}}',
            type: 'success',
            timer: '1200'
        })
    }

    if ('{{Session::has('swalPermission')}}') {
        swal({
            title: '{{Session::get('swalPermission')}}',
            type: 'warning',
            timer: '2500'
        })
    }

    $(".textrp").priceFormat({
        prefix: "",
        centsSeparator: "",
        thousandsSeparator: ".",
        centsLimit: 0
    });

    $(".textangka").priceFormat({
        prefix: "",
        centsSeparator: "",
        thousandsSeparator: "",
        centsLimit: 0
    });

    $('.dataTable').DataTable();

    $(document).ready(function () {
        $('.select2').select2();
    });

    $('.date-picker').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
    });

    $(".timepicker-24").timepicker({
        autoclose: true,
        showMeridian: false,
        defaultTime: '0:00'
    });

    $(".textangka").priceFormat({
        prefix: "",
        centsSeparator: "",
        thousandsSeparator: "",
        centsLimit: 0
    });

    function toRp(angka) {
        var rev = parseInt(angka, 10).toString().split('').reverse().join('');
        var rev2 = '';
        for (var i = 0; i < rev.length; i++) {
            rev2 += rev[i];
            if ((i + 1) % 3 === 0 && i !== (rev.length - 1)) {
                rev2 += '.';
            }
        }
        if (angka < 0) {
            var old_angka = rev2.split('').reverse().join('');
            var new_angka = old_angka.replace('-', '');
            return '( ' + new_angka + ' )';
        } else {
            return rev2.split('').reverse().join('');
        }

    }

    function toAngka(rp) {
        return parseInt(rp.replace(/,.*|[^0-9]/g, ''), 10);
    }

    $("#user-form").on('submit', function (e) {
        e.preventDefault();
        var form = $("#user-form form"),
            url = "{{ url('/user')}}";
        vals = form.serialize();

        $.ajax({
            url: url,
            type: 'POST',
            data: vals,
            success: function (res) {
                form.trigger('reset');
                swal({
                    title: 'Success',
                    type: 'success',
                    timer: '1200'
                })
                window.location = window.location;
            },
            error: function () {
                swal({
                    title: 'Oops...',
                    type: 'error',
                    timer: '1200'
                })
            }
        });
    });

    function changeRole(id) {
        var role = $('#roleChange').val();
        $.ajax({
            url: '{{url('/changeRole')}}',
            type: 'POST',
            data: {role: role, id: id, _token: '{{csrf_token()}}'},
            success: function (res) {
                window.location = window.location;
            },
            error: function () {
                swal({
                    title: 'Oops...',
                    type: 'error',
                    timer: '1200'
                })
            }
        });
    }

    function permission(idRole, idUser) {
        $.ajax({
            url: '{{url('/permission') . '/'}}' + idRole + '/' + idUser,
            success: function (ajaxData) {
                $("#modal-user").html(ajaxData);
                $("#modal-user").modal('show');
            },
            error: function () {
                swal({
                    title: 'Oops...',
                    type: 'error',
                    timer: '1200'
                })
            }
        });
    }

    function givePermission() {
        var id = $('#idUser').val(),
            permission = $('input[type=checkbox][id=permissionGive]:checked').map(function (_, el) {
                return $(el).val();
            }).get();
        $.ajax({
            url: '{{url('/givePermission')}}',
            type: 'POST',
            data: {id: id, permission: permission, '_token': '{{csrf_token()}}'},
            success: function (data) {
                swal({
                    title: 'Success',
                    type: 'success',
                    timer: '1500'
                })
                location.reload();
            },
            error: function () {
                swal({
                    title: 'Oops Something Wrong...',
                    type: 'error',
                    timer: '1500'
                })
            }
        });
    }

    function revokePermission() {
        var id = $('#idUser').val(),
            permission = $('input[type=checkbox][id=permissionRevoke]:checked').map(function (_, el) {
                return $(el).val();
            }).get();
        $.ajax({
            url: '{{url('/revokePermission')}}',
            type: 'POST',
            data: {id: id, permission: permission, '_token': '{{csrf_token()}}'},
            success: function (data) {
                swal({
                    title: 'Success',
                    type: 'success',
                    timer: '1500'
                })
                location.reload();
            },
            error: function () {
                swal({
                    title: 'Oops Something Wrong...',
                    type: 'error',
                    timer: '1500'
                })
            }
        });
    }

    function rolePermission(id) {
        $.ajax({
            url: '{{url('/rolePermission') . '/'}}' + id,
            success: function (ajaxData) {
                $("#modal-role").html(ajaxData);
                $("#modal-role").modal('show');
            },
            error: function () {
                swal({
                    title: 'Oops...',
                    type: 'error',
                    timer: '1200'
                })
            }
        });
    }

    $("#role-form").on('submit', function (e) {
        e.preventDefault();
        var form = $("#role-form form"),
            url = "{{ url('/role')}}";
        vals = form.serialize();

        $.ajax({
            url: url,
            type: 'POST',
            data: vals,
            success: function (res) {
                // table_user.ajax.reload();
                form.trigger('reset');
                swal({
                    title: 'Success',
                    type: 'success',
                    timer: '1200'
                })
                window.location = window.location;
            },
            error: function () {
                swal({
                    title: 'Oops...',
                    type: 'error',
                    timer: '1200'
                })
            }
        });
    });

    function giveRolePermission() {
        var id = $('#idUser').val(),
            permission = $('input[type=checkbox][id=rolePermissionGive]:checked').map(function (_, el) {
                return $(el).val();
            }).get();
        $.ajax({
            url: '{{url('/giveRolePermission')}}',
            type: 'POST',
            data: {id: id, permission: permission, '_token': '{{csrf_token()}}'},
            success: function (data) {
                swal({
                    title: 'Success',
                    type: 'success',
                    timer: '1500'
                })
                location.reload();
            },
            error: function () {
                swal({
                    title: 'Oops Something Wrong...',
                    type: 'error',
                    timer: '1500'
                })
            }
        });
    }

    function revokeRolePermission() {
        var id = $('#idUser').val(),
            permission = $('input[type=checkbox][id=rolePermissionRevoke]:checked').map(function (_, el) {
                return $(el).val();
            }).get();
        $.ajax({
            url: '{{url('/revokeRolePermission')}}',
            type: 'POST',
            data: {id: id, permission: permission, '_token': '{{csrf_token()}}'},
            success: function (data) {
                swal({
                    title: 'Success',
                    type: 'success',
                    timer: '1500'
                })
                location.reload();
            },
            error: function () {
                swal({
                    title: 'Oops Something Wrong...',
                    type: 'error',
                    timer: '1500'
                })
            }
        });
    }

    $("#project-form").on('submit', function (e) {
        e.preventDefault();
        var form = $("#project-form form"),
            url = "{{ url('/project')}}";
        vals = form.serialize();

        $.ajax({
            url: url,
            type: 'POST',
            data: vals,
            success: function (res) {
                window.location.reload();
                form.trigger('reset');
                swal({
                    title: 'Success',
                    type: 'success',
                    timer: '1200'
                })
            },
            error: function () {
                swal({
                    title: 'Oops...',
                    type: 'error',
                    timer: '1200'
                })
            }
        });
    });
    $("#typeTransaction-form").on('submit', function (e) {
        e.preventDefault();
        var form = $("#typeTransaction-form form"),
            url = "{{ url('/typeTransaction')}}";
        vals = form.serialize();

        $.ajax({
            url: url,
            type: 'POST',
            data: vals,
            success: function (res) {
                window.location.reload();
                form.trigger('reset');
                swal({
                    title: 'Success',
                    type: 'success',
                    timer: '1200'
                })
            },
            error: function () {
                swal({
                    title: 'Oops...',
                    type: 'error',
                    timer: '1200'
                })
            }
        });
    });

    $("#loadInput").click(function () {
        var count = $("#count").val();
        $.ajax({
            url: '{{url('/loadInput')}}',
            type: 'POST',
            data: {count: count, _token: '{{csrf_token()}}'},
            success: function (msg) {
                $("#saldo").css("visibility", "visible");
                $('#showInput').html(msg);
            },
            error: function () {
                swal({
                    title: 'Oops...',
                    type: 'error',
                    timer: '1200'
                })
            }
        });
    });

    function selectTypeTransaction() {
        var category = $("#category").val();
        $.ajax({
            url: "{{url('/selectTypeTransaction') . '/'}}" + category,
            type: 'GET',
            success: function (msg) {
                $("#type").html(msg);
            },
            error: function () {
                swal({
                    title: 'Oops...',
                    type: 'error',
                    timer: '1200'
                })
            }
        })
    }

    function generateTotal(value, id) {
        var count = $("#count").val(),
            nominal = $("#nominal" + id).val(),
            qty = $("#qty" + id).val(),
            sum = 0;
        $("#subTotal" + id).val(toRp(toAngka(nominal) * toAngka(qty)));
        for (var i = 0; i < count; i++) {
            var subTotal = $("#subTotal" + i).val();
            sum += toAngka(subTotal);
        }
        $("#grandTotal").val(toRp(sum));
    }

    function showReportByProject() {
        var project = $("#project").val();
        var month = $("#month").val();
        var year = $("#year").val();
        window.location.href = "{{url('/report').'/'}}" + project + '/' + month + '/' + year;
    }

    function showReportInOutByProject() {
        var project = $("#project").val();
        var category = $("#category").val();
        var type = $("#type").val();
        var month = $("#month").val();
        var year = $("#year").val();
        window.location.href = "{{url('/inout').'/'}}" + project + '/' + category + '/' + type + '/' + month + '/' + year;
    }

    function modalBayar(id, bayar) {
        $('.modal-title').text('Pembayaran Kasbon');
        $('#id').val(id);
        $('#nominal').val('');
        $('#bayar').val(toAngka(bayar));
        $('#modal-bayar').modal('show');
    }

    function pembayaran() {
        var id = $('#id').val(),
            nominal = $('#nominal').val(),
            bayar = $('#bayar').val();

        if (toAngka(nominal) != toAngka(bayar)) {
            swal({
                title: "Maaf Pembayaran Tidak Sesuai...",
                type: "error",
                timer: "1200"
            })
        } else {
            $.ajax({
                url: "{{url('/kasbonBayar')}}",
                type: "POST",
                data: {id: id, nominal: nominal, bayar: bayar, _token:'{{csrf_token()}}'},
                success: function (msg) {
                    window.location = window.location;
                    swal({
                        title: "Success",
                        type: "success",
                        timer: "1200"
                    })
                },
                error: function () {
                    swal({
                        title: "Oops Something Wrong...",
                        type: "error",
                        timer: "1200"
                    })
                }
            });
        }
    }
</script>
<script type="text/javascript">
    {{--$(document).ready(function () {--}}
    {{--    var unique_id = $.gritter.add({--}}
    {{--        // (string | mandatory) the heading of the notification--}}
    {{--        title: "Welcome {{Session::get('userdata')->fullname}}",--}}
    {{--        // (string | mandatory) the text inside the notification--}}
    {{--        text: "&nbsp;",--}}
    {{--        // (string | optional) the image to display on the left--}}
    {{--        image: "{{Session::get('userdata')->photo}}",--}}
    {{--        // (bool | optional) if you want it to fade out on its own or just sit there--}}
    {{--        sticky: false,--}}
    {{--        // (int | optional) the time you want it to be alive for before fading out--}}
    {{--        time: 2000,--}}
    {{--        // (string | optional) the class name you want to apply to that specific message--}}
    {{--        class_name: 'my-sticky-class'--}}
    {{--    });--}}

    {{--    return false;--}}
    {{--});--}}
</script>
</body>
</html>
