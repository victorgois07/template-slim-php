<?php
	session_start();
	error_reporting(E_ALL | E_STRICT);
	ini_set('display_errors','On');

	require_once "vendor/autoload.php";
	require_once "config/constants.php";
	require_once "config/config.php";

	$app = new \Slim\App(["settings" => $config]);

	$container = $app->getContainer();

	$container['view'] = new \Slim\Views\PhpRenderer("resouces/views/");

	$container['db'] = function ($c) {
		$db = $c['settings']['db'];

		$pdo = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'],
			$db['user'], $db['pass'], array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
			));

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		return $pdo;
	};

	require_once "app/routes.php";

	$app->run();

?>