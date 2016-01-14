@extends('layouts.home')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css" >
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}"type="text/css">
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" type="text/css">
@endsection


@section('title', 'Home Page')
@section('header')
<center>
    <div class="page-header">
        <h2 class="glyphicon glyphicon-home"> Maison des ligues de lorraine</h2>
    </div>
</center>

@endsection
@section('nav')
@endsection
@section('body')
   

@endsection

@section('content')
@endsection

@section('footer')
@endsection
@section('javascript')


<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
@endsection 

@section('modal')


@endsection