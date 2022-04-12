<?php
class Progress {
  private $givenname;
  private $surname;
  private $address;
  private $dailyweights; 
  private $planktime;
  private $dailypullups;
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
