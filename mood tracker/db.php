<?php
    try{
        $dsn= 'mysql:host=localhost;dbname=db';
        $username='root';
        $password=" ";
        $conn=new PDO($dsn,$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
        echo"connected successfully";
        catch (PDOEXCEPTION $e){
            echo"connection failed:" .$e->getMessage();
        }
        
        
    }


CREATE DATABASE mood_tracker;
// USE mood_tracker;
// CREATE TABLE mood_tracker(
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     user_id INT NOT NULL;
//     mood VARCHAR(50)NOT NULL;
//     timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
// );
// ?>