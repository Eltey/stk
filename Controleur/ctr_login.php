<?php



$email=htmlspecialchars($_POST['email']);
$mdp_sha=sha1($_POST['mdp']);
  
   include('modele/Mpikambana/sql_logau.php');

$req->execute(array ('email'=> $email, 'mdp'=>$mdp_sha));
$resultat=$req->fetch();

foreach($resultat as $tab)
{

echo $tab;
}


if (!$resultat)
{
 
echo'tsy tafiditra ' . $mdp_sha   ;


}  
  else
{
echo'tafiditra';
}





?>