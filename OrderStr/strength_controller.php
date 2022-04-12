<?php
  session_start();
  require_once ("strength.php");
  require_once ("dataAccess-db.php");

  $status = false;

  

  if(isset($_REQUEST["givenname"]))
  {
    $givenname = $_REQUEST["givenname"];
    $planduration = $_REQUEST["planduration"];
    $plantype = $_REQUEST["plantype"];

    $strength = new Strength();
    $strength->givenname = htmlentities($givenname);
    $strength->planduration = htmlentities($planduration);
    $strength->plantype = htmlentities($plantype);


    addStrength($strength);
  
  }




  require_once ("strength_view.php");

?>
