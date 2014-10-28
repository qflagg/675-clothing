<?php require "database.php" ?>
<?php $styles = get_styles(); ?>

<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/`emes/smoothness/jquery-ui.css" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="./stylesheets/index.css" type="text/css" rel="stylesheet" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="./javascripts/holder.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse" role="navigation">
    <a class="navbar-brand helvetica">Fashion CSC 675</a>

    <ul class="nav navbar-nav helvetica nav-links">
        <li><a href="contact.php">Contacts</a></li>
    </ul>
  </nav>
  <div class="container something">
    <?php for($i = 0; $i < sizeof($styles); $i++) { ?>
      <div class="garment-container col-md-6">
        <div class="garment">
          <a href="garment_info.php?style=<?= $styles[$i]['style_id']?>">
            <img src="<?= $styles[$i]['image'] ?>" />
          </a>
        </div>
      </div>
    <?php } ?>
  </div>
</body>