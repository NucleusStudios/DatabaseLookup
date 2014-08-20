<?php
	if(!isset($index)){ Header("Location: ../index.php"); exit; }
	
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = sha1($_POST['password']);
		
		$log = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
		$log->bindValue(":username",$username,PDO::PARAM_STR);
		$log->bindValue(":password",$password,PDO::PARAM_STR);
		$log->execute();


		if(count($log->fetchAll()) <= 0){
			echo '<div class="alert alert-block alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <center>
                                <h5>Invalid Username or Password!</h5>
                                </center>
                            </div>';
		}else{
			$_SESSION['username'] = $username;
			Header("Location: index.php?site=loggedin");
		}
	}


?>
<div class="row">
            <div class="col-sm-12">
                <section class="panel panel-success">
                    <header class="panel-heading" align="center">
                        Login
                    </header>
                    <div class="panel-body">
	                    	<form action="" method="POST">
		                    		<label for="username">Username</label>
		                    		<input type="text" placeholder="Enter Username" class="form-control" name="username">
		                    		<br>
		                    		<label for="password">Password</label>
		                    		<input type="password" class="form-control" placeholder="Enter Password" name="password">
		                    		<br>
		                    	<input type="submit" class="btn btn-block btn-info" name="login" value="Login">
		            </form>
                    </div>
                    </section>
            </div>
</div>

