<?php 
// controleur pour afficher listes membres


include ('Modele/Mpikambana/sql_liste.php');

$listem= $listeme (0,100);

foreach ($listem as $cle=>$listemel)
{
    $listem[$cle]['ID']=htmlspecialchars($listemel['ID']);
    $listem[$cle]['NOM']=nl2br(htmlspecialchars($listemel['NOM']));
    $listem[$cle]['PRENOM']=nl2br(htmlspecialchars($listemel['PRENOM']));
    $listem[$cle]['DATEN']=nl2br(htmlspecialchars($listemel['DATEN']));
    $listem[$cle]['INTEGRATION']=nl2br(htmlspecialchars($listemel['INTEGRATION']));
}

include('vue/mpikambana/liste.php')

?>