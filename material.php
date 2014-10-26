<?php require "database.php" ?>

<?php $materials = get_material(); ?>

<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="./stylesheets/index.css" type="text/css" rel="stylesheet" />
  <link href="./stylesheets/reset.css" type="text/css" rel="stylesheet" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-inverse" role="navigation">
    <a class="navbar-brand navigation" href="index.php">Fashion CSC 675</a>

    <ul class="nav navbar-nav navigation nav-links">
        <li class="active"><a href="contact.php">Material</a></li>
    </ul>
  </nav>

  <table class="table">
    <thead>
      <tr>
        <th>Material ID</th>
        <th>Manufacturer ID</th>
        <th>Description</th>
        <th>Color Number</th>
        <th>Bolt Size</th>
        <th>Bolt Weight</th>
        <th>Cost Per Yard</th>
        <th>Dyeable (True/False)</th>
        <th>Lead Time</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i = 0; $i < sizeof($materials); $i++) { ?>
        <tr>
          <td><?php echo $materials[$i]['material_id']; ?></td>
          <td><?php echo $materials[$i]['man_id']; ?></td>
          <td><?php echo $materials[$i]['description']; ?></td>
          <td><?php echo $materials[$i]['color_number']; ?></td>
          <td><?php echo $materials[$i]['bolt_size']; ?></td>
          <td><?php echo $materials[$i]['bolt_weight']; ?></td>
          <td><?php echo $materials[$i]['cost_per_yard']; ?></td>
          <td><?php echo $materials[$i]['is_dyeable']; ?></td>
          <td><?php echo $materials[$i]['lead_time']; ?></td>



        </tr>
      <?php } ?>
    </tbody>
  </table>


</body>


