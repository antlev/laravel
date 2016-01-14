<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class projetLbl	 extends Model {



public static function get_shouts() { 

	$msgs = DB::table('shoutbox') ->orderBy('date_shoutbox', 'desc')->get();

 foreach ($msgs as $user)
 {
    var_dump($user->message_shoutbox);
 }

//$results = DB::select('select * from shoutbox ORDER BY date_shoutbox DESC', [1]);
//print_r($results);
}

}
