<?php
session_start();
require_once 'database/database.php';

$errors =[];

$article_id =filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if($article_id === NULL || $article_id === false){
  $errors['article_id'] ="Parametre id non valide";
}

$sql ="SELECT * FROM articles WHERE id =:article_id";
$query = $pdo->prepare($sql);
$query->execute(compact('article_id'));
$article = $query->fetch();

// echo '<pre>';
// var_dump($article);
// echo '</pre>';






$pageTitle ='Article du blog'; 

// 2-Debut du tampon de la page de sortie
 
ob_start();

// 3-inclure le layout de la page Show
require_once 'layouts/articles/show_html.php';

//4-recuperation du contenu du tampon de la page Sho
$pageContent = ob_get_clean();

//5-Inclure le layout de la page de sortie
require_once 'layouts/layout_html.php';