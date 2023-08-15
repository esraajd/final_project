@extends('requests')

@section('title', 'Home')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">All Requests</h1>
        <a href="{{ route('create') }}" class="btn" style="background-color:coral; color:cornsilk">Add Request</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Due Date</th>
                <th>Detail</th>
                <th>Status</th>
                <th>Comment</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($allrequests->count() > 0)
                @foreach($allrequests as $rs)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $rs->title }}</td>
                                @if($rs->due_date)
                                     <td class="align-middle" style="background-color: yellow">{{ $rs->due_date }}</td>
                                @else
                                    <td class="align-middle">{{ $rs->due_date }}</td>
                                @endif
                                <td class="align-middle">{{ $rs->detail }}</td>
                                @if($rs->status=='accept')
                                    <td class="align-middle" style="background-color: yellow">{{ $rs->status }}</td>
                                @else
                                    <td class="align-middle">{{ $rs->status }}</td>
                                @endif
                                @if($rs->comment !== '-')
                                     <td class="align-middle" style="background-color:rgba(253, 0, 0, 0.815)">{{ $rs->comment }}</td>
                                @else
                                    <td class="align-middle">{{ $rs->comment }}</td>
                                @endif

                                <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                        <a href="{{ route('edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger m-0">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">No Requests yet</td>
                </tr>
            @endif
        </tbody>
    </table>



@endsection
