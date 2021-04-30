<?php
    include_once "../../autoload.php";
    $id = $_POST['id'];
    $sql = "DELETE FROM students_info WHERE id='$id'";
    $config->query($sql);
