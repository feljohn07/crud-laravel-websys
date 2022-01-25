<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clinic Appointment</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
  
<div class="container">

    {{-- NAVIGATION BAR --}}
    <nav class="navbar navbar-expand-md navbar-light bg-light p-2">

        <a class="navbar-brand" href="{{url('appointment')}}">Clinic Appointment</a>

        {{-- NAV BAR MOBILE VIEW--}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            {{-- NAV BAR DESKTOP VIEW --}}
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    {{-- ROUTE HOME VIEW --}}
                    <li class="nav-item active">
                        <a class="nav-link btn btn-light me-2" href="{{url('/')}}">Home</a>
                    </li>

                    {{-- ROUTE TABLE VIEW --}}
                    <li class="nav-item active">
                        <a class="nav-link btn btn-light me-2" href="{{url('/appointment')}}">Appointments</a>
                    </li>
                    {{-- ROUTE MEMBERS VIEW --}}
                    <li class="nav-item">
                        <a class="nav-link btn btn-light me-2" href="{{url('/members')}}">Group Member</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>
   
</body>
</html>