<!DOCTYPE html>
<html>
<head>
    <title>Contact Laravel 8 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
<div class="container">

    {{-- NAVIGATION BAR --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-2">

        <a class="navbar-brand" href="{{url('contact')}}">LAVAREL WITH CRUD</a>

        {{-- NAV BAR MOBILE VIEW--}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- NAV BAR DESKTOP VIEW --}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                {{-- ROUTE TABLE VIEW --}}
                <li class="nav-item active">
                    <a class="nav-link btn btn-light me-2" href="{{url('/contact')}}">TABLE</a>
                </li>
                {{-- ROUTE MEMBERS VIEW --}}
                <li class="nav-item">
                    <a class="nav-link btn btn-light me-2" href="{{url('/members')}}">MEMBER</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')
</div>
   
</body>
</html>