<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{ env('APP_NAME') }}" />
    <meta name="description" content="{{ env('APP_NAME') }}" />
    <meta name="keywords" content="{{ env('APP_NAME') }}">
    @include('include.style')
    @include('include.function')
    @stack('css')
</head>

<body class="navbar-top ">
    <input type="hidden" value="{{ url('/') }}" id="public_path">
    <!-- sidebar-xs -->

    <!-- Main navbar -->
    @include('include.navbar')
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            @include('include.sidebar')
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                @include('include.header')
                <!-- /page header -->


                <!-- Content area -->
                <!-- <div class="content"> -->
                <div class="content-utama">
                    @if (session()->has('status'))
                        <script type="text/javascript">
                            alertKu('success', "{{ session()->get('status') }}");
                        </script>
                        <div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
                            <button type="button" class="close" data-dismiss="alert">
                                <span>×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <span class="text-semibold">Berhasil! </span> {{ session()->get('status') }}
                            {{ session()->forget('status') }}
                        </div>
                    @endif
                    @if (session()->has('statusT'))
                        <div class="alert alert-warning alert-styled-left">
                            <button type="button" class="close" data-dismiss="alert">
                                <span>×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <span class="text-semibold">Gagal!</span> {{ session()->get('statusT') }}
                            {{ session()->forget('statusT') }}
                        </div>
                    @endif
                    <!-- yield content -->
                    @yield('tempat_content')
                    <!-- yield content -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

        @include('include.tempat_modal')
        @stack('modals')
    </div>
    <!-- /page container -->
    <!-- Footer -->
    @include('include.footer')
    <!-- /footer -->
    <script type="text/javascript"></script>

    <!-- /footer -->
    <script type="text/javascript">
        if ($('.select22').length) {
            $('.select22').select2();
        }
        // START SCRIPT TABEL 
        $('.datatable-basic').DataTable();


        // END SCRIPT TABEL 
    </script>
    @stack('scripts')
    <!-- /footer -->
    @stack('scripts')
</body>

</html>
