<!doctype html>
<html lang="en" class="semi-dark">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="" type="image/png" />
	<!--plugins-->
    @yield('css')

	<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/highcharts/css/highcharts.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	{{-- <link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}" /> --}}
	{{-- <link rel="stylesheet" href="{{ asset('assets/css/semi-dark.css') }}" /> --}}
	<link rel="stylesheet" href="{{ asset('assets/css/header-colors.css') }}" />
	<title>{{ config('app.name') }}@yield('page_title')</title>

</head>
<body>

	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
        @include('admin.component.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
        @include('admin.component.header')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper h-auto">
			<div class="page-content container">
                @yield('content')
            </div>
		</div>
		<!--end page wrapper -->

		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->

		<!--Start Back To Top Button-->
            <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->

		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>

	<!--end wrapper-->
    @include('admin.component.switcher')
	<!--start switcher-->

	<!--end switcher-->

	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	{{-- <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script> --}}
	{{-- <script src="{{ asset('assets/plugins/highcharts/js/highcharts.js') }}"></script>
	<script src="{{ asset('assets/plugins/highcharts/js/exporting.js') }}"></script>
	<script src="{{ asset('assets/plugins/highcharts/js/variable-pie.js') }}"></script>
	<script src="{{ asset('assets/plugins/highcharts/js/export-data.js') }}"></script>
	<script src="{{ asset('assets/plugins/highcharts/js/accessibility.js') }}"></script>
	<script src="{{ asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script> --}}
    @yield('scripts')
	<script src="{{ asset('assets/js/index.js') }}"></script>
	<!--app JS-->

	<script>
        new PerfectScrollbar('.customers-list');
		new PerfectScrollbar('.store-metrics');
		new PerfectScrollbar('.product-list');
    </script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
