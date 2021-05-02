<?php
    include_once "../../autoload.php";
    $id = $_POST['id'];

    //Photo File Delete
    $del = "SELECT * FROM students_info where id='$id'";
    $data = $config->query($del);
    $row = $data->fetch_object();
    //$row->photo;
    // Photo file delete function
    unlink('../assets/img/photo/'.$row->photo);

    //delete student data
    $sql = "DELETE FROM students_info WHERE id='$id'";
    $config->query($sql);



