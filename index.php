    <!--
    Author      : Camille Déglise
    Date        : 05.04.2023
    Modifications : 28.01.2024
    Description : P-Appro1 - dynamisation d'un site web statique avec PHP
    -->

<?php
//Session start
session_start();
include("header.inc.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <link href='https://fonts.googleapis.com/css?family=Walter Turncoat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Auteur : C.D, Projet P-Appro1, site descriptif jeux de rôle, page d'accueil ">
    <title>Page d'accueil</title>
</head>

    <header>
        <h1>Les jeux de rôles sur table </h1>
    </header>

<body>
    <div id="chapitresAccueil">
        <div id="flexCote"></div>
        <article>
            <section id="Introduction">
                <h2>Accueil</h2>
                    <p id="preIntro">
                        Ce site aborde le sujet des jeux de rôles. C'est un site amateur créé par une 
                        amatrice des jeux de rôles.
                        <br> Je ne suis ni une experte ni un puit de savoir.
                        Je vais aborder quelques minis définitions et explications simples sur cette page d'accueil. 
                        <br>
                        Sur la page Vampire La Mascardade, j'aborde un jeu de rôle spécifique et comment il 
                        fonctionne dans les grandes lignes. Il faut le considérer comme un résumé express.
                        <br>
                        Une page de contact est disponible et la page de login est en cours de construction. 
                        <br> 
                        Elle sera finalisée lorsque mes connaissances en PHP - SQL seront au top. J'ai eu l'idée de l'intégrer
                        pour les joueurs avec qui je fais du jeu de rôle. 
                    </p>
                <h3>Les jeux de rôles sur table ? Késako ? </h3>
                    <p id="intro">
                        Tout le monde est un héros dans l'âme ! Si, si, regardez bien tout au fond !<br>
                        <br>
                        Les jeux de rôles sont de manière générale des moments où les personnes interprétent des personnages<br>
                        dans un monde plus ou moins proche de la réalité. Qu'ils soient en lien avec le théâtre, les jeux vidéos,<br> 
                        thérapeutiques ou encore éducatifs, les jeux de rôles sont là pour nous permettre de vivre <br> temporairement autre chose.<br>
                        <br>
                        Selon le wikitionnaire le jeu de rôle est une "Technique ou activité mettant les participants dans la situation<br>
                        de jouer chacun un rôle d’un personnage." <a id="source" href="https://fr.wiktionary.org/wiki/jeu_de_r%C3%B4le">Jeu de rôle - Définition</a> <br>
                        <br>
                        Dans pratiquement tous les jeux de rôles, pour résoudre des actions spécifiques dans la narration du Maitre de Jeu (MJ), 
                        les joueurs doivent utiliser des ensembles de dés représentant leur caractéristiques. 
                        Chaque jeu peut avoir différents dés, d10 à 10 faces comme  dans Vampire La Mascarade, d20 à 20 faces comme dans Donjon et Dragon,
                        ou encore des d100 combiné à des d10 comme dans WarHammer 40K. Je précise que le d100 n'a pas 100faces, mais 10 et chaque face représente une dizaine.
                        <br>
                        Chaque joueur a une fiche de personnage qu'il aura préalablement créé ou se sera vu proposer par le MJ. 
                        Ces fiches ont des caractéristiques comme l'intelligence, la dextérité, la force, le charisme; des domaines de compétences comme savoir se battre, érudition, vol à la tire,
                        intimidation; ou encore des pouvoirs "magiques" même selon le jeu pratiqué. <br>
                        <br>
                        De manière générale, le but d'une campagne (série de plusieurs parties suivant une chronologie), est de vivre
                        une quête dans un unviers  et d'y survivre.  
                    </p>
                    <img id="cthulhu" src="../img/cthulhu.jpg" alt="L'Appel de Cthulhu">
                </section>
                <h3 id="h3recette">Comment on fait un jeu de rôle ?</h3>
                <section id="articleSuite">
                    <p id="recette">
                        Il n'y a pas de recette pour faire un jeu de rôle dit "sur table" réussi.<br>
                        Cependant quelques ingrédients sont nécessaires :<br>
                    </p>
                    <ul>
                        <li>Des joueurs.euses, en tout cas 1.</li>
                        <li>Un.e Maitre.sse de jeu raccourci en MJ</li>
                        <li>Des fiches de personnages</li>
                        <li>Des dés de toute tailles : d10, d20, d100, d12, d8, d4 ou même de bons vieux d6 du Monopoly qui traîne chez Mami.</li>
                        <li>Le choix des dés ? c'est selon le jeu auquel on joue. Le MJ sait ce qu'il y a besoin. </li>
                        <li>Une table (optionnelle) avec des chaises (tout aussi optionnelles)</li>
                        <li>Des crayons, des gommes, c'est mieux pour noter les dégâts. </li>
                        <li>De quoi se sustanter et de quoi s'abreuver car certaines parties peuvent durer très longtemps</li>
                    </ul>
                    <img id="wh40k" src="../img/emporor_guard.webp" alt="Répurgateur de WarHammer 40K">
                </section> 
        </article>
        <div id="flexCote"></div>
    </div>
    <?php 
    include("footer.inc.php");
    ?>
</body>
</html>