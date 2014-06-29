<?php
  // load the database library
  // include('DB.php');
	
  $dbtype = "mysql";
  $dbuser = "lukemichaels";
  $dbpassword = "St1llH0u$3";
  $dbhost = "newgameplusco.fatcowmysql.com";
  $dbname = "newgamedata";
  $connection = $dbtype.'://'.$dbuser.':'.$dbpassword.'@'.$dbhost.'/'.$dbname;
  $database = DB::connect($connection);
?>