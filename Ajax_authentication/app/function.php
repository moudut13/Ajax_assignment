<?php
    include_once "db_config.php";

/* File Upload and save function
 */
function move($photo){
    $photo_name = $photo['name'];
    $temp = $photo['tmp_name'];
    $photo_name = $_FILES['photo']['name'];
    $photo_arr = explode('.',$photo_name);
    $txt = end($photo_arr);
    $quine_name = md5(rand(1,999999).time()).".".$txt;
    move_uploaded_file($temp,"../assets/media/img/view/".$quine_name);
    return $quine_name;

}

/*
 * message function
 */

function validation($msg,$type = 'danger'){
    return "<p class=\" alert alert-$type \">$msg<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
}

function find($table, $id)
{
    global $config;
    $data = $config->query("SELECT * FROM $table WHERE id='$id'");
    return $data->fetch_object();
}

/**
 * Login User Data
 */

function loginUserInfo($id){

    return find('users', $id);


}

/**
 * Data check function
 */
function dataCheck($table, $column, $data)
{
    global $config;
    $data = $config->query("SELECT $column FROM $table WHERE $column='$data' || $column LIKE '%$data%' ");

    if ($data->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}