<!doctype html>
<?php require_once("strength_controller.php"); ?>
<html>
  <head>
    <title>OAF Fitness</title> 
  </head>
  <body>
    <link rel="stylesheet" href="http://obousy.com/OAF/CSS/work.css">
    <h1>OAF</h1> 
    <h2>Pick a Plan to order</h2>
    <h3>High Intensity Strength (12 Month Plan)</h3>
    <p1></p1>
      <tr>
      </tr>
    <table>
      <tr>
        <th><a class="current" href="../controller/planchoice.php">Weight Exercises</a></th>
      </tr>
      <tr>
        <th><a class="current" href="http://obousy.com/OAF/View/learn_view.php">Plank Exercises</a></th>
      </tr>
      <tr>
        <th><a class="current" href="../view/record_view.php">Pullup Exercises</a></th>
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
    <br> </br>
    <h3>Low Intensity Strength (6 Month Plan)</h3>
    <p1></p1>
  <head>
  </head>
  <body>
    <link rel="stylesheet" href="http://obousy.com/OAF/CSS/work.css">
      <tr>
      </tr>
    <table>
      <tr>
        <th><a class="current" href="../controller/planchoice.php">Dumbell Exercises</a></th>
      </tr>
      <tr>
        <th><a class="current" href="http://obousy.com/OAF/View/learn_view.php">Plank Exercises</a></th>
      </tr>
      <tr>
        <th><a class="current" href="../view/record_view.php">Pullup Exercises</a></th>
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
    <form action="strength_view.php" method="POST">
      Enter your name: <input name="givenname"/>
      Enter plan duration: <input name="planduration"/>
      Enter your plan type: <input name="plantype"/> 
      <br> </br>
      <input type='submit'> 
  </body>
</html>