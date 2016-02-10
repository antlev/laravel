<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" lang="fr"/>
    <title>{{$table}}</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#vue_list').DataTable({
            	"language":{
            		"url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
            	}
            });
        });
    </script>
</head>

<body>
    <div class="container">

        <table id="vue_list" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    @foreach($names as $nom)
                        <th>{{trans("view.$nom")}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($terrains as $terrain)
                <tr>
                    @foreach($names as $value)
                    <td>{{$terrain->$value}}</td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <script type="text/javascript">
        $('#vue_list')
            .removeClass('display')
            .addClass('table table-striped table-bordered');
    </script>
</body>

</html>