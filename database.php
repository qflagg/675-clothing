<?php

  function all_contacts() {
    $host = "host=54.84.180.48";
    $user = "user=qflagg";
    $password = "password=675775f14";
    $port = "port=5432";
    $dbname = "dbname=fashion";

    $db = pg_connect("$host $port $dbname $user $password") or die("Could not connect");
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