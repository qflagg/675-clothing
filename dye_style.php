<?php require "database.php" ?>

<?php $dye_styles = get_dye_style(); ?>

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
        <li class="active"><a href="contact.php">Contacts</a></li>
    </ul>
  </nav>

  <table class="table">
    <thead>
      <tr>
        <th>ds_id</th>
        <th>Price/Dye Job</th>
        <th>Weight</th>
        <th>Image</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php for($i = 0; $i < sizeof($dye_styles); $i++) { ?>
        <tr>
          <td><?php echo $dye_styles[$i]['ds_id']; ?></td>
          <td><?php echo $dye_styles[$i]['price_per_dye_job']; ?></td>
          <td><?php echo $dye_styles[$i]['weight']; ?></td>
          <td><img src="<?php echo $dye_styles[$i]['image']; ?>" style="width: 50px;"></td>
          <td></td>
        </tr>
      <?php } ?>
      <tr>
        <form action="dye_style_add.php" method="post">
          <td>
          </td>
          <td>
            <div class="input-group">
              <input type="text" class="form-control" name="price_per_dye_job" placeholder="price per dye job">
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="text"  class="form-control" name="weight" placeholder="weight" />
            </div>
          </td>
          <td>
            <div class="input-group">
              <input type="text" class="form-control" name="image" placeholder="image url" />
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
