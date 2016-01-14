<?php
//Cette fonction doit être appelée avant tout code html
namespace App;


//On donne ensuite un titre à la page, puis on appelle notre fichier debut.php
use resources\views\identifiantsForum;
use resources\views\debutForum;
use resources\views\menuForum;
use Illuminate\Database\Eloquent\Model;
use DB;
class dataForum extends Model{

    function getForum(){
        //Initialisation de deux variablesq
        $titre = "Index du forum";
        $totaldesmessages = 0;

        $categorie = NULL;


        //Cette requête permet d'obtenir tout sur le forum
        $dataForum = DB::select('SELECT cat_id, cat_nom, forum_forum.forum_id, forum_name, forum_desc, forum_post, forum_topic, auth_view, forum_topic.topic_id,  forum_topic.topic_post, post_id, post_time, post_createur, membre_pseudo, 
        membre_id 
        FROM forum_categorie
        LEFT JOIN forum_forum ON forum_categorie.cat_id = forum_forum.forum_cat_id
        LEFT JOIN forum_post ON forum_post.post_id = forum_forum.forum_last_post_id
        LEFT JOIN forum_topic ON forum_topic.topic_id = forum_post.topic_id
        LEFT JOIN forum_membres ON forum_membres.membre_id = forum_post.post_createur
        -- WHERE auth_view <= :lvl 
        ORDER BY cat_ordre, forum_ordre DESC');
        return $dataForum;
        // $query->bindValue(':lvl',$lvl,PDO::PARAM_INT);
        // $query->execute();

        // //On compte les membres
        // $TotalDesMembres = $dataForum->query('SELECT COUNT(*) FROM forum_membres')->fetchColumn();
        // $query->CloseCursor();  
        // $query = $dataForum->query('SELECT membre_pseudo, membre_id FROM forum_membres ORDER BY membre_id DESC LIMIT 0, 1');
        // $data = $query->fetch();
        // $derniermembre = stripslashes(htmlspecialchars($data['membre_pseudo']));

        // $query->CloseCursor();
    }
}
?>

