@extends('layout.layout')
@section('content')


    <!-- TABLE -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-responsive-md rounded mt-5">
            
            <thead>
                <tr>
                    {{-- Table Header - Add New Button --}}
                    <th scope="col thead-dark" class="justify-content-center mt-1" style="width: 115px;">        
                        <a href="{{ url('/appointment/create') }}" class="btn btn-success btn-sm justify-content-around " title="New Row">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New </a>
                    </th>

                    {{-- Table Header - Search Form --}}
                    <th colspan="4">        
                        <div class="form-group">
                            <form action=" {{ route('web.search') }}" method="GET">
                                <input type="text" class="form-control form-control-sm me-2 mt-1" name="query" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search" style="max-width:300px; float: left;" required>
                                <button type="submit" class="btn btn-outline-primary btn-sm mt-1">Find</button>
                            </form>
                        </div>  
                    </th>
                </tr>
            </thead>

            <tbody>

                {{-- Table Column Header --}}

                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Appointment</th>
                    <th scope="col">Action</th>
                </tr>

                {{-- Table Data --}}
                {{-- Use foreach to traverse the table and display the data --}}
                @foreach ($appointments as $item)
                <tr>

                    {{-- Display Data --}}
                    <th scope="row"> {{ $loop->iteration }}</th>
                    <td>{{ $item->firstname }}</td>
                    <td>{{ $item->lastname }}</td>
                    <td>{{ $item->date }} {{ date('h:i A', strtotime($item->time)); }}</td>

                    {{-- Row Actions --}}
                    <td>
                        {{-- View Button --}}
                        <a href="{{ url('/appointment/' . $item->id) }}" title="View Student">
                            <button class="btn btn-info btn-sm me-2 mb-1">View</button>
                        </a>
                        {{-- Edit Button --}}
                        <a href="{{ url('/appointment/' . $item->id . '/edit') }}" title="Edit Student">
                            <button class="btn btn-primary btn-sm me-2 mb-1">Edit</button>
                        </a>
                        {{-- Delete Button --}}
                        <form method="POST" action="{{ url('/appointment' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger mb-1 btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
                        </form>
                    </td>

                </tr>

                @endforeach
                
            </tbody>
        </table>
    </div>
    
    {{ $appointments->links() }}
    
@endsection