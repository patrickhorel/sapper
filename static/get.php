<?php
header('Access-Control-Allow-Origin: *');
header( 'content-type: text/html; charset=utf-8' );

$ville = 'Ici';
$prenom='lui';
$posted = &$_POST ;
$ville= urldecode($posted["ville"]);
$prenom= urldecode($posted["prenom"]);

$result = "{$prenom} vit à {$ville} depuis 2 mois.";

// $connection = new MongoClient();



/*$connection = new MongoClient("mongodb+srv://admin:Mongo1024@cluster0.kzrdh.mongodb.net/<dbname>?retryWrites=true&w=majority"); // connexion
$db = $connection->membres;
$collection = $db->2020-2021;

$document = array( 
    "title" => "MongoDB", 
    "description" => "database", 
    "likes" => 100,
    "url" => "http://www.data-flair.training/mongodb/",
    "by" => "data flair"
   );
  $collection->insert($document);
*/


 echo  json_encode($result);

?>
