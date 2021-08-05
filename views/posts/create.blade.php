@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'title text'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::text('body', '', ['class' => 'form-control', 'placeholder' => 'Body text'])}}
        </div>
        {{Form::submit('submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection