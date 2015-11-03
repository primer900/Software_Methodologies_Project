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



  //ADD ALL THE PAGES/////
$app->post('/w', function() use($app){

  $accessToken = "RhUHA_3bYAsAAAAAAAAAKFPP6W9Sv3yhCVVCun37FpkqOYSDvIYPanrtRw1GOFG7";
  $dbxClient = new dbx\Client($accessToken, "Software_Methodologies_App");

    if(isset($_POST["filename"])) {
      //include($_POST['parse_csv.php'].'/common/configs/config_templates.inc.php');
      function csv_to_array($filename='', $delimiter = ',') {
      if (!file_exists($filename) || !is_readable($filename))
        return FALSE;

      $header = NULL;
      if (($handle = fopen($filename, 'r')) !== FALSE) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
          if (!$header) {
            $header = $row;
            for ($c = 0; $c < count($header); $c++)
              echo $header[$c] . "&nbsp" . "&nbsp";
            echo "<br />\n";
          } else {
            for ($c = 0; $c < count($row); $c++) {
              echo $row[$c] . "&nbsp" . "&nbsp";
            }
          }
          echo "<br />\n";
          //print_r(array_combine($header, $row));
        }
      }
      fclose($handle);
    }
      $filename = 'C:\xampp\htdocs\Software_Methodologies_Project\htdocs\actual.csv';
      csv_to_array($filename);
  //$column_headers = array();
    //$row_count = 0;
    //$upload_csv = "Software_Methodologies_Project/htdocs/actual.csv";
    //echo $_POST["filename"];
    //$handle = fopen($_POST["filename"], "rb");
    //$result = $dbxClient->uploadFile("/Software_Methodologies/Input/actual.csv", dbx\WriteMode::force(), $handle);
  }
});
  //POST TO MAIL/////

  //CAPTURE VARIABLES FROM FORM
  $app->post('/', function() use($app){
    $password = $app->request->post('user_password');
    $email = $app->request->post('user_email');

    //if(!empty($address)){exit;}
    
   // $img;
    
    // IMG IDK WHAT THIS FOR...///////////////////////////////////
//    $imagename = $_FILES['photo']['name'];
//    $unique_id = md5(uniqid(rand(), true));
//    $filetype = strrchr($imagename, '.');
//    $new_upload = 'upload' . $unique_id . $filetype;
//    move_uploaded_file($_FILES['photo']['tmp_name'], $new_upload);
    //////////////////////////////////////////////////////////////
    
    //TEST FOR EMPTY NECCASSARY ELEMENTS
   // if(!empty($emil)&&!empty($password)) {
   //   $cleanName = filter_var($password, FILTER_SANITIZE_STRING);
   //   $cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

   // } else {
      //message that there was an error and redirect back
    //  $app->flash('fail', 'Please make sure that at least name, email, computer type & condition fields are completed.');
    //  $app->redirect('/sell');
   // }
    
    //SET UP MAILER
   // $transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');
   // $mailer = \Swift_Mailer::newInstance($transport);
    
    //SET UP THE MESSAGGE
   // $message = \Swift_Message::newInstance();
   // $message->setSubject('BuyBack request');
   // $message->setFrom(array($cleanEmail => $cleanName));
   // $message->setTo(array('customer_service@slicetheprices.com'));
   // $message->setBody($cleanBio.' '.$type.' '.$cleanSerial.' '.$condition.' '.print_r($damages,true));//WHAT IS IN THE MESSAGE
    
   // $result = $mailer->send($message);//0 if not sent
    //DECIDE WHAT TO DO IF SENT (OR NOT)
   // if($result > 0) {
      //send thankyou + redirect
    //  $app->flash('success', 'Thanks, '.$cleanName.'.  You have successfully submitted the buyback form!  A representative will get back to you shortly to '.$cleanEmail.' with further information.');
    // $app->redirect('/');
   // } else {
      //send a faliure message, redirect & log
     // $app->flash('fail', 'Something went wrong.  Please try again later.');
     // $app->redirect('/sell');
   // }

	if(($password=='gleb' && $email=='fsklyr@gmail.com')||( $password=='chris'&& $email=='cjprocak13@gmail.com')||($password=='jakob'&&$email=='jakob.horner@marquette.edu')||( $password=='connor'&& $email=='brinkcon@gmail.com'))
		{  $app->redirect('/w');}
	else {$app->redirect('/homeerror');}


  });

  $app->run();

?>