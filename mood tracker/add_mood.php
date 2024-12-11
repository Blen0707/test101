<?php
require 'config.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
    $userid=$_POST['user_id'];
    $mood=$_POST['mood'];
    if(!empty($userid)&&!empty($mood)){
        $stmt=$pdo->prepare ("INSERT INTO mood_tracker (user_id,mood) VALUES(:user_id:mood)");
        $stmt->execute(['user_id'=>$userid,':mood'=>$mood]);
        echo Json_encode(['status'=>'success','message'=>'mood added successfully.']);
        }else{
            echo Json_encode(['status'=>'error','message'=>'invalid input.']);
        }else{
            echo Json_encode(['status'=>'error','message'=>'invalid request method']);
        }
        ?>