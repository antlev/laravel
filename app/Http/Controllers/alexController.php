<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\forum;

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
            echo "\nValeur de ".$tab." ====>>>>> ".$request[$tab];
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

        var_dump($request);
        echo "</pre>";

        $user->save();
    }

}