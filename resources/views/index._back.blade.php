@extends('layouts.home')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css" >
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}"type="text/css">
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" type="text/css">
@endsection


@section('title', 'Home Page')
@section('header')

<center><h2 class="glyphicon glyphicon-home"> Page d'acceuil maison des lorraines</h2></center>

@endsection
@section('body')
   

@endsection

@section('content')
 				<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Formulaire</button>
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Aperçu du formulaire</h4>
            </div>
            <div class="modal-body">
                Exemple de modal
            </div>
        </div>
    </div>
</div>

 <!-- <a class="btn btn-primary pull-right addProjectModal" data-toggle="modal" data-target="#ProjectModal" href="projects/jsModal"><i class="fa fa-pencil"></i> Add Project</a>
 <div class="modal fade" id="ProjectModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="frmAddProject"></div>
       
    </div>
</div> -->
@endsection

@section('javascript')


<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
@endsection 

@section('modal')


@endsection