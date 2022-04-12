<!doctype html>
<?php require_once("addUser_controller.php"); ?>
<html>
  <head>
    <title>Progress Track</title>
  </head>
  <body>
    <h3> Update your Cardio progress, with your details so we know that you are on track </h3>
     <link rel="stylesheet" href="http://obousy.com/OAF/CSS/work.css">
    <?php if ($status): ?>
      <p><?=$status?></p>
    <?php endif ?>
    <form action="addUser.php" method="POST">
      Givenname: <input name="givenname"/><br/>
      Surname: <input name="surname"/><br/>
      Address: <input name="address"/><br/>
      Jogdistance: <input name="jogdistance"/><br/>
      Walkmins: <input name="walkmins"/><br/>
      Taichimins: <input name="taichimins"/><br/>
      Dailypushups: <input name="dailypushups"/><br/>
      Dailysitups: <input name="dailysitups"/><br/>
      <br> </br> 
      <input type="submit"/>
      <button>
    <a href="listNames.php">Check Previous Progress</a>
    </button>
    </form>

  </body>
</html>
