<?php

    include_once "../autoload.php";

   $name = $_POST['name'];
   $email = $_POST['email'];
   $username = $_POST['username'];
   $cell = $_POST['cell'];

   /*
    * password Hashing
    */
    $password = $_POST['password'];
    $pass = password_hash($password,PASSWORD_DEFAULT);




   /*
    * File Upload and move address
    * */
   $photo = $_FILES['photo'];
   $photo_name = move($photo);

    $sql = "INSERT INTO users (name,email,username,pass,cell,photo) VALUES ('$name','$email','$username','$pass','$cell','$photo_name')";
    $config->query($sql);

