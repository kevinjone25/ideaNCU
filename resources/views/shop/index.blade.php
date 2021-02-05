@extends('layouts.master')

@section('title')
    Blog
@endsection


@section('content') 

@foreach ($posts->chunk(1) as $postChunk)
    @foreach ($postChunk as $post)
    <div class="panel panel-default">
        <div class="panel-heading">{{$post->title}}</div>
        <div class="panel-body">
          {{$post->content}}
        </div>
      </div>
    @endforeach
@endforeach

@endsection