<?php

    include_once "../../autoload.php";

    $name =  $_POST['name'];
    $username =  $_POST['username'];
    $email =  $_POST['email'];
    $cell =  $_POST['cell'];
    $id =  $_POST['id'];
    $address =  $_POST['address'];

    //Photo name ....
    $photo = $_FILES['photo']['name'];
    $photo_temp_name = $_FILES['photo']['tmp_name'];
    $p_photo = explode('.',$photo);
    $data = end($p_photo);
    $file_name = rand(1,9).time();
    $photo_name = md5($file_name).".".$data;



    $sql = "INSERT INTO students_info (name,username,email,cell,s_id,address,photo)VALUES ('$name','$username','$email','$cell','$id','$address','$photo_name')";
    $config->query($sql);
    move_uploaded_file($photo_temp_name,'../assets/img/photo/'.$photo_name);

