<?php require "database.php" ?>

<?php $fob = get_fob(); ?>

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
        <li class="active"><a href="contact.php">FOB</a></li>
    </ul>
  </nav>

  <table class="table">
    <thead>
      <tr>
        <th>Supplier ID</th>
        <th>Manufacturer ID</th>
        <th>Charge</th>
        <th>Insurance</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php for($i = 0; $i < sizeof($fob); $i++) { ?>
        <tr>
          <td><?php echo $fob[$i]['sup_id']; ?></td>
          <td><?php echo $fob[$i]['man_id']; ?></td>
          <td><?php echo $fob[$i]['charge']; ?></td>
          <td><?php echo $fob[$i]['insurance']; ?></td>
          <td></td>
        </tr>
      <?php } ?>
      <tr>
        <form action="fob_add.php" method="post">
          <td>
            <div class="input-group">
              <input type="text" class="form-control" name="sup_id" placeholder="sup_id">
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="text" class="form-control" name="man_id" placeholder="man_id">
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="text"  class="form-control" name="charge" placeholder="charge" />
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="text" class="form-control" name="insurance" placeholder="insurance" />
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="submit" class="btn btn-primary" value=">>">
            </div>
          </td>
        </form>
      </tr>
    </tbody>
  </table>


</body>


