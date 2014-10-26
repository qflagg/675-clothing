<?php require "database.php" ?>

<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/`emes/smoothness/jquery-ui.css" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="./stylesheets/index.css" type="text/css" rel="stylesheet" />
  <link href="./stylesheets/reset.css" type="text/css" rel="stylesheet" />
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

  <div class="row border space">
    <div class="container">

      <div class="garment-image left">
        <img src="holder.js/150x200">
      </div>

      <div class="garment-info left helvetica">
        <span class="info"><span class="bold">Supplier:</span> SUPPLIER NAME</span><br />
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
        <span class="info"><span class="bold">Seam Manufacturer:</span> SEAM_MANUFACTURER</span><br />
        <span class="info"><span class="bold">Style Manufacturer:</span> STYLE_MANUFACTURER</span><br />
        <span class="info"><span class="bold">Style Dye Style:</span> STYLE_DYE_STYLE</span><br />
      </div>

    </div>
  </div>

</body>