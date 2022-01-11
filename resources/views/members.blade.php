@extends('layout.layout')
@section('content')

        <!-- GROUP MEMBER CARDS -->
        
        <h1 class="mt-5 mb-5">GROUP MEMBERS</h1>

        <div class="row justify-content-around ps-5 pe-5">
            <div class="card col-md-4 m-3 p-0" style="width: 18rem;">
                <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">FEL JOHN S. BANG-ASAN</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Leader</h6>
                    <a onclick="window.open('https://github.com/feljohn07/', '_blank')" class="card-link" style="cursor: pointer">Github</a>
                </div>
            </div>

            <div class="card col-md-4 m-3 p-0" style="width: 18rem;">
                <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">LYN VILLACORTA</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Member</h6>
                </div>
            </div>

            <div class="card col-md-4 m-3 p-0" style="width: 18rem;">
                <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">ERICA MAE ATENTA</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Member</h6>
                </div>
            </div>
        </div>
@endsection