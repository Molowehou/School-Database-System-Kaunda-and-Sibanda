<?php

require_once __DIR__. '/bootstrap.php';

   $serverName= "DESKTOP-C7CC5H2";
   try {
    $db = new PDO("sqlsrv:server=$serverName;Database=UserAuthentication");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   	
   } catch ( \Exception $e ) {
    echo 'Error connecting to the Database: ' . $e->getMessage();
    exit;
}










