<!DOCTYPE html>
<html>
<head>
    <title>Contact Laravel 8 CRUD</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"></head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $('#input_starttime').pickatime({});
    </script>
<body>
  
<div class="container">

    {{-- NAVIGATION BAR --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-2">

        <a class="navbar-brand" href="{{url('appointment')}}">Clinic Appointment</a>

        {{-- NAV BAR MOBILE VIEW--}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

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
    </nav>

    @yield('content')
</div>
   
</body>
</html>