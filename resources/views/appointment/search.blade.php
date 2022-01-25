@extends('layout.layout')
@section('content')

<h1>SEARCH</h1>

<div class="form-group mt-3">
    <form action=" {{ route('web.search') }}" method="GET">
        <input type="text" class="form-control form-control-sm me-2" value="{{ $query }}" name="query" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search" style="max-width:300px; float: left;">
        <button type="submit" class="btn btn-outline-primary btn-sm">Find</button>

        <a class="btn btn-secondary btn-sm" href="{{url('/appointment')}}">BACK</a>
    </form>
</div>   

    <!-- TABLE -->
    <table class="table">

        <tbody>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Action</th>
            </tr>
            
            {{-- CHECKS IF THE SEARCH IS EMPTY --}}
            @if ($appointment->isEmpty())

                <tr>
                    <td colspan="5">No Keyword Found.</td>
                </tr>
                
            @else

                {{-- Use foreach to traverse the table and display the data --}}
                @foreach ($appointment as $item)

                    <tr>

                        {{-- Display Data --}}
                        <th scope="row"> {{ $loop->iteration }}</th>
                        <td>{{ $item->firstname }}</td>
                        <td>{{ $item->lastname }}</td>
                        <td>{{ $item->date }} {{ $item->time }}</td>

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
    
    {{ $appointment->links() }}

</div>
    
@endsection