<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo $title;?></title>
		<link rel="stylesheet" href=<?php echo $stylesheet;?>>
	</head>
	<body>
		<?php require_once 'views/BO/layout/menu.top.php';?>

		<?php require_once 'GRP/views/BO/layout/menu.left.php';?>
		
		<?php echo $content;?>