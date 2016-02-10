
<?php
 

class SQLCommand extends Model {



public function get_shouts() { 
$results = DB::select('select * from shoutbox ORDER BY date_shoutbox DESC', [1]);
//print_r($results);
echo $results[0];
}

}

