<?php

    include_once "../../autoload.php";
    $id= $_POST['id'];
    $name =  $_POST['name'];
    $username =  $_POST['username'];
    $email =  $_POST['email'];
    $cell =  $_POST['cell'];
    $id =  $_POST['id'];
    $address =  $_POST['address'];
    $sql = "UPDATE students_info SET name='$name',username='$username',email='$email',cell='$cell',s_id='$id',address='$address' WHERE id='$id'";
    $config->query($sql);