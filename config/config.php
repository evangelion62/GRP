<?php
//Connection à la base de données // 
try {
	$bdd = new PDO('mysql:host=localhost;dbname=GRP', 'grpuser', 'grp', array());
} catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}

//definition de la variable controller en fonction du paramètre reçu en http par methode GET//
if (isset ($_GET['controller'] && !empty ($_GET['controller']) && strlen($_GET['controller']<=254 ) {
	$controller = $_GET['controller'];
	
}
else{
	$controller= "error";	
}
//definition de la varible action en fonction du paramètre reçu en http par methode GET// 
if{
	$action= $_GET['action']
	
}
else{
	
	$action= "error"; 
}
