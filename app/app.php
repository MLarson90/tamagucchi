<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/obj.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));



    $app->get("/", function() use ($app) {
      $alive = new Randolf (10,10,10);
      $dead = new Randolf ($_SESSION['feed'], $_SESSION['play'], $_SESSION['submit'])
      return $app['twig']->render('index.html.twig', array('adyes' => $myYes));
    });
      $app->get("/feed", function() use ($app) {
        $alive->food();


});
      $app->get("/play", function() use ($app) {
});
      $app->get("/sleep", function() use ($app) {
  });


    return $app;
 ?>
