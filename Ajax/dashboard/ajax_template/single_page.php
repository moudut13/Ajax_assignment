<?php

    include_once "../../autoload.php";
    $id = $_POST['id'];
    $sql = "SELECT * FROM students_info WHERE id='$id'";
    $data = $config->query($sql);
    $row = $data->fetch_object();
    ?>

<!--Start-->
<div class="container-fluid mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets/img/model/3.jfif" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row->name;?></h5>
                                <table class="table col-md-4">
                                    <tr>
                                        <th scope="row">User Name</th>
                                        <td>:</td>
                                        <td><?php echo $row->username;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td>:</td>
                                        <td><?php echo $row->email;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Id</th>
                                        <td>:</td>
                                        <td><?php echo $row->s_id;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Address</th>
                                        <td>:</td>
                                        <td><?php echo $row->address;?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-End--->

