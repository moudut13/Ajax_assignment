<?php
    include_once "../../autoload.php";
    $id = $_POST['id'];
    $sql = "SELECT * FROM students_info WHERE id = '$id'";
    $data = $config->query($sql);
    $row =$data->fetch_object();
    ?>

<!--Start-->
<div class="container-fluid mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto shadow p-3 mb-5 bg-body rounded" style="background-color: #ebedec">
                <form id="ubtn" autocomplete="off" class="pt-4" method="POST">
                    <div class="mb-3">
                        <input name="id" value="<?php echo $row->id;?>" style="display: none">
                        <label for="" class="form-label">Name</label>
                        <input name="name" value="<?php echo $row->name;?>" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">User Name</label>
                        <input name="username" value="<?php echo $row->username;?>" type="text" class="form-control">
                        <div class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input name="email" value="<?php echo $row->email;?>" type="email" class="form-control">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Cell</label>
                        <input name="cell" value="<?php echo $row->cell;?>" type="text" class="form-control">
                        <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Id</label>
                        <input name="id" value="<?php echo $row->id;?>" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Address</label>
                        <input name="address" value="<?php echo $row->address;?>" type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mb-4" id="up">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-End--->
<?php

?>
