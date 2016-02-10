
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link rel="stylesheet" href="/laravel/public/css/bootstrap.min.css">
<link href="/laravel/public/calendar/css/responsive-calendar.css" rel="stylesheet">
<link rel='stylesheet' href='/laravel/public/calendar/css/jquery-ui.min.css' />
<link href='/laravel/public/calendar/css/fullcalendar.css' rel='stylesheet' />
<link href='/laravel/public/calendar/css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src="/laravel/public/calendar/js/jquery.js"></script>
<script src="/laravel/public/js/bootstrap.min.js"></script>
<script src='/laravel/public/calendar/js/moment.min.js'></script>
<script src='/laravel/public/calendar/js/jquery.min.js'></script>
<script src='/laravel/public/calendar/js/fullcalendar.min.js'></script>
<script src='/laravel/public/calendar/js/lang-all.js'></script>
<script>

	$(document).ready(function() {
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			lang: 'fr',
			buttonIcons: false, // show the prev/next text
			weekNumbers: true,
			editable: true,
			eventLimit: true, // allow "more" link when too many events				
				dayClick: function(date, jsEvent, view) {

		        // alert('Clicked on: ' + date.format());

		        // alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);

		        // alert('Current view: ' + view.name);
		        document.getElementById('open_modal').click();
		        $('#jour').val(date.format('DD/MM/YYYY'));
        		$('#jour1').val(date.format('DD/MM/YYYY'));
		        // change the day's background color just for fun
		        $(this).css('background-color', 'blue');
		    }
		});
    $('#type').change(function(){
        if($('#type').val() == 'entrainement' || $('#type').val() == 'match' || $('#type').val() == 'tournoi'){
            $('#categories').css('display','block');
        }
        else{
            $('#categories').css('display','none');
        }
   });
  }); 
		function create_planif(){
			// console.log('je crée ma planif');
			// alert('alert a ta mère'+$('#jour').val());
			tab = ['sujet','type','lieu','debut_heure','fin_heure'];
			var verif = 1;
			for (i in tab){
				if($('#'+tab[i]).val() == ""){
					verif = 0;
					err = "Le champ '"+tab[i]+"' est vide vous devez remplir ce champ pour crée la planification";
					break;
				}
			}
			if(verif == 1 && $('#debut_heure').val() > $('#fin_heure').val()){verif = 0; err = "La valeur de début et supérieur à celle de fin";}
			else if(verif == 1 && $('#debut_heure').val() == $('#fin_heure').val()){
				if($('#debut_min').val() >= $('#fin_min').val()){verif = 0; err = "La valeur début et égale à celle de fin";}
			}
			if(verif == 0){
				document.getElementById('error').className = 'alert alert-danger';
				document.getElementById('error').style.display = "";
				document.getElementById('error').innerHTML = '<strong>Attention!</strong> '+err;
			}
			else{
				// document.getElementById('error').className = 'alert alert-success';
				// document.getElementById('error').style.display = "";
				// document.getElementById('error').innerHTML = 'La planification a été crée ';
        for(i in tab){
          $('#'+tab[i]).val("");
        }
        document.getElementById('error').style.display = 'none';
        $('close').click();
			}
		}

</script>
<style>

	body {
		margin: 0;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#top {
		background: #eee;
		border-bottom: 1px solid #ddd;
		padding: 0 10px;
		line-height: 40px;
		font-size: 12px;
	}

	#calendar {
		max-width: 900px;
		margin: 40px auto;
		padding: 0 10px;
	}

</style>
</head>
<body>

	<button type="button" id="open_modal" style="display:none;"  data-toggle="modal" data-target="#myModal"></button>
	<div id='calendar'></div>


	<!-- Modal -->
    <div id="myModal" class="modal modal-wide fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Planification</h4>
          </div>
          <div class="modal-body">
            <div class="col-md-6" >
              <div class="form-group">
                <label class="col-md-2 control-label">Sujet</label>
                <div class="col-md-6" >
                    <input type="text" class="form-control" id="sujet">
                </div>
              </div></br>
              <div class="form-group">
                <label class="col-md-2 control-label">Début</label>
                <div class="col-md-6">
                  <input id="jour" class="date"disabled>
                    <select id="debut_heure">
                      <option></option>
                      <option value="00">00</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                    </select>
                    <select id="debut_min">
                      <option value="00" selected>00</option>
                      <option value="15">15</option>
                      <option value="30">30</option>
                      <option value="45">45</option>
                    </select>
                </div>
              </div></br>
              <div class="form-group">                
                <label class="col-md-2 control-label">Fin</label>
                <div class="col-md-6">
                    <input id="jour1" class="date"disabled> 
                    <select id="fin_heure">
                      <option></option>
                      <option value="00">00</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                    </select>
                    <select id="fin_min">
                      <option value="00" selected>00</option>
                      <option value="15">15</option>
                      <option value="30">30</option>
                      <option value="45">45</option>
                    </select>
                </div>
              </div></br>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="col-md-2 control-label">Type</label>
                <div class="col-md-6">
                  <select id="type">
                    <option></option>
                    <option value="entrainement">Entrainement</option>
                    <option value="reunion">Réunion</option>
                    <option value="match">Match</option>
                    <option value="tournoi">Tournoi</option>
                    <option value="fete">Fête</option>
                  </select>
                    <!-- <input type="text" class="form-control" id="type"> -->
                </div>
              </div></br>
              <div class="form-group" id="categories" style="display:none">
                <label class="col-md-2 control-label">Catégorie</label>
                <div class="col-md-6" >
                  <select class="form-control"  id="categorie">
                    <option></option>
                    <option>Junior</option>
                    <option>U-11</option>
                    <option>U-13</option>
                    <option>U-15</option>
                    <option>U-17</option>
                    <option>U-20</option>
                    <option>Senior</option>
                    <option>Loisir</option>
                  </select>
                </div>
              </div></br>
              <div class="form-group">
                <label class="col-md-2 control-label">Lieu</label>
                <div class="col-md-6" >
                  <!-- {{ Form::open(['action' => ['alexController@autocomplete'], 'method' => 'GET']) }}
                    {{ Form::text('lieu', '', ['id' =>  'lieu', 'placeholder' =>  'Entrée lieu'])}}
                  {{ Form::close() }} -->
                    <input type="text" class="form-control" id="lieu">
                </div>
              </div>
            </div></br>
          <div class="col-md-12">
            <div class="form-group">
                <label class="col-md-1 control-label">Description</label>
                <div class="col-md-6" >
                    <textarea type="text" class="form-control" id="description"></textarea>
                </div>
              </div>
          </div>
          </div>
          <div class="modal-footer">
          	<div id="error" style="display:none;" align="left"></div>
            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            <button type="button" class="btn btn-primary" onclick="create_planif()">Sauvegarde</button>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
