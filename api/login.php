<?php
    include('dbconn.php');
    $user = $_GET['user'];
    $pwd = $_GET['pwd'];
    $errCount = $_GET['errCount'];
    $sql = "select * from admin where user='{$user}'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $data = mysqli_fetch_assoc($result);
        if($data['pwd'] == $pwd){
            $msg['code']= 0;
        }else{
            $msg['code']=2;

        }
    }else{
        $msg['code']= 1;
    }
    echo json_encode($errCount);
?>