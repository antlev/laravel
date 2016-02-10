<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Calendrier</title>
    <!-- <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'> -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/laravel/public/css/bootstrap.min.css">
    <!-- Respomsive slider -->
    <link href="/laravel/public/calendar/css/responsive-calendar.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <!-- Responsive calendar - START -->
        <div class="responsive-calendar">
        <div class="controls">
            <a class="pull-left" data-go="prev"><div class="btn btn-primary">Préc</div></a>
            <h4><span data-head-year></span> <span data-head-month></span></h4>
            <a class="pull-right" data-go="next"><div class="btn btn-primary">Suiv</div></a>
        </div><hr/>
        <div class="day-headers">
          <div class="day header">Lun</div>
          <div class="day header">Mar</div>
          <div class="day header">Mer</div>
          <div class="day header">Jeu</div>
          <div class="day header">Ven</div>
          <div class="day header">Sam</div>
          <div class="day header">Dim</div>
        </div>
        <div class="days" data-group="days">
          
        </div>
      </div>

      <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg"  style=" display: none;" data-toggle="modal" data-target="#myModal">Open Modal</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
            <p>Some text in the modal.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
      <!-- Responsive calendar - END -->
    </div>
    <script src="/laravel/public/calendar/js/jquery.js"></script>
    <script src="/laravel/public/calendar/js/planif.js"></script>
    <script src="/laravel/public/js/bootstrap.min.js"></script>
    <script src="/laravel/public/calendar/js/responsive-calendar.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        var date = new Date();
        var year = date.getFullYear();
        var day = date.getDate();
        var month = date.getMonth()+1;
        $(".responsive-calendar").responsiveCalendar({
          time: year+"-"+month,
        });
        $('.days').click(function(e){
          var mois = e.target.attributes[1].nodeValue;
          var jour = e.target.attributes[0].nodeValue;
          var annee = e.target.attributes[2].nodeValue;
          console.log(jour+'/'+mois+'/'+annee);
          // console.log($('button'));
          $('button').submit();
          // $('#myModal').submit();

          // document.myModal.submit();
          // document.getElementById("myForm").submit();
        });
      });
    </script>
  </body>
</html>