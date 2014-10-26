<?php require "database.php" ?>

<?php $photos = get_photo(); ?>

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
        <li class="active"><a href="contact.php">Photos</a></li>
    </ul>
  </nav>

  <table class="table">
    <thead>
      <tr>
        <th>Photo ID</th>
        <th>Location</th>
        <th>Description</th>
        <th>Date</th>
        <th>Photographer</th>
        <th>Model ID</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i = 0; $i < sizeof($photos); $i++) { ?>
        <tr>
          <td><?php echo $photos[$i]['photo_id']; ?></td>
          <td><?php echo $photos[$i]['location']; ?></td>
          <td><?php echo $photos[$i]['description']; ?></td>
          <td><?php echo $photos[$i]['date']; ?></td>
          <td><?php echo $photos[$i]['photographer']; ?></td>
          <td><?php echo $photos[$i]['model_id']; ?></td>
          <td><?php echo $photos[$i]['image']; ?></td>



        </tr>
      <?php } ?>
    </tbody>
  </table>


</body>


