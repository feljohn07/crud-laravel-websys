@extends('layout.layout')
@section('content')

    <h1 class="mt-3">SEARCH PAGE</h1>

    <div class="table-responsive">  

        <!-- TABLE -->
        <table class="table table-bordered table-hover table-responsive-md rounded mt-3">

            {{-- Table Header - Search Form --}}
            <thead>
                <tr>
                    <th colspan="5">
                        <form action=" {{ route('web.search') }}" method="GET">
                            <input type="text" class="form-control form-control-sm me-2 mt-1 mb-2" value="{{ $query }}" name="query" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search" style="max-width:300px; float: left;" required>
                            <button type="submit" class="btn btn-outline-primary btn-sm mt-1 mb-2">Find</button>
                            <a class="btn btn-secondary btn-sm mt-1 mb-2" href="{{url('/appointment')}}">BACK</a>
                        </form>
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
                
                {{-- Table Data  --}}
                {{-- CHECKS IF THE SEARCH IS EMPTY --}}
                @if ($appointment->isEmpty())

                    {{-- Display This if No data found --}}
                    <tr>
                        <td colspan="5">No Keyword Found.</td>
                    </tr>
                    
                @else

                    {{-- Continue to Traverse the data if a keyword is found --}}
                    {{-- Use foreach to traverse the table and display the data --}}
                    @foreach ($appointment as $item)

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
                @endif

            </tbody>
        </table>
    </div>
    
    {{ $appointment->links() }}

</div>
    
@endsection