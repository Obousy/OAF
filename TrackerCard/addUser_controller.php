<?php
  session_start();
  require_once ("customer.php");
  require_once ("dataAccess-db.php");

  $status = false;

  if(isset($_REQUEST["surname"]))
  {
    $givenname = $_REQUEST["givenname"];
    $surname = $_REQUEST["surname"];
    $address = $_REQUEST["address"];
    $jogdistance = $_REQUEST["jogdistance"];
    $walkmins = $_REQUEST["walkmins"];
    $taichimins = $_REQUEST["taichimins"];
    $dailypushups = $_REQUEST["dailypushups"];
    $dailysitups = $_REQUEST["dailysitups"];

    $customer = new Customer();
    $customer->givenname = htmlentities($givenname);
    $customer->surname = htmlentities($surname);
    $customer->address = htmlentities($address);
    $customer->jogdistance = htmlentities($jogdistance);
    $customer->walkmins = htmlentities($walkmins);
    $customer->taichimins = htmlentities($taichimins);
    $customer->dailypushups = htmlentities($dailypushups);
    $customer->dailysitups = htmlentities($dailysitups);


    addUser($customer);
    $status = "$surname has been added.";
  }

  require_once ("addUser.php");

?>
