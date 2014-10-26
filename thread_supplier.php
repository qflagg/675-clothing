<?php require "database.php" ?>

<?php $thread_suppliers = get_thread_suppliers(); ?>

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
        <li class="active"><a href="contact.php">Thread Suppliers</a></li>
    </ul>
  </nav>

  <table class="table">
    <thead>
      <tr>
        <th>Thread ID</th>
        <th>Supplier ID</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i = 0; $i < sizeof($thread_suppliers); $i++) { ?>
        <tr>
          <td><?php echo $thread_suppliers[$i]['t_id']; ?></td>
          <td><?php echo $thread_suppliers[$i]['sup_id']; ?></td>

        </tr>
      <?php } ?>
    </tbody>
  </table>


</body>


