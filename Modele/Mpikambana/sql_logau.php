<?php

    include('modele/db.php');

 

$req=$bdd->prepare('SELECT id FROM login WHERE Email = :email AND mdp= :mdp ');




?>