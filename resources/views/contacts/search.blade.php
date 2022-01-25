@extends('layout.layout')
@section('content')

<h1>SEARCH</h1>

<div class="form-group mt-3">
    <form action=" {{ route('web.search') }}" method="GET">
        <input type="text" class="form-control form-control-sm me-2" name="query" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search" style="max-width:300px; float: left;">
        <button type="submit" class="btn btn-outline-primary btn-sm">Find</button>

        <a class="btn btn-secondary btn-sm" href="{{url('/contact')}}">BACK</a>
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