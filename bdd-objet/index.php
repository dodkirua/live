<?php
require_once "imports.php";

$articleManager = new ArticleManager();
$articles = $articleManager->getArticles();

$premierArticle = $articles[0];
$premierArticle->setTitle('Mon nouveau title');
$premierArticle->setContent('mon nouveau contenue');
$articleManager->update($premierArticle);


$monArticle = new Article();
$monArticle->setTitle('Hello World, new article');
$monArticle->setContent('Mon nouveau contenu');
$articleManager->insert($monArticle);
