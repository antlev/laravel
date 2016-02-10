<!DOCTYPE HTML>
<html>

  <head>
    <meta charset="utf-8">
    <link href="laravel/public/css/bootstrap.css" rel="stylesheet">
    <link href="{{('/laravel/public/css/bootstrap.min.css')}}" rel="stylesheet">
    <style type="text/css">
      [class*="col"] { margin-bottom: 20px; }
      img { width: 100%; }
    </style>
  </head>


<div class="container" style="margin-top: 35px">
  <div class="page-header page-heading">
    <h1 class="pull-left">Forums</h1>
    <ol class="breadcrumb pull-right where-am-i">
      <li><a href="#">Forums</a></li>
      <li class="active">List of topics</li>
    </ol>
    <div class="clearfix"></div>
  </div>
  <p class="lead">Bonjour et bienvenue sur le forum de la maison des ligues. Ici vous pourrez partager vox expériences, posez vos questions à la communauté ou préparer des entrainements spéciaux pour votre équipe.</p>
  <table class="table forum table-striped">
    <thead>
      @foreach($categ as $cat) <!-- On affiche les catégories -->
      <tr>
        <th class="cell-stat"></th>
        <th>
          <h3>{{$cat->cat_nom}}</h3>
        </th>
        <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
        <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
        <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
      </tr>
    </thead>
      @foreach($sous_categ as $sous_cat)  <!-- On affiche les sous_catégories -->
      @if($sous_cat->cat_sous_cat == $cat->cat_id) <!-- Uniquement si elles appartiennent à la catégorie affichée -->
      <tr>
        <td class="text-center"><i class="fa fa-heart fa-2x text-primary"></i></td>
        <td>
          <h4><a href="#">{{$sous_cat->sous_cat_nom}}</a><br><small>{{$sous_cat->sous_cat_desc}}</small></h4>
        </td>
        <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
        <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
        <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 3 months ago</small></td>
      </tr>
      @endif
      @endforeach
    @endforeach

  </body>
</html>                                              