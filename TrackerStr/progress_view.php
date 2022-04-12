<!doctype html>
<?php require_once("progress_controller.php"); ?>
<html>
  <head>
    <title>Progress Track</title>
  </head>
  <body>
    <h3> Update your Strength Progress, with your details so we know that you are on track </h3>
     <link rel="stylesheet" href="http://obousy.com/OAF/CSS/work.css">
    <?php if ($status): ?>
      <p><?=$status?></p>
    <?php endif ?>
    <form action="progress_view.php" method="POST">
      Givenname: <input name="givenname"/><br/>
      Surname: <input name="surname"/><br/>
      Address: <input name="address"/><br/>
      Daily Weights: <input name="dailyweights"/><br/>
      Plank Time: <input name="planktime"/><br/>
      Daily Pullups: <input name="dailypullups"/><br/>
      Dailypushups: <input name="dailypushups"/><br/>
      Dailysitups: <input name="dailysitups"/><br/>
      <br> </br> 
      <input type="submit"/>
      <button>
    <a href="viewprogress_view.php">Check Previous Progress</a>
    </button>
    </form>

  </body>
</html>
