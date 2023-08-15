@extends('requests')

@section('title', 'Edit Request')

@section('contents')
    <h1 class="mb-0">Edit Request</h1>
    <hr />
    <form action="{{ route('update', $customerrequest->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $customerrequest->title }}" >
            </div>
      
            <div class="col mb-3">
                <label class="form-label">Detail</label>
                <textarea class="form-control" name="detail" placeholder="Detail" >{{ $customerrequest->Detail }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
