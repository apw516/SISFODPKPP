<!DOCTYPE html>
<html lang="en">

<head>
   @include('templates/header')
</head>

<body class="nav-md">
    <div class="preloader2" id="loader">
        <div class="loading">
            <img src="{{ asset('public/img/load2.gif') }}" width="100">
            <p>Harap Tunggu</p>
        </div>
    </div>
    <div class="container body">
        @include('templates.topbar')
        @include('templates.sidebar')
        <div class="main_container">
            <div class="right_col" role="main">
                @yield('container')
            </div>
            <footer>
                <div class="pull-right">
                    apw516@sisfosdkpp2023</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('public/gen/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('public/gen/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('public/gen/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('public/gen/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('public/gen/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('public/gen/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('public/gen/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('public/gen/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('public/gen/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('public/gen/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('public/gen/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('public/gen/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('public/gen/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('public/gen/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('public/gen/build/js/custom.min.js') }}"></script>

    <!-- jQuery Smart Wizard -->
    {{-- <script src="{{ asset('public/gen/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}"></script> --}}
    <!-- Custom Theme Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Datatables -->
    <script src="{{ asset('public/gen/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('public/gen/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <script>
        $(".preloader2").fadeOut();

        function loadshow() {
            spinner = $('#loader')
            spinner.show();
        }

        function loadhide() {
            spinner = $('#loader')
            spinner.hide();
        }
    </script>
</body>

</html>
