<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\forum;
use App\Calendar;
use DB;
use File;
use View;
class alexController extends Controller
{
    public function getInfos()
    {
        return view('formulaire');
    }

    public function postInfos(Request $request)
    {
        $user = New User;
        echo "Valeur de ma request :: ";
        echo "<pre>";
        $tabs = array('civilite', 'nom','prenom','mail','telephone','mobile','datenaiss','sport','categorie','adresse','cp','ville','nationalite');
        foreach ($tabs as $tab) {
            // echo "\nValeur de ".$tab." ====>>>>> ".$request[$tab];
            if($tab == 'datenaiss'){
                $ex = explode("/", $request[$tab]);
                // var_dump($ex);
                $user->$tab = $ex[2].'-'.$ex[1].'-'.$ex[0];
            }
            else{$user->$tab = $request[$tab];}

        }
        if($request['classement']){$user->classement = $request['classement'];}
        $length = 20;

        $user->id = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

        var_dump($user);
        echo "</pre>";

        // $user->save();
    }
    public function getCalendar(){
        return view('fullcalendar');
    }
    public function index($table){
        $terrains = DB::table($table)->paginate(15);
        $name = alexController::getField($table);
        $return = array(
            'terrains' => $terrains,
            'names' => $name,
            'table' => $table
        ); 
        return View('view_list', $return);
    }
    public function getField($table){
        $retour = array(
            'users' => array('nom','prenom','mail','datenaiss','sport','categorie','civilite','mobile','telephone','adresse','ville'),
            'roles' => array('nom','categorie','created_at','update_at'),
            'terrains' => array('nom', 'type','created_at','update_at'),
        );
        return $retour[$table];
    }

    public function autocomplete(){
        $lieus = DB::select('select distinct nom from roles');
        return json_encode($lieus);
        // var_dump($lieus);
        // $lieu = array();
        // foreach ($lieus as $key => $value) {
        //     $lieu[] = $value;
        // }
        // var_dump($request);
    }
}