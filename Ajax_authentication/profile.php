<?php include_once "include/header.php";?>
<?php
    include_once "autoload.php";
    if (isset($_GET['logout']) AND $_GET['logout'] == 'logout'){
        session_destroy();
        header('location: index.php');
    }

    if (!isset($_SESSION['status'])){
        header('location:index.php');
    }

?>
<?php
    include_once "autoload.php";
    $data = find('users',$_SESSION['login_id']);
    $login_user_id = loginUserInfo($data->id);
?>

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2><?php echo $login_user_id->name;?></h2>
                <img src="assets/media/img/view/<?php echo $login_user_id->photo;?>" style="width: 200px;height: 220px; border-radius: 50%; margin: 20px auto; display: block;">
                <table class="table">
                    <tr>
                        <td>Name</td>
                        <td><?php echo $login_user_id->name;?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $login_user_id->email;?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><?php echo $login_user_id->username;?></td>
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td><?php echo $login_user_id->cell;?></td>
                    </tr>
                </table>
			</div>
            <a href="?logout=logout" class="btn btn-success text-light">LogOut</a>
		</div>
	</div>
<?php include_once "include/footer.php";?>






