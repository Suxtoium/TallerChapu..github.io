<?php
$SERVER = "bgkmdoqo0rlm3urgdpob-mysql.services.clever-cloud.com";
$DATABASENAME = "bgkmdoqo0rlm3urgdpob";
$USER = "ust2osaud39bf4oy";
$PASSWORD = "KNh8dFVHX2YbaQ3VISvv";
$CONNECTION = "mysql:dbname=" . $DATABASENAME . ";host=" . $SERVER;
try {
    $pdo = new PDO(
        $CONNECTION,
        $USER,
        $PASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
    
} catch (PDOException $e) {
    echo "<script>alert('Error al conectar a la base de datos!')</script>";
}

 ?>