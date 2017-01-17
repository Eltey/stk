<?php
  include_once('../../Modele/Mpikambana/sql_log.php'); 


$email=htmlspecialchars($_POST['email']);
$sha_mdp1=sha1($_POST['mdp1']);
$sha_mdp2=sha1($_POST['mdp2']);
$numero=htmlspecialchars($_POST['laharana']);


if(isset($_POST['mandefa']))
 {
   if(!empty($_POST['email']) AND !empty($_POST['mdp1']) AND !empty($_POST['mdp2']) AND !empty($_POST['laharana']))
																	{
                                      if($sha_mdp1 == $sha_mdp2)
                                        {
                                       echo' le mots de pass son identique';
        $req = $bdd->prepare('INSERT INTO LOGIN(Email,mdp,numero) VALUES(:email,:mdp1,:numero)');
                      $req->execute(array('email'=>$email,'mdp1'=>$sha_mdp1,'numero'=>$numero));  
                      echo 'transfert terminer';                                



 include_once('../../vue/mpikambana/addlogin.php');
                                            }
                                                       else
                                      {

                                        echo'les mots de pass  ne sont pas la meme';
                                       
                                      }


                                      } 
                                         else
                                {
                                echo'veuillez remplir les champs';

                                }

            }


?>