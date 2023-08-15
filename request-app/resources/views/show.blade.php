@extends('requests')

@section('title', 'Show Requests')

@section('contents')
    <h1 class="mb-0">Detail Request</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $customerrequest->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Due_Date</label>
            <input type="text" name="due_date" class="form-control" placeholder="Due_Date" value="{{ $customerrequest->due_date }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Status</label>
            <input type="text" name="status" class="form-control" placeholder="Status" value="{{ $customerrequest->status }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Detail</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $customerrequest->detail }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Comment</label>
            <textarea class="form-control" name="comment" placeholder="Comment" readonly>{{ $customerrequest->comment }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $customerrequest->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $customerrequest->updated_at }}" readonly>
        </div>
    </div>
@endsection
