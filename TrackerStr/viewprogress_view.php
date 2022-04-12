<!doctype html>
<html>
  <head>
    <title>Track your Strength Progress</title>
    <!--<script type="text/javascript" src="clientcode.js"></script>-->
  </head>
  <body>
    <link rel="stylesheet" href="http://obousy.com/OAF/CSS/work.css">
    <form action="viewprogress.php" method="get">
      Search for surname:
      <input type="text" placeholder="Search" name="searchname"/> <input type="submit" value="Search"/>
    </form>
    <?php if (count($lastsear) != 0): ?>
      <form action="viewprogress.php" method="post">
        <select name="searchname">
          <?php foreach ($lastsear as $searchit): ?>
            <option value="<?=$searchitem?>"><?=$searchit?></option></li>
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
        <th>Daily Weights</th>
        <th>Plank Time</th>
        <th>Daily Pullups</th>
        <th>Daily Pushups</th>
        <th>Daily Situps</th>
      </tr>
        <?php foreach ($progresslist as $progress): ?>
        <tr>
          <td><?=$progress->givenname?></td>
          <td><?=$progress->surname?></td>
          <td><?=$progress->address?></td>
          <td><?=$progress->dailyweights?></td>
          <td><?=$progress->planktime?></td>
          <td><?=$progress->dailypullups?></td>
          <td><?=$progress->dailypushups?></td>
          <td><?=$progress->dailysitups?></td>
        </tr>
        <?php endforeach ?>
    </table>
    <br> 
    <button>
    <a href="progress_view.php">Click to Track your Strength Progress</a>
    </button>
  </body>
</html>
