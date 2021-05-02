<?php
    include_once "../autoload.php";
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
                        <div class="row g-0 shadow p-3 mb-5 bg-body rounded">
                            <div class="col-md-4">
                                <img style="width: 300px;height: auto;margin: 30px 10px" src="assets/img/photo/<?php echo $row->photo;?>" alt="">
                            </div>
                            <div class="col-md-7" style="margin-left: 20px;">
                                <div class="card-body">
                                    <h5 class="card-title" style="margin-left: 20px;font-size: 20px;
font-weight: bold;margin-top: 30px;background-color: #78aaec;color: #fff; padding: 20px 0px;padding-left: 15px;"><?php echo $row->name;?></h5>
                                    <table class="table col-md-4">
                                        <tr>
                                            <th scope="row">username</th>
                                            <td>:</td>
                                            <td><?php echo $row->username;?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email</th>
                                            <td>:</td>
                                            <td><?php echo $row->email;?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Cell</th>
                                            <td>:</td>
                                            <td><?php echo $row->cell;?></td>
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
                                <div class="card-footer" style="margin-left: 20px;">
                                    <a id="back" class="btn btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-End--->
