<?php
/*- Cette classe va d�finir des utilitaires pour traiter les requ�tes provenant serveur
- La connexion � la base de donn�es
*/
include_once('constantes.php');
function echo_($texte)
{
	echo $texte;
}
class Utils
{
	public static $DB_ERROR;
	public static function CheckSession(){
		if(!isset($_SESSION["mail"]))
		{
			header('Location:/stk/login.php?origin='.urlencode($_SERVER['REQUEST_URI']));
		}
	}
	public static function getRequestUri()
	{	
		return $_SERVER['REQUEST_URI'];
	}
	public static function getMethodForm()
	{
		return $_SERVER['REQUEST_METHOD'];
	}
	public static function BdConnex()
	{
		try
		{
			return new PDO(CONNEX_STRING,DB_USER,DB_PASS);
		}
		catch(Exception $e)
		{
			return Null;		
		}		
	}
}
?>