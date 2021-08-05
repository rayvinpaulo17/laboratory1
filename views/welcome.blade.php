@extends('layouts.app')

@section('content')
    <div id="app">
        <app-component />
        <script src="{{asset('js/app.js')}}"></script>    
    </div>   
@endsection