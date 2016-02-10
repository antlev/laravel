<head>
    <meta charset="UTF-8">
    <script src="{{('/laravel/public/js/jquery-2.1.1.min.js')}}"></script>
    <script src="{{('/laravel/public/js/bootstrap.min.js')}}"></script>
    <link href="{{('/laravel/public/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{('/laravel/public/css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <link href="{{('/laravel/public/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link href="{{('/laravel/public/css/view.css')}}" rel="stylesheet">
    <title>Terrains</title>
</head>
<div class="container">
	<div class="dataTables_wrapper form-inlin dt-boostrap no-footer">
		<div class="row">
			<div class="col-sm-6">
				<div class="dataTables_length">
					<label>Taille tableau :<select class="form-control input-sm" name="taille_table">
							<option value="10">10</option>
							<option value="25">25</option>
							<option value="50">50</option>
							<option value="100">100</option>						
						</select>
					</label>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="dataTables_filter">
					<label>Recherche <input type="search" class="form-control input-sm" placeholder></label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<table id="all_terrain" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid">
					<thead>
						<tr role="row">
							<th class="sorting" tabindex="0" rowspan="1" colspan="1" style="75px">Lien</th>
							<th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" style="400px" aria-short="ascending">Nom</th>
							<th class="sorting" tabindex="0" rowspan="1" colspan="1" style="200px">Crée le</th>
							<th class="sorting" tabindex="0" rowspan="1" colspan="1" style="200px">Modifié le</th>
						</tr>
					</thead>
					<tbody>
						<tr role="row" ></tr>
						@foreach($terrains as $terrain => $value)
						{{$value}}
						<!-- <tr role="row"> -->
							<!-- @foreach($terrain as $field) -->
							<!-- <td>{{ $terrain->$field}}</td> -->
							<!-- @endforeach -->
						<!-- </tr> -->
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>




