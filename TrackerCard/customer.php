<?php
class Customer {
  private $givenname;
  private $surname;
  private $address;
  private $jogdistance; 
  private $walkmins;
  private $taichimins;
  private $dailypushups;
  private $dailysitups;

  function __get($name) {
    return $this->$name;
  }

  function __set($name,$value) {
    $this->$name = $value;
  }
}
?>
