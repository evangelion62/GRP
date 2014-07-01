<?php

switch ($action) {
	case 'add':
		$user = new User();
		echo 'add user';
	break;
	
	case 'get':
		echo 'get user';
	break;
	
	case 'update':
		echo 'update user';
	break;
	
	case 'delete':
		echo 'delete';
	break;
	
	default:
		echo 'action '.$action.' non definie';
	break;
}
