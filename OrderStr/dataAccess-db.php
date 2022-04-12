<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db_user = "Boom";
$db_name = "ColbyCovington";
$db_password = "drogba11";

$pdo = new
 PDO("mysql:host=localhost;dbname=$db_name",
$db_user,$db_password);



function addStrength($strength)
{
  global $pdo;
  $statement = $pdo->prepare('INSERT INTO strength
    (givenname, planduration, plantype) VALUES (?,?,?)');
  $statement->execute([$strength->givenname,
                      $strength->planduration, 
                      $strength->plantype]);
}