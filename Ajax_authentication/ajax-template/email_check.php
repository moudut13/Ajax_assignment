<?php
    include_once "../autoload.php";
    $email = $_POST['email'];
    $data = dataCheck('users','email',$email);
    if ($data == true){
        echo "<span style='color: red;'>Email Already Exists!</span>";
    }else{
        echo "<span style='color: green;'>Email Available!</span>";
    }