<?php
/*
 * Connection à la base de données
 * */ 
try 
{
	$bdd = new PDO('mysql:host=localhost;dbname=GRP', 'grpuser', 'grp', array());
}
catch (PDOException $e)
{
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}


/*
 * definition de la variable controller en fonction du paramètre reçu en http par methode GET
 */
if (isset ($_GET['controller']) && !empty ($_GET['controller']) && strlen($_GET['controller']) <= 254 && is_string($_GET['controller'])) 
{
	$_GET['controller'] = htmlspecialchars($_GET['controller']);
	$controller = 'controllers/'.$_GET['controller'].'.php';	
}
else
{
	$controller= "controllers/error.php";	
}
/*
 * definition de la varible action en fonction du paramètre reçu en http par methode GET
 */ 
if(isset ($_GET['action']) && !empty ($_GET['action']) && strlen($_GET['action']) <= 254 )
{
	$_GET['action'] = htmlspecialchars($_GET['action']);
	$action= $_GET['action'];
}
else
{	
	$action= "error";
}

/*
 * auto chargement des fichier classe 
 */
function chargerClasse($classe)
{
	if (is_file('models/'.$classe . '.php')){
		require 'models/'.$classe . '.php'; // On inclut la classe correspondante au paramètre passé.
	}
}
spl_autoload_register('chargerClasse');