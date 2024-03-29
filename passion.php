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
    <meta name="description" content="Auteur : C.D, Projet P-Appro1, site descriptif jeux de rôle. Description non-exhaustive
    sur le jeu de rôle Vampire La Mascarade avec explications du système de jeu.">
    <title>Vampire La Mascarade</title>
</head>

<body>
    <header>
        <h1> Vampire La Mascarade </h1>
    </header>

    <div id="chapPassion">
        <div id="flexCote"></div>
            <article>
                <h2>La Masca quoi ?</h2>
                <h3>Quand je suis tombée dans la soupe du jeu de rôle</h3>

                <section id="lasoupe">
                    <p id="soupe">
                        A 19 ans, lors d'un après-midi d'été, j'ai été invitée à découvrir
                        une partie de jeu de rôle sur table avec un groupe d'amis. <br> Il s'agissait
                        de quelque chose de totalement inconnu pour moi. <br>
                        Je jouais déjà au jeux vidéos et je faisais du théâtre depuis plusieurs années. <br>
                        Un jeu mélangeant les principes des jeux vidéos de type role-play et <br> de l'improvisation ?
                        Cela ne pouvait que me plaire. Et ce fut le cas. <br>
                        <br>
                        J'ai eu la chance de découvrir plein d'univers différents et deux ont été de véritables coups de coeurs. <br>
                        Il s'agit en premier du jeu "Vampire La Mascarade". 
                        Le deuxième jeu qui fut celui auquel j'ai le plus joué était WarHammer 40K. <br>
                    </p>
                    <img id="chroniques" src="../img/chroniclesVampire.jpg" alt="Photo du livre Vampire La Mascarade">
                    <h3>Vampire La Mascarade, un jeu d'horreur et de politique</h3>
                    <p id="vampireLaMascarade">
                       Publié en 1991 par LINK White Wofl Publishing puis réédité pour la troisième fois en 1998, enfin racheté par LINK Onyx Path en 2011, le jeu de Vampire La Mascarade
                       est bien connu du public amateur de jeu de rôle, dits les rôlistes.
                       C'est un jeu évoluant dans un univers fantastique, contemporain, gothique-punk. Il est un des premiers dans sa catégorie grâce
                       à sa simplicité dans les règles et son pouvoir narratif important ainsi que son côté sombre.
                       <br>
                       Le joueur va jouer un vampire évoluant dans notre monde (ou presque). Ce vampire peut être frais de la nuit dernière ou avoir connu
                       Jules César en personne, cela dépendera tout de ce que le Maître de Jeu (MJ) prévoit. Tout est discutable de manière générale
                       avec de bons arguments. 
                       Pour créer un vampire, le rôliste va avoir accès au(x) livre(s) qui expliquent tous les clans, les manières
                       de se nourrir en tant que vampire, ses futurs atouts et handicaps etc. Un bon personnage est un personnage qui 
                       a été réfléchi et qui nous donne envie de le jouer. Ce temps de préparation peut être plus ou moins long dans ce jeu car
                       il y a une multitude de chose à prendre en compte et cela peut sembler fastidieux de prime abord.
                    </p>
                    <h4>Les clans de Vampire</h4>
                        Depuis la 5ème version de Vampire La Mascarde, il existe neuf clans possibles à jouer dans le livre de base.
                        Ci-dessous sont décrit ces clans, de manière résumée et non-exhaustive. <br>
                        <br>
                        <p id="Brujah">
                            <span class="clan">Les Brujah <br></span>
                            Les Brujah sont de manière caricaturale les anarchistes punks du monde vampire. Ils sont à contre-courant et
                            croquent des mortels qui sont révoltés. Ils peuvent être des combattants emplis de passions mais aussi des 
                            penseurs critiques du monde qui les entourent. Qu'ils soient philosophes ou révolutionnaires, ils ont tous 
                            en communs le renversement de la société actuelle. <br>
                            <br>
                            Les Brujah ont accès aux disciplines suivantes : Célérité, Présence et Puissance. 
                        </p>
                        <p id="Gangrel">
                            <span class="clan">Les Gangrels <br></span>
                            Les Gangrel sont surnommés les Sauvages, les Barbares ou encore les Errants. Ils se sentent proches de leur Bête intérieure.
                            La même qui hante chaque vampire et que chacun essaie de combattre, de refouler. Les Gangrel l'acceptent et sont libres. 
                            En général, les membres de ce clan sont des vagabons, des chasseurs ou des parias. Ils vivaient de leur vivant en marge de la société
                            et le sont encore dans leur non-mort. <br>
                            <br>
                            Les Gangrel ont accès aux disciplines suivantes : Animalisme, Force d'âme et Proteisme.
                        </p>
                        <p id="Malkavien">
                            <span class="clan">Les Malkaviens <br></span>
                            Chaque Malkavien possède une maladie mentale. Un psychiatre affirmerait que les membres du clan de la Lune
                            sont tous schizophrènes. Cependant cela est plus complexe. Pour eux, ils ressentent le monde au-delà du visible et
                            possèdent des connaissances que seul leur clan comprend. Les Malkavien mettent beaucoup d'importance sur les origines. 
                            Ils n'étreindront pas un mortel d'un milieu spécifique mais une personne qui possède que seul un Dément peut voir. <br>
                            <br>
                            Les Malkavien ont accès aux disciplines suivantes : Auspex, Domination, Occultation. <br>
                        </p>
                        <img id="vampireYellow" src="../img/vampireYellow.jpg" alt="Image tirée du livre de base Vampire La Mascarade">
                        <p id="Nosferatu">
                            <span class="clan">Les Nosferatu <br></span>
                            Les Nosferatu vivent l'Etreinte, le passage de mortel à vampire, comme une véritable descente aux enfers.
                            Leur phyisque se transforme et ils deviennent êtremement laids, avec des difformités proche du grotesque. 
                            Est-ce leur laideur qui leur permet d'être empli d'une incroyable compassion ? Nul ne le sait, mais les Nosferatu sont 
                            les vampires les plus charitables de tous les Descendants. 
                            Ce sont des maîtres dans l'ombre, des personnages friand de secrets et excellant dans les arts des services secrets par exemple. <br>
                            <br>
                            Les Nosferatu ont accès aux disciplines suivantes : Animalisme, Occultation et Puissance.
                        </p>
                        <p id="Toreador">
                            <span class="clan">Les Toréador <br></span>
                            Les Toréador sont des êtres obsédés par le parfait, par la beauté et le perfectionnisme de l'esthétique.
                            Cependant, nous, les mortels n'avont pas sûrement pas les mêmes définitions de la beauté que ces Descendants. 
                            Un mannequin mourrant d'une overdose peut être le comble de l'extatique pour eux, tout comme un tableau peint 
                            avec un amour profond de l'artiste. A bien tord celui qui pense que le Toréador n'est qu'un esprit dévergondé, superficiel
                            et pervers. <br>
                            <br>
                            Les Toréador ont accès aux disciplines suivantes : Auspex, Célérité et Présence.
                        </p>
                        <p id="Tremere">
                            <span class="clan">Les Tremere <br></span>
                            Même si les vampires ont des pouvoirs de clans appelés disciplines, ils ne pratiquet pas de la magie.
                            Sauf les Tremere. Ces derniers sont le seul clan à pratiquer la Sorcellerie du Sang. Les Tremere sont des érudits,
                            leur clan était un des plus respecté et craint de tous. Ils ont tous soif de connaissances, de savoir occulte, 
                            de puissance par la connaissance. <br>
                            <br>
                            Les Tremere ont accès aux disciplines suivantes : Auspex, Domination et Sorcellerie du Sang.
                        </p>
                        <p id="Ventrue">
                            <span class="clan">Les Ventrue <br></span>
                            Les Ventrue font partie des Sang bleu, du clan des Rois, des Borgias. Tous ces surnoms laissent deviner qu'il
                            s'agit de la haute société vampirique et qu'ils sont des personnages puissants en terme de pouvoir et de richesse.
                            Les Ventrue sont des Descendants exigeants en ce qui concerne leurs infants (les mortels qu'ils ont transformés).
                            Ils choisiront des humains avec des capacités financières ou pécunières marquantes. Ce sont également des fervents
                            défenseurs de la Mascarade, c'est-à-dire du fait de se cacher de l'humanité. <br>
                            <br>
                            Les Ventrue ont accès aux disciplines suivantes : Domination, Force d'âme, Présence.
                        </p>
                        <p id="Caitiffs">
                            <span class="clan">Les Caitiffs <br></span>
                            Les Caitiffs sont les sans-clans. En général, cela n'est pas volontaire de leur part. Ils ont été étreint par un Descendant
                            mais la malédiction ne les a pas affectés. Cela pourrait sembler être avantageux mais pour la plupart des Caitiffs, c'est un
                            véritable calvaire. Ils sont rejetés par le clan de leur créateur, et des autres clans égalemenst. Ou parfois, c'est le Caitiff
                            lui-même qui sent que quelque chose cloche et s'en va, mais ce cas de figure est moins courant. <br>
                            <br>
                            Les Caitiffs ont accès à toutes les disciplines des autres clans (le joueur doit en choisir trois) mais cela va lui coûter
                            plus cher pour les obtenir.
                        </p>
                        <img id="vampireBrujah" src="../img/vampireBrujah.jpg" alt="Image du livre de base de Vampire La Mascarade">
                        <p id="SangsClairs">
                            <span class="clan">Les Sangs-Clairs <br></span>
                             Les Sangs-Clairs font partie des toutes dernières générations de vampire. Ils suscitent la pitié et la jalousie dans les autres
                             clans car ils n'ont pas accès aux disciplines communes mais ont des avantages considérables en contre-partie. Ils peuvent sortir
                             le jour s'ils sont bien couverts, ils peuvent facilement passer pour des humains et ont créé leur propre alchimie
                             afin de développer tout de même quelques "pouvoirs". <br>
                             <br>
                             Les Sangs-Clairs ne possèdent pas la capacité d'avoir des disciplines. Ils ont inventés l'Alchimie du Sang ce qui leur permet de toucher
                             du bout des doigts les disciplines des autres clans. Leurs avantages se retrouvent dans le fait que leur Bête est plutôt silencieuse,
                             qu'ils ont l'air humains et que la lumière du soleil leur provoquent nettement moins de dégâts qu'à un Descendant plus "classique". 
                        </p>
                    
                    <h4>Règles de bases</h4>
                    <p id="regleBase">
                       Les dés spécifiques et la fiche de personnage sont les instruments de base pour une partie de Vampire La Mascarade.
                       Ce jeu n'y fait pas exception. Il utilise des d10 donc à 10 faces. 
                       Le groupement de dés sont donc fait selon les actions effectuées et selon les caractéristiques et domaines utiles.
                       Par exemple : Vous désirez voler une banque de sang pour vous procurer des réserves à boire (oui, oui, vous jouez un
                       vampire comme l'indique si bien le nom du jeu.) Le MJ vous demandera probablement un jet de technologie et d'intelligence pour 
                       déjouer les mécanismes de sécurité. 
                       Cela ne diffère pas d'un autre jeu de rôle, cependant dans Vampire viennent s'y mêler les dés de Soif. La Soif est ressentie par chaque
                       Vampire et elle rythme toute sa non-vie. La Soif c'est le fait de se nourrir de sang humain. Qu'il provienne directement de la source ou d'Une
                       poche de sang d'une banque, il va étancher momentanément ce besoin insatiable de boire pour survire. 
                       Plus la soif est grande, plus le vampire a de (mal)chance que sa Bête surgisse et prenne le contrôle de ses actions. Quand
                       c'est le cas, on parle alors de réussite bestiale ou d'échec bestial. Ces états font que les actions prévues peuvent prendre une 
                       tournure inattendue. Vous vouliez simplement forcer une porte d'un coup d'épaule, votre réussite est une réussite bestiale. Non seulement
                       vous avez ouvert la porte, mais vous avez fracassé toute la porte, l'encadrement et vous avez alerter les gardes du bâtiment avec votre vacarme. <br>
                       <br>
                       Un joueur va donc suivre le scéanrio proposé par le MJ, effectuer des actions selon les situations et gérer ses possibilités avec les dés. 
                       Il y a encore une multitude de règles concernant le système de jeu; par exemple, les vampires brûlent au soleil et meurent au contact du feu. 
                       C'est pourquoi ils vivent la nuit et s'éloignent des feux de joie. 
                       La règle la plus importante dans toute partie de Vampire La Mascarade est le respect de la dite mascarade. Les Descendants ne doivent
                       pas révéler leur véritable nature et doivent tout faire pour la cacher aux yeux des mortels, sous peine de mort. 
                       La Camarilla, une secte vampirique puissante et politiquement présente fait respecter la Mascarade et condamne tous ceux qui ne s'y 
                       plierait pas. <br>
                    </p>
                    <p id="conclusionPassion">
                        Je pourrais encore développer plus sur la Camarilla, les Anarchs, leurs opposants, les disciplines vampiriques, les Fléau des clans, les prédations, et les subtilités du monde de ce jeu. 
                       Mais il existe des livres pour approfondir toutes ces notions. <br> Chaque description ci-dessus a été tirée du livre de base en ma possession ainsi que les photos d'illustrations.
                    </p>
                    <img id="vampireTremere" src="../img/vampireTremere.jpg" alt="Image tirée du livre de base de Vampire La Mascarade">
                </section>
            </article>
        <div id="flexCote"></div>
    </div>

    <?php 
    include("footer.inc.php");
    ?>
</body>
</html>