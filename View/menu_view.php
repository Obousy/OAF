<!doctype html>
<html>
  <head>
    <title>OAF Fitness</title> 
  </head>
  <body>
    <link rel="stylesheet" href="http://obousy.com/OAF/CSS/work.css">
    <h1>OAF</h1> 
      <tr>
        <h2>Start your Exercise Therapy today</h2>
      </tr>
    <table>
      <tr>
        <th><a class="current" href="http://obousy.com/OAF/View/plan_view.php">Pick a Plan</a></th>
      </tr>
      <tr>
        <th><a class="current" href="http://obousy.com/OAF/View/learn_view.php">Learn About Fitness</a></th>
      </tr>
      <tr>
        <th><a class="current" href="http://obousy.com/OAF/View/record_view.php">Record Progress</a></th>
      </tr>
      <tr>
        <th><a class="current" href="http://obousy.com/OAF/View/contact_view.php">Contact Us</a></th>
      </tr>
        <?php foreach ($customerlist as $customer): ?>
        <tr>
          <td><?=$customer->givenname?></td>
          <td><?=$customer->surname?></td>
          <td><?=$customer->address?></td>
        </tr>
        <?php endforeach ?>
    </table>
  </body>
</html>