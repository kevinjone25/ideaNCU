@extends('layouts.master')

@section('title')
    Blog
@endsection
@section('content')
    <div>
        <h1>Write down your post</h1>
    </div>
    <br>
    <br>
    <form action="{{ route('post') }}" method="post" id="checkout-form">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">content</label>
            <textarea class="form-control" id="content" name="content"rows="6"></textarea>
        </div>
        <br>
        {{ csrf_field() }}
        <button type="submit" class="btn btn-success pull-left">Post</button>
    </form>
@endsection