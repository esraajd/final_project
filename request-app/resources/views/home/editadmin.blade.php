@extends('admin.app')

@section('title', 'Edit Request')

@section('contents')
    <h1 class="mb-0">Edit Request</h1>
    <hr />
    <form action="{{ route('home.updateadmin', $customersrequest->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Due Date</label>
                <input type="date" name="due_date" class="form-control" placeholder="Due Date" value="{{ $customersrequest->due_date }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Comment</label>
                <input type="data" name="comment" class="form-control" placeholder="Comment" value="{{ $customersrequest->comment }}" >
            </div>


            <div class="col mb-3">
                <label class="form-label">Status</label>
                <select name="status" id="status" placeholder="status" class="form-control">
                    <option value="accept">Accept</option>
                    <option value="reject">Reject</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
