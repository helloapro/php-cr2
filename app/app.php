<?php
  require_once __DIR__.'/../vendor/autoload.php';
  require_once __DIR__.'/../src/WordFrequency.php';

  use Symfony\Component\Debug\Debug;
  Debug::enable();

  $app = new Silex\Application();

  $app['debug'] = true;

  $app->register (new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get('/', function() use ($app) {
     return $app['twig']->render('word-frequency-form.html.twig');
  });

  $app->post('/process', function() use ($app) {
     $inputSentence = $_POST['sentence'];
     $inputWord = $_POST['word'];

     $newRepeatCounter = new RepeatCounter;
     $result = $newRepeatCounter->countRepeats($inputWord, $inputSentence);
     return $app['twig']->render('word-frequency-results.html.twig', array('result'=>$result));
  });


  return $app;
?>
