<?php

  define("HOST", "host=54.84.180.48 ");
  define("USER", "user=qflagg ");
  define("PASSWORD", "password=675775f14 ");
  define("PORT", "port=5432 ");
  define("DBNAME", "dbname=fashion ");

	function connect_to_pg_server() {
    $db = pg_connect(HOST . USER . PASSWORD . PORT . DBNAME) or die("Could not connect");
    if(!$db) {
      echo "Error: Cannot open database";
		}
		return $db;
	}

  function get_contacts() {
			$db = connect_to_pg_server();
      $query = "SELECT * FROM contact";
      $result = pg_query($db, $query);
      if(!$result) {
        echo "Something went wrong";
      } else {
        $contacts = array();
        while($myrow = pg_fetch_assoc($result)) {
          array_push($contacts, $myrow);
        }
				pg_close($db);
        return $contacts;
      }
  }
		
	function get_suppliers() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM supplier";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$suppliers = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($suppliers, $myrow);
			}
			pg_close($db);
			return $suppliers;
		}
		
	}

	
	
	function get_threads() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM thread";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$threads = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($threads, $myrow);
			}
			pg_close($db);
			return $threads;
		}
		
	}
	
	
	function get_dye_style_dye() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM dye_style_dye";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$dye_style_dyes = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($dye_style_dyes, $myrow);
			}
			pg_close($db);
			return $dye_style_dyes;
		}
		
	}
	
	function get_dye_style_manufacturer() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM dye_style_manufacturer";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$dye_style_manufacturer = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($dye_style_manufacturer, $myrow);
			}
			pg_close($db);
			return $dye_style_manufacturer;
		}
		
	}
	
	
?>