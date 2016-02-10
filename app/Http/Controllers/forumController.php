<?php
namespace App\Http\Controllers;

// use resources\views\index;
use DB;
use App\Http\Controllers\Controller;
use App\dataForum;

class forumController extends Controller{

	public function index(){

		$titre = "Index du forum";

		echo "Je suis dans mon controlleur";

		$categ = forumController::getCategorie();
		$sous_categ = forumController::getSousCategorie();

		var_dump($sous_categ);


		// foreach ($categ as $key => $value) {
		// 	$nbTopic = forumController::getNbTopic(key($value));
		// 	print($nbTopic);
		// 	print_r($value);
		// }



		// return View('forumView');

		return view('forumView',[ 'categ' =>  $categ],[ 'sous_categ' =>  $sous_categ]);

		// return View::make('forumView',array('db' => $db));

		// Appel d'une méthode pour les traitement avec la base de donnée
		// on créer un objet pret à stocker ces données
		// $dataForum = new dataForum;
		// var_dump($dataForum->getForum());
	}
	public function getCategorie(){

		$categ = DB::select(DB::raw("SELECT cat_id, cat_nom, cat_ordre
		FROM forum_categorie
		ORDER BY cat_ordre DESC"));
		// "LEFT JOIN forum_forum ON forum_categorie.cat_id = forum_forum.forum_cat_id
		// LEFT JOIN forum_post ON forum_post.post_id = forum_forum.forum_last_post_id
		// LEFT JOIN forum_topic ON forum_topic.topic_id = forum_post.topic_id
		// LEFT JOIN forum_membres ON forum_membres.membre_id = forum_post.post_createur
		// WHERE auth_view <= 0"
		return  $categ;
	}
	public function getSousCategorie(){

		$sous_categ = DB::select(DB::raw("SELECT sous_cat_id, sous_cat_nom, cat_sous_cat, sous_cat_desc
		FROM forum_sous_categorie
		ORDER BY sous_cat_id"));
		return  $sous_categ;
	}

	public function getNbTopic($cat){

		$res = DB::select(DB::raw("SELECT count(topic_id)
		FROM forum_topic
		JOIN forum_forum using(forum_id)
		JOIN forum_categorie ON forum_cat_id = cat_id
		WHERE cat_id = $cat"));

	}


	public function get($select,$from,$where){

		$res = DB::select(DB::raw("SELECT {$select}
			from {$from}
			where {$where}
			"));
	}

}

?>