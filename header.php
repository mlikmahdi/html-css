<?php
/**
 * Created by PhpStorm.
 * User: mahdi
 * Date: 27/11/2017
 * Time: 14:53
 */

require "form.php";

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>PHP INITIATION</title>
        <link href="assets/font/font-awesome-4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Open+Sans:300" rel="stylesheet">
        <link rel="stylesheet" href="assets/styles.css">

    </head>
    <body>
        <header class="container">
            <h1 class="title">NEWS</h1>
            <nav class="main_menu">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="index.php">Liste des articles</a></li>
                    <li><a href="blog/show.php">Article</a></li>
                    <li><a href="signUp.php">Newsletter</a></li>
                </ul>
            </nav>
            <div class="connexion">
                <ul>
                    <li>
                        <a>Connexion</a>
                        <ul>
                            <li>
                                <form action="" method="post">
                                    <input type="text" name="login" placeholder="Login">
                                    <input type="password" name="password" placeholder="Password">
                                    <input type="submit" name="submit" value="Envoyer" id="envoyer">
                                    <a href="signUp.php" id="inscription">S'inscrire</a>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
            <div class="breakingNews">
                <span id="titleBreaking">Breaking News</span>
                <p>Voyage à la mer</p>
                <marquee behavior="alternate" direction="left">Voyage à la mer</marquee>
            </div>
        </header>

