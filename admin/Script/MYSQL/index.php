<?php
        $bdd = new PDO('mysql:host=localhost;dbname=anthfpxc_web;charset=utf8', 'anthfpxc', 'rItxfJ96O9cE');
        $reponse = $bdd->query('SELECT * FROM projects');
        while ($donnees = $reponse->fetch())
        {
            echo '<h1>' . $donnees['ID'] . '</H1>';
        }
?>