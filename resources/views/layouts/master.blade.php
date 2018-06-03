<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="Sunray" />
    <title>Sunray | Bootstrap Responsive Hospital Admin Template</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<!--bootstrap -->
	<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link href="/assets/plugins/material/material.min.css" rel="stylesheet" >
	<link href="/assets/css/material_style.css" rel="stylesheet">
	<!-- morris chart -->
    <!-- <link href="/assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" /> -->
    <!-- data tables -->
    <link href="/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
	<!-- Theme Styles -->
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/theme-color.css" rel="stylesheet" type="text/css" />
    
	<!-- favicon -->
    <link rel="shortcut icon" href="/assets/img/favicon.ico" />
    <link href="/assets/css/common.css" rel="stylesheet" type="text/css" />
    @yield('style')
</head>
<!-- END HEAD -->
<!-- <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-color logo-white"> -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-color white-sidebar-color logo-white">
    <div class="page-wrapper">
        <!-- start header -->
        @includeIf('partials.navbar')
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            @section('sidebar')
 			    @includeIf('partials.sidebar')
            @show
            <!-- end sidebar menu --> 
			<!-- start page content -->
            <div class="page-content-wrapper">
                @yield('content')
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        @includeIf('partials.footer')
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="/assets/plugins/jquery/jquery.min.js" ></script>
	<script src="/assets/plugins/popper/popper.min.js" ></script>
    <script src="/assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <!-- counterup -->
    <!-- <script src="/assets/plugins/counterup/jquery.waypoints.min.js" ></script> -->
    <!-- <script src="/assets/plugins/counterup/jquery.counterup.min.js" ></script> -->
    <!-- data tables -->
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js" ></script>
    <script src="/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js" ></script>
    <!-- Common js-->
	<script src="/assets/js/app.js" ></script>
    <script src="/assets/js/layout.js" ></script>
    <script src="/assets/js/theme-color.js" ></script>
    <!-- material -->
    <script src="/assets/plugins/material/material.min.js"></script>
    <!-- morris chart -->
    <!-- <script src="/assets/plugins/morris/morris.min.js" ></script> -->
    <!-- <script src="/assets/plugins/morris/raphael-min.js" ></script> -->
    <!-- <script src="/assets/js/pages/chart/morris/morris-home-data.js" ></script> -->
     <!-- end js include path -->
     @yield('script')
</body>
</html>