<?php

$email=htmlspecialchars($_POST['email']);
$mdp_sha=sha1($_POST['mdp']);
  
include('modele/Mpikambana/sql_logau.php');
$req=$bdd->prepare('SELECT * FROM login WHERE Email = :email AND mdp= :mdp ');

$req->execute(array ('email'=>$email, 'mdp'=>$mdp_sha));
$resultat=$req->fetch();





if (!$resultat)
{
 
echo'tsy tafiditra jereo tsara sode misy diso ' ;


}  
  else
{
header('Location: index.php');
}





?>