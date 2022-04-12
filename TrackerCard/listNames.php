<?php
  session_start();
  require_once ("customer.php");
  require_once ("dataAccess-db.php");


  if (!isset($_SESSION["lastsearch"]))
  {
  
    $_SESSION["lastsearch"] = [];
  }

  $searchname = "";
  
  if (isset($_REQUEST["searchname"]) && $_REQUEST["searchname"] != "")
  {
    $searchname = $_REQUEST["searchname"];
  
    if (!in_array($searchname,$_SESSION["lastsearch"]))
    {
        $_SESSION["lastsearch"][] = $searchname;
    }
   
  }

  $lastsearch = $_SESSION["lastsearch"];

  $customerlist = getUsersBySurname($searchname);

  require_once ("listNames_view.php");
?>
