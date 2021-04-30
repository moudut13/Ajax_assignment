<?php

    include_once "../../autoload.php";

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $cell = $_POST['cell'];
    $id = $_POST['id'];
    $address = $_POST['address'];
    $photo = $_POST['photo'];

    $sql = "INSERT INTO students_info (name,username,email,cell,s_id,address,photo)VALUES ('$name','$username','$email','$cell','$id','$address','$photo')";
    $config->query($sql);
