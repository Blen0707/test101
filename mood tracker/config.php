<?php
$host='localhost';
$dbname='mood_tracker';
$username='root';
$password="";
try{
    pdo=new PDO("mysql:host;dbname=$dbname",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        die("Database connecrtion failed:".$e->getMessage());
    }
    ?>