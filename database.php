<?php

  define("HOST", "host=54.84.180.48 ");
  define("USER", "user=qflagg ");
  define("PASSWORD", "password=675775f14 ");
  define("PORT", "port=5432 ");
  define("DBNAME", "dbname=fashion ");

  function all_contacts() {
    $db = pg_connect(HOST . USER . PASSWORD . PORT . DBNAME) or die("Could not connect");
    if(!$db) {
      echo "Error: Cannot open database";
    } else {
      $query = "SELECT * FROM contact";
      $result = pg_query($db, $query);
      if(!$result) {
        echo "Something went wrong";
      } else {
        $contacts = array();
        while($myrow = pg_fetch_assoc($result)) {
          array_push($contacts, $myrow);
        }
        return $contacts;
      }
    }
  }

?>