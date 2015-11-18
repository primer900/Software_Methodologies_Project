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

  $data = csv_to_array("");
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



  //ADD ALL THE PAGES/////
$app->post('/w', function() use($app){

  $accessToken = "RhUHA_3bYAsAAAAAAAAAKFPP6W9Sv3yhCVVCun37FpkqOYSDvIYPanrtRw1GOFG7";
  $dbxClient = new dbx\Client($accessToken, "Software_Methodologies_App");

    if(isset($_POST["filename"])) {
      //include($_POST['parse_csv.php'].'/common/configs/config_templates.inc.php');
      include 'C:\xampp\htdocs\Software_Methodologies_Project\htdocs\templates\parse_csv.php';
      $filename = 'C:\xampp\htdocs\Software_Methodologies_Project\htdocs\actual.csv';
      csv_to_array($filename);
  }
});
  //POST TO MAIL/////


  //CAPTURE VARIABLES FROM FORM
  $app->post('/', function() use($app){
    $password = $app->request->post('user_password');
    $email = $app->request->post('user_email');

	if(($password=='gleb' && $email=='fsklyr@gmail.com')||( $password=='chris'&& $email=='cjprocak13@gmail.com')||($password=='jakob'&&$email=='jakob.horner@marquette.edu')||( $password=='connor'&& $email=='brinkcon@gmail.com'))
		{  $app->redirect('/w');}
	else {$app->redirect('/homeerror');}


  });

  $app->run();

?>