<!doctype html>
<?php require_once("cardio_controller.php"); ?>
<html>
  <head>
    <title>OAF Fitness</title> 
  </head>
  <body>
    <link rel="stylesheet" href="http://obousy.com/OAF/CSS/work.css">
    <h1>OAF</h1> 
    <h2>Pick a Plan to order</h2>
    <h3>High Intensity Cardio (12 Months)</h3>
    <p1></p1>
      <tr>
      </tr>
    <table>
      <tr>
        <th><a class="current" href="../controller/planchoice.php">Jogging Exercises</a></th>
      </tr>
      <tr>
        <th><a class="current" href="http://obousy.com/OAF/View/learn_view.php">Walking Exercises</a></th>
      </tr>
      <tr>
        <th><a class="current" href="../view/record_view.php">Tai Chi Exercises</a></th>
      </tr>
      <tr>
        <th><a class="current" href="../view/contact_view.php">Pushup Exercises</a></th>
      </tr>
       <tr>
        <th><a class="current" href="../view/contact_view.php">Situp Exercises</a></th>
      </tr>
       <tr>
      </tr>
    </table>
    <h3>Low Intensity Cardio (6 months)</h3>
    <p1></p1>
  <head>
  </head>
  <body>
    <link rel="stylesheet" href="http://obousy.com/OAF/CSS/work.css">
      <tr>
      </tr>
    <table>
      <tr>
        <th><a class="current" href="../controller/planchoice.php">Jogging exercises</a></th>
      </tr>
      <tr>
        <th><a class="current" href="http://obousy.com/OAF/View/learn_view.php">Walking Exercises</a></th>
      </tr>
      <tr>
        <th><a class="current" href="../view/record_view.php">Tai Chi Exercises</a></th>
      </tr>
      <tr>
        <th><a class="current" href="../view/contact_view.php">Pushup Exercises</a></th>
      </tr>
       <tr>
        <th><a class="current" href="../view/contact_view.php">Situp Exercises</a></th>
      </tr>
       <tr>
      </tr>
    </table>
    <p3></p3>
    <br>
    <form action="cardio_view.php" method="POST">
      Enter your name: <input name="givenname"/>
      Enter plan duration: <input name="planduration"/>
      Enter your plan type: <input name="plantype"/>
      <br> </br> 
      <input type="submit">
</form>
  </body>
</html>