<?php

 // MySQL

 $name       = "mysql";
 $host       = "host-ip";
 $username   = "user";
 $password   = "pass";
 $dbname     = "dbname";
 $dsn        = "mysql:host=$host;dbname=$dbname";
 $options    = array(
                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
               );

?>