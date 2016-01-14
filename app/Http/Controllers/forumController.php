<?php
namespace App\Http\Controllers;

// use resources\views\index;
use App\Http\Controllers\Controller;
use App\dataForum;


class forumController extends Controller{

	public function index(){

		echo("This is the index page");
		// Appel d'une méthode pour les traitement avec la base de donnée
		// on créer un objet pret à stocker ces données
		$dataForum = new dataForum;
		var_dump($dataForum->getForum());
	}
	// public function getinfo(){

	// 	echo "string";
	// 	// require_once '\resources\views\index.php';
	// 	$dataForum = new dataForum;
	// 	$forum = dataForum::getForum();
	// 	var_dump($forum);
	// }

}

?>