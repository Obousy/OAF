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

function getAllUsers()
{
  global $pdo;
  $statement = $pdo->prepare('SELECT givenname, surname, address, jogdistance, walkmins, taichimins, dailypushups, dailysitups FROM customers');
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Customer');
  return $result;
}

function getUsersBySurname($surname)
{
  if ($surname == "")
  {
    return getAllUsers();
  }
  global $pdo;
  $statement = $pdo->prepare('SELECT givenname, surname, address, jogdistance, walkmins, taichimins, dailypushups, dailysitups FROM customers
                              WHERE surname = ?');
  $statement->execute([$surname]);
  $users = $statement->fetchAll(PDO::FETCH_CLASS, 'Customer');
  return $users;
}

function addUser($user)
{
  global $pdo;
  $statement = $pdo->prepare('INSERT INTO customers
    (givenname, surname, address, jogdistance, walkmins, taichimins, dailypushups, dailysitups) VALUES (?,?,?,?,?,?,?,?)');
  $statement->execute([$user->givenname,
                      $user->surname,
                      $user->address,
                      $user->jogdistance,
                      $user->walkmins,
                      $user->taichimins,
                      $user->dailypushups,
                      $user->dailysitups]);
}

function getUse()
{
  global $pdo;
  $statement = $pdo->prepare('SELECT givenname, surname, address, dailyweights, planktime, dailypullups, dailypushups, dailysitups FROM progress');
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Progress');
  return $result;
}

function getUsersBySur($surname)
{
  if ($surname == "")
  {
    return getUses();
  }
  global $pdo;
  $statement = $pdo->prepare('SELECT givenname, surname, address, dailyweights, planktime, dailypullups, dailypushups, dailysitups FROM progress
                              WHERE surname = ?');
  $statement->execute([$surname]);
  $users = $statement->fetchAll(PDO::FETCH_CLASS, 'Progress');
  return $users;
}

function addUse($user)
{
  global $pdo;
  $statement = $pdo->prepare('INSERT INTO progress
    (givenname, surname, address, dailyweights, planktime, dailypullups, dailypushups, dailysitups) VALUES (?,?,?,?,?,?,?,?)');
  $statement->execute([$user->givenname,
                      $user->surname,
                      $user->address,
                      $user->dailyweights,
                      $user->planktime,
                      $user->dailypullups,
                      $user->dailypushups,
                      $user->dailysitups]);
}

?>
