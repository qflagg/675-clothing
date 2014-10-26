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
	
	function get_fob() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM fob";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$fob = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($fob, $myrow);
			}
			pg_close($db);
			return $fob;
		}
		
	}
	
	
	function get_material() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM material";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$materials = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($materials, $myrow);
			}
			pg_close($db);
			return $materials;
		}
		
	}
	
	function get_photo() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM photo";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$photos = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($photos, $myrow);
			}
			pg_close($db);
			return $photos;
		}
		
	}
	
	function get_notion_photo() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM material_notion_photo";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$notion_photos = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($notion_photos, $myrow);
			}
			pg_close($db);
			return $notion_photos;
		}
		
	}
	
	function get_material_photo() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM material_photo";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$material_photos = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($material_photos, $myrow);
			}
			pg_close($db);
			return $material_photos;
		}
		
	}
	
	function get_style_notion() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Style_notion";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$style_notions = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($style_notions, $myrow);
			}
			pg_close($db);
			return $style_notions;
		}
		
	}
	
	function get_style_photo() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Style_photo";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$style_photos = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($style_photos, $myrow);
			}
			pg_close($db);
			return $style_photos;
		}
		
	}
	
	function get_style_piece() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Style_piece";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$style_piece = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($style_piece, $myrow);
			}
			pg_close($db);
			return $style_piece;
		}
		
	}
	
	
	function get_style_processing() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Style_processing";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$style_processing = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($style_processing, $myrow);
			}
			pg_close($db);
			return $style_processing;
		}
		
	}
	
	function get_style_seam() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Style_Seam";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$style_seam = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($style_seam, $myrow);
			}
			pg_close($db);
			return $style_seam;
		}
		
	}
	
	function get_supplier_dye() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Supplier_dye";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$supplier_dye = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($supplier_dye, $myrow);
			}
			pg_close($db);
			return $supplier_dye;
		}
		
	}
	
	function get_supplier_notion() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Supplier_notion";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$supplier_notion = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($supplier_notion, $myrow);
			}
			pg_close($db);
			return $supplier_notion;
		}
		
	}
	
	function get_thread_seams() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Thread_Seam";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$thread_seam = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($thread_seam, $myrow);
			}
			pg_close($db);
			return $thread_seam;
		}
		
	}
	
	
	function get_thread_suppliers() {
		$db = connect_to_pg_server();
		$query = "SELECT * FROM Thread_Supplier";
		$result = pg_query($db, $query);
		if(!$result){
			echo "Something went wrong";
		} else {
			$thread_supplier = array();
			while($myrow = pg_fetch_assoc($result)) {
				array_push($thread_supplier, $myrow);
			}
			pg_close($db);
			return $thread_supplier;
		}
		
	}
	
	
?>