@extends('requests')

@section('title', 'New Request')
@section('contents')
<div class="container" style="margin: 0 auto">
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label" style="font-size: 30px">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="detail" class="form-label" style="font-size: 30px">Detail</label>
            <textarea name="detail" class="form-control" id="detail" rows="5" placeholder="Detail"></textarea>
        </div>
        <div class="mb-3" style="text-align: center">
            <button type="submit" class="btn" style="background-color:coral; color:cornsilk; width:500px">Add</button>
        </div>
    </form>
</div>
@endsection




