<?php


if(!isset($_GET['section']) OR $_GET['section'] == 'index2')

{
 include_once('controleur/liste.php');

}

else
{
	
	echo'ereur';
}

?>