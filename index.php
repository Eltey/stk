<?php


include 'vue/haut.php';


if(!empty($_GET['page']) && is_file('Controleur/'.$_GET['page'].'.php'))
{
    
    
    include'Controleur/' .$_GET['page'].'.php';

}
else
{
/*include 'vues/aceuil.php';*/
echo'tsy mety mihitsy';
}

 include 'vue/bas.php';

?>