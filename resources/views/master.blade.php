<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAB Shop</title>
 
    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="{{ asset('//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700') }}" rel="stylesheet">
    <link href="{{ asset('//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i') }}" rel="stylesheet">

 

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--Logo trên title-->
    <link rel="icon" href="https://sab.com.vn/wp-content/uploads/2018/01/logo-sab-sm.svg" type="image/icon type">
    <!--Bản đồ-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
    <!-- Script của map -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>

</head>
<body>
    <div class="container-fluid">

        <div class="row min-vh-100">
            <div class="col-12">
                <!--Header-->
                @include('layout.header')
            </div>

            <div class="col-12">
                <!-- Main Content -->
                @yield('content')
            </div>

            <div class="col-12 align-self-end">
                <!-- Footer -->
                @include('layout.footer')
            </div>
        </div>

    </div>

    <!-- 
    <div class="toast-container position-fixed bottom-0 start-0 p-3">
        <div class="toast align-items-center text-white bg-success border-0">
            <div class="d-flex">
                <div class="toast-body">
                    <i class="fas fa-check-circle me-2"></i>
                    This is a success alert message.
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        <div class="toast align-items-center text-white bg-danger border-0">
            <div class="d-flex">
                <div class="toast-body">
                    <i class="fas fa-times-circle me-2"></i>
                    This is an error alert message.
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        <div class="toast align-items-center text-white bg-warning border-0">
            <div class="d-flex">
                <div class="toast-body">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    This is a warning alert message.
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        <div class="toast align-items-center text-white bg-info border-0">
            <div class="d-flex">
                <div class="toast-body">
                    <i class="fas fa-info-circle me-2"></i>
                    This is a error alert message.
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div> -->
    

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>




</body>
</html>