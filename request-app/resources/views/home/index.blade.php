@extends('admin.app')

@section('title', 'Requests')

@section('contents')

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
            @if($customersrequest->count() > 0)
                @foreach($customersrequest as $rs)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $rs->title }}</td>
                                <td class="align-middle">{{ $rs->due_date }}</td>
                                <td class="align-middle">{{ $rs->detail }}</td>
                                <td class="align-middle">{{ $rs->status }}</td>
                                <td class="align-middle">{{ $rs->comment }}</td>
                                <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('home.showadmin', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                        <a href="{{ route('home.editadmin', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>

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
