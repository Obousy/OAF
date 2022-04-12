<?php
  session_start();
  require_once ("progress.php");
  require_once ("dataAccess-db.php");

  $status = false;

  if(isset($_REQUEST["surname"]))
  {
    $givenname = $_REQUEST["givenname"];
    $surname = $_REQUEST["surname"];
    $address = $_REQUEST["address"];
    $dailyweights = $_REQUEST["dailyweights"];
    $planktime = $_REQUEST["planktime"];
    $dailypullups = $_REQUEST["dailypullups"];
    $dailypushups = $_REQUEST["dailypushups"];
    $dailysitups = $_REQUEST["dailysitups"];

    $progress = new Progress();
    $progress->givenname = htmlentities($givenname);
    $progress->surname = htmlentities($surname);
    $progress->address = htmlentities($address);
    $progress->dailyweights = htmlentities($dailyweights);
    $progress->planktime = htmlentities($planktime);
    $progress->dailypullups = htmlentities($dailypullups);
    $progress->dailypushups = htmlentities($dailypushups);
    $progress->dailysitups = htmlentities($dailysitups);


    addUse($progress);
    $status = "$surname has been added.";
  }

  require_once ("progress_view.php");

?>
