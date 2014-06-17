<?php
//Connection à la base de données // 
try {
	$bdd = new PDO('mysql:host=localhost;dbname=GRP', 'grpuser', 'grp', array());
} catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}
