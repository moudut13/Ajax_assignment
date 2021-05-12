<?php include_once "include/header.php"?>
<?php

include_once 'autoload.php';
if (isset($_SESSION['status']) and $_SESSION['status'] == true) {
    header('location:profile.php');
}

?>
	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>
                <div class="msg"></div>
				<form id="singup_btn" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input id="email" name="email" class="form-control" type="email">
                        <span id="show_email"></span>
					</div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input id="username" name="username" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input id="password" name="password" class="form-control" type="password">
                    </div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
                    <div class="form-group">
                        <label for="">Photo</label>
                        <input name="photo" class="form-control" type="file">
                    </div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
            <a href="index.php" class="btn btn-primary text-light">Log In Now</a>
		</div>
	</div>
	<br>




<?php include_once "include/footer.php"?>