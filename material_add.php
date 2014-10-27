<?php

  define("HOST", "host=54.84.180.48 ");
  define("USER", "user=qflagg ");
  define("PASSWORD", "password=675775f14 ");
  define("PORT", "port=5432 ");
  define("DBNAME", "dbname=fashion ");

  $material_id = intval($_POST['material_id']);
  $man_id = intval($_POST['man_id']);
  $description = $_POST['description'];
  $color_number = intval($_POST['color_number']);
  $phone = $_POST['phone'];
  $job = $_POST['job'];

  $db = pg_connect(HOST . USER . PASSWORD . PORT . DBNAME) or die("Could not connect");
  if(!$db) {
    echo "Error: Cannot open database";
  } else {
    $query = "INSERT INTO contact VALUES ($man_id, '$name', '$phone', '$email', '$job');";

    $result = pg_query($db, $query);

    if(!$result) {
      echo "Something went wrong";
    } else {
      header('Location: http://localhost:8888/clothing-675/contact.php');
    }
  }

?>