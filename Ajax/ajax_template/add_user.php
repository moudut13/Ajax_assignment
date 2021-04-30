<?php
    include_once "../autoload.php";
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users_info(name,username,email,password)VALUES ('$name','$username','$email','$password')";
    $config->query($sql);
