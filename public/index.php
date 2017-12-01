<?php 

require_once __DIR__ ."/vendor/autoload.php";
require_once __DIR__ ."/app/Controller/Api.php";

$config['displayErrorDetails'] = true;

$app = new \Slim\App(["settings" => $config]);

# Home page

$app->get('/', function($req, $res, $args){
	require __DIR__ . '/views/index.html';
});

# API
$app->group('/api', function(){
	$this->get('[/]', \Api::class . ':index');
	$this->get('/foo[/]', \Api::class . ':foo');
});


$app->run();

 ?>