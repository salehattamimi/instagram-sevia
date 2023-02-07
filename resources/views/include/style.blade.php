@if (isset($meta_peta))
    <title>{{ env('APP_NAME') }} - {!! $meta_peta !!}</title>
    <meta name="keywords" content="{{ env('APP_NAME') }}" />
    <meta name="description" content="{!! $meta_peta !!}">
@else
    <title>Selamat Datang di {{ env('APP_NAME') }}</title>
    <meta name="keywords" content="{{ env('APP_NAME') }}" />
    <meta name="description" content="{{ env('APP_NAME') }}">
@endif

<link rel="icon" href="{{ asset('assets/images/instagram_logo.svg.webp') }}" type="image/x-icon">

<!-- Global stylesheets -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
<!-- <link href="{{ asset('assets/css/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css"> -->
<link href="{{ asset('assets/fonts/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/core.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/components.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet" type="text/css">
<!-- /global stylesheets -->

<link href="{{ asset('assets/switchonoff.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/switchonoff_hadir.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/switchonoff_active.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/switchonoff_bayar.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/switchonoff_expired.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/switch_acc_member_event.css') }}" rel="stylesheet" type="text/css">

<link href="{{ asset('assets/leaflet/leaflet.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/instagram.css') }}" rel="stylesheet" type="text/css">


<!-- Core JS files -->
<script type="text/javascript" src="{{ asset('assets/js/plugins/loaders/pace.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}
<script type="text/javascript" src="{{ asset('assets/js/core/libraries/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/core/libraries/bootstrap.min.js') }}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script type="text/javascript" src="{{ asset('assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/switch.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/pages/form_multiselect.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/ui/moment/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/pickers/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/ui/nicescroll.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/js/core/app.js') }}"></script>


{{-- <script type="text/javascript" src="{{ asset('assets/js/plugins/ui/ripple.min.js') }}"></script> --}}

{{-- <script type="text/javascript" src="{{ asset('assets/js/core/libraries/jasny_bootstrap.min.js') }}"></script>  --}}
<!-- /theme JS files -->


<script type="text/javascript" src="{{ asset('js/share.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/proses_data.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tagihan_listrik.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/laporan_petugas.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/proses_data_noven.js') }}"></script>


{{-- <script type="text/javascript" src="{{ asset('assets/js/pages/form_layouts.js') }}"></script> --}}

<script type="text/javascript" src="{{ asset('assets/js/plugins/notifications/sweet_alert.min.js') }}"></script>


<script type="text/javascript" src="{{ asset('assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>


<script src="{{ asset('assets/highcharts/highcharts.js') }}"></script>
<script src="{{ asset('assets/highcharts/data.js') }}"></script>
<script src="{{ asset('assets/highcharts/drilldown.js') }}"></script>
<script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('ckeditor_custom/ckeditor.js') }}"></script>



<script src="{{ asset('assets/js/plugins/buttons/spin.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/buttons/ladda.min.js') }}"></script>


<script type="text/javascript" src="{{ asset('assets/js/plugins/ui/fullcalendar/fullcalendar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/pages/extra_fullcalendar.js') }}"></script>


<script type="text/javascript" src="{{ asset('assets/js/plugins/uploaders/dropzone.min.js') }}"></script>


<script type="text/javascript" src="{{ asset('assets/js/plugins/forms/wizards/steps.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
{{-- <script type="text/javascript" src="{{asset('assets/js/plugins/forms/styling/uniform.min.js')}}"></script> --}}
{{-- <script type="text/javascript" src="{{asset('assets/js/core/libraries/jasny_bootstrap.min.js')}}"></script> --}}
<script type="text/javascript" src="{{ asset('assets/js/plugins/forms/validation/validate.min.js') }}"></script>
{{-- <script type="text/javascript" src="{{asset('assets/js/plugins/extensions/cookie.js')}}"></script> --}}

<script type="text/javascript" src="{{ asset('assets/js/pages/wizard_steps.js') }}"></script>


<script type="text/javascript" src="{{ asset('assets/leaflet/leaflet-1.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/leaflet/wicket/wicket.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/leaflet/wicket/wicket-leaflet.js') }}"></script>




<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PJRNM7J4QG"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-PJRNM7J4QG');
</script>

<style type="text/css">
    .table tbody tr td {
        word-break: break-word !important;
        vertical-align: center;
    }

    table tbody tr td {
        word-break: break-word !important;
        vertical-align: center;
    }

    .loadinghamdi {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: rgba(0, 0, 0, .5);
        /* z-index: 9999; */
    }

    .loadinghamdi-wheel {
        width: 20px;
        height: 20px;
        margin-top: -40px;
        margin-left: -40px;

        position: absolute;
        top: 50%;
        left: 50%;

        border-width: 30px;
        border-radius: 50%;
        -webkit-animation: spin 1s linear infinite;
    }

    .hamdistyle-2 .loadinghamdi-wheel {
        border-style: double;
        border-color: #ccc transparent;
    }

    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0);
        }

        100% {
            -webkit-transform: rotate(-360deg);
        }
    }

    .required {
        font-weight: bold;
        color: red;
    }

    .red {
        color: red;
    }
</style>
