<?php
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost','root','','test2');
    if($conn->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(fullName, email, password) values(?, ?, ?)");
        $stmt->bind_param("sss",$fullName, $email, $password);
        $stmt->execute();
        echo "Registration Successful!";
        $stmt->close();
        $conn->close();
    }
?>