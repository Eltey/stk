<?php 

include_once('modele/db.php');

function listemembre($offset,$limit)
{
    
    global $bdd;
    $offset=(int) $offset;
    $limit=(int) $limit;
    
    $req=$bdd->prepare('SELECT * FROM membres ');
    
    $req->bindparam(':offset', $offset,PDO::PARAM_INT);
    $req->bindparam(':limit', $offset,PDO::PARAM_INT);
    $req->Execute();
    $listem=$req->fetchall();
    return $listem;
    
}


?>