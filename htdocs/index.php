<?php

  date_default_timezone_set("America/Chicago");
  require "vendor/autoload.php";

  require_once "dropbox-sdk/Dropbox/autoload.php";
  use \Dropbox as dbx;

  $accessToken = "RhUHA_3bYAsAAAAAAAAAKFPP6W9Sv3yhCVVCun37FpkqOYSDvIYPanrtRw1GOFG7";
  $dbxClient = new dbx\Client($accessToken, "Software_Methodologies_App");

  $f = fopen("app.txt", "rb");
  $result = $dbxClient->uploadFile("/Software_Methodologies/Input/app.txt", dbx\WriteMode::force(), $f);
  fclose($f);

  $f = fopen("forecast.csv", "w+b");
  $fileMetadata = $dbxClient->getFile("/Software_Methodologies/Output/forecasted.csv", $f);
  fclose($f);
  //print_r($fileMetadata);

//  use Monolog\Logger;
//  use Monolog\Handler\StreamHandler;
//
//  $log = new Logger('name');
//  $log->pushHandler(new StreamHandler('app.txt', Logger::WARNING));
//  $log->addWarning('Foob');

  $app = new \Slim\Slim( 
    array(
      'view' => new \Slim\Views\Twig()
    )
  );
  $app->add(new \Slim\Middleware\SessionCookie());

    $view = $app->view();
  $view->parserOptions = array(
      'debug' => true
  );

    $view->parserExtensions = array(
      new \Slim\Views\TwigExtension(),
  );

  //ADD ALL THE PAGES/////

  $app->get('/', function() use($app){
    $app->render('home.twig');
  })->name('home');

  $app->get('/w', function() use($app){
    $app->render('weather.twig');
  })->name('weather');

  $app->get('/homeerror', function() use($app){
    $app->render('homeerror.twig');
  })->name('homeerror');

  $app->get('/temperature', function() use($app) {
     $app->render('temperature.twig');
  })->name('temperature');

  $app->get('/wind-speed', function() use($app){
     $app->render('wind_speed.twig');
  })->name('wind_speed');


  //CAPTURE VARIABLES FROM FORM
  $app->post('/', function() use($app){
    $password = $app->request->post('user_password');
    $email = $app->request->post('user_email');

	if(($password=='gleb' || $password=='chris')&&($email=='fsklyr@gmail.com' || $email=='cjprocak13@gmail.com'))
		{  $app->redirect('/w');}
	else {$app->redirect('/homeerror');}


  });

  $app->run();

?>