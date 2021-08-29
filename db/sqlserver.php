<?php

 // SQLServer

 $name       = "sqlserver";
 $host       = "host-ip";
 $port       = "1433";
 $username   = "user";
 $password   = "pass";
 $dbname     = "dbname";
 $dsn        = "sqlsrv:Server=$host,$port;Database=$dbname";
 $options    = array(
                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
               );

?> 