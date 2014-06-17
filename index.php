<?php
require_once 'config/config.php';

//chargement du sub controller
if (is_file($controller)) {
	require_once $controller;
}else{
	require_once 'controllers/error.php';
}
