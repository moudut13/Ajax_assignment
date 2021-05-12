<?php include_once "include/header.php"?>

<?php
    include_once 'autoload.php';
    if (isset($_SESSION['status']) AND $_SESSION['status'] == true){
        header('location:profile.php');
    }
?>
<?php
if (isset($_POST['submit'])){
    $name = $_POST['uname'];
    $pass = $_POST['pass'];
    if (empty($name) || empty($pass)){
        $msg = validation('All fields are required');
    }else{
        $sql = "SELECT * FROM users WHERE email = '$name' || username = '$name' || cell = '$name'";
        $login_data = $config->query($sql);
        $data = $login_data->fetch_object();
        if ($login_data->num_rows == 1){
            if (password_verify($pass,$data->pass)){
                header('location:profile.php');
                $_SESSION['login_id'] = $data->id;
                $_SESSION['status'] = true;
            }else{
                $msg = validation('Password is Increate!');
            }
        }else{
            $msg = validation('User Name Not Found!');
        }
    }
}
?>
	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign In</h2>
                <span class="msg"></span>
                <span><?php if (isset($msg)){echo $msg;}?></span>

				<form method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Email or Username or Cell</label>
						<input name="uname" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input name="pass" class="form-control" type="password">
					</div>
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Log In">
					</div>
				</form>
			</div>
            <a href="singup.php" class="btn btn-primary text-light">Sing Up</a>
		</div>
	</div>
	
<?php include_once "include/footer.php"?>


