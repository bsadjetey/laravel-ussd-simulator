<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>USSD Simulator</title>

    <link rel="icon" href="fav.png" type="image/x-icon">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{asset('ussdsimulator/css/bootstrap.min.css')}}">
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js" integrity="sha512-KBeR1NhClUySj9xBB0+KRqYLPkM6VvXiiWaSz/8LCQNdRpUm38SWUrj0ccNDNSkwCD9qPA4KobLliG26yPppJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
{{--    <link rel="stylesheet" href="css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="{{asset('ussdsimulator/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins -->
{{--    <link rel="stylesheet" href="{{asset('ussdsimulator/css/skins/_all-skins.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('ussdsimulator/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('ussdsimulator/css/ussd.css')}}">
</head>
<body>
<div class="container">
    <!-- Navigation Menu -->
    <section class="content-header">
        <h1>USSD Simulator</h1>
        <ol class="breadcrumb">
            <li><a href="{{url("/ussdsettings")}}"><i class="fa fa-cog"></i> Settings</a></li>
            <li class="active"><a href="{{url("/ussd")}}">USSD</a></li>
        </ol>
    </section>
    <!-- End Navigation Menu -->

    <!-- Section for ussd input entry -->
    <div class="flex-container">
        @yield("content")
    </div>
</div>
<script src="{{asset('ussdsimulator/js/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('ussdsimulator/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('ussdsimulator/js/bootstrap.min.js')}}"></script>
@yield("jsscripts")
</body>
</html>
