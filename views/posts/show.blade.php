@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default btn-primary">Back</a>
    <h1>{{$post->title}}</h1>
    <div class="">
        {!! $post->body !!}    
    </div>    
    <small>Written on {{$post->created_at}}</small>
@endsection