<?php
require 'config.php';
if($_SERVER['REQUEST_METHOD']==='GET'){
    $userid=$_GET['user_id'];
    if(!empty($userid)){
    $stmt=$pdo->prepare ("SELECT * FROM mood_tracker WHERE user_id=:user_id ORERED BY timestamp DESC");
    $stmt->execute(['user_id'=>$userid]);
    $moods=$stmt->fetchAll(PDO::FETCH_ASSOC);
    echo Json_encode(['status'=>'success','data'=>$moods]);{
        else{
            echo Json_encode(['status'=>'error','message'=>'User ID is required.']);
        }
    }else{
        echo Json_encode(['status'=>'error','message'=>'invalid request method.']);
    }
    }
}?>