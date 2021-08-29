<?php

 // PostgreSQL

 $name       = "postgresql";
 $host       = "host-ip";
 $username   = "user";
 $password   = "pass";
 $dbname     = "dbname";
 $port       = "5432";
 $dsn        = "pgsql:host=$host;port=$port;dbname=$dbname";
 $options    = array(
                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
               );

?>