@extends('layout.layout')
@section('content')

        <div class="form-group mt-3">
            <input type="text" class="form-control mb-2 me-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search Name" style="max-width:300px; float: left;">
            <a class="btn btn-primary mb-3" href="search.php">SEARCH</a>
            <a class="btn btn-secondary mb-3" href="{{url('/contact')}}">BACK</a>
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
    
                {{-- Use foreach to traverse the table and display the data --}}
                @foreach ($contacts as $item)
                <tr>
    
                    {{-- Display Data --}}
                    <th scope="row"> {{ $loop->iteration }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->mobile }}</td>
    
                    {{-- Row Actions --}}
                    <td>
                        {{-- View Button --}}
                        <a href="{{ url('/contact/' . $item->id) }}" title="View Student">
                            <button class="btn btn-info btn-sm me-2 mb-1">View</button>
                        </a>
                        {{-- Edit Button --}}
                        <a href="{{ url('/contact/' . $item->id . '/edit') }}" title="Edit Student">
                            <button class="btn btn-primary btn-sm me-2 mb-1">Edit</button>
                        </a>
                        {{-- Delete Button --}}
                        <form method="POST" action="{{ url('/contact' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger mb-1 btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)">Delete</button>
                        </form>
                    </td>
    
                </tr>
                @endforeach

            </tbody>
        </table>
        
        {{ $contacts->links() }}
        
    </div>


    
@endsection