<!doctype html>
<html>
  <head>
    <title>Track your progress</title>
   </head>
  <body>
    <link rel="stylesheet" href="http://obousy.com/OAF/CSS/work.css">
    <form action="listNames.php" method="get">
      Search for surname:
      <input type="text" placeholder="Search" name="searchname"/> <input type="submit" value="Search"/>
    </form>
    <?php if (count($lastsearch) != 0): ?>
      <form action="listNames.php" method="post">
        <select name="searchname">
          <?php foreach ($lastsearch as $searchitem): ?>
            <option value="<?=$searchitem?>"><?=$searchitem?></option></li>
          <?php endforeach ?>
        </select>
        <input type="submit" value="Search"/>
      </form>
    <?php endif ?>
    <table>
      <tr>
        <th>Given Name</th>
        <th>Surname</th>
        <th>Address</th>
        <th>Jog Distance</th>
        <th>Walk Mins</th>
        <th>Tai Chi Mins</th>
        <th>Daily Pushups</th>
        <th>Daily Situps</th>
      </tr>
        <?php foreach ($customerlist as $customer): ?>
        <tr>
          <td><?=$customer->givenname?></td>
          <td><?=$customer->surname?></td>
          <td><?=$customer->address?></td>
          <td><?=$customer->jogdistance?></td>
          <td><?=$customer->walkmins?></td>
          <td><?=$customer->taichimins?></td>
          <td><?=$customer->dailypushups?></td>
          <td><?=$customer->dailysitups?></td>
        </tr>
        <?php endforeach ?>
    </table>
    <br> 
    <button>
    <a href="addUser.php">Click to Track your Cardio Progress</a>
    </button>
  </body>
</html>
