<?php
class Cardio {
  private $givenname;
  private $planduration;
  private $plantype; 

  function __get($name) {
    return $this->$name;
  }

  function __set($name,$value) {
    $this->$name = $value;
  }
}
?>
