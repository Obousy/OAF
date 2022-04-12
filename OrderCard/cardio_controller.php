<?php
  session_start();
  require_once ("cardio.php");
  require_once ("dataAccess-db.php");

  $status = false;

  

  if(isset($_REQUEST["givenname"]))
  {
    $givenname = $_REQUEST["givenname"];
    $planduration = $_REQUEST["planduration"];
    $plantype = $_REQUEST["plantype"];

    $cardio = new Cardio();
    $cardio->givenname = htmlentities($givenname);
    $cardio->planduration = htmlentities($planduration);
    $cardio->plantype = htmlentities($plantype);


    addCardio($cardio);
  
  }




  require_once ("cardio_view.php");

?>
