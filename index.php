<?php require "database.php" ?>
<?php $garment_info = get_garment_info(); ?>

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

  <?php print_r($garment_info); ?>
  <nav class="navbar navbar-inverse" role="navigation">
    <a class="navbar-brand helvetica">Fashion CSC 675</a>

    <ul class="nav navbar-nav helvetica nav-links">
        <li><a href="contact.php">Contacts</a></li>
    </ul>
  </nav>

  <?php for($i = 0; $i < sizeof($garment_info); $i++) { ?>
    <div class="row border">
      <div class="container">

        <div class="garment-image left">
          <img src="<?= $garment_info[$i]['image'] ?>">
        </div>

        <div class="garment-info left helvetica">
          <span class="info"><span class="bold">Supplier:</span> SUPPLIER?></span><br />
          <span class="info"><span class="bold">Thread:</span> THREAD</span><br />
          <span class="info"><span class="bold">Dye Style:</span> DYE_STYLE</span><br />
          <span class="info"><span class="bold">FOB:</span> HUH?</span><br />
          <span class="info"><span class="bold">Material Notion:</span> IMG</span><br />
          <span class="info"><span class="bold">Material Photo:</span> IMG</span><br />
        </div>

        <div class="garment-info left helvetica">
          <span class="info"><span class="bold">Pattern:</span> PATTERN</span><br />
          <span class="info"><span class="bold">Material:</span> MATERIAL</span><br />
          <span class="info"><span class="bold">Piece Pattern:</span> PIECE_PATTERN</span><br />
          <span class="info"><span class="bold">Seam Manufacturer:</span> <?= $garment_info[$i]['name'] ?></span><br />
          <span class="info"><span class="bold">Style Manufacturer:</span> <?= $garment_info[$i]['name'] ?></span><br />
          <span class="info"><span class="bold">Style Dye Style:</span> STYLE_DYE_STYLE</span><br />
        </div>

      </div>
    </div>
  <?php } ?>

</body>