<?php
        
        
	if(!isset($index)){ Header("Location: ../index.php"); exit; }
	
	if(isset($_POST['register'])){
		$username = $_POST['username'];		
                $password = sha1($_POST['password']);
                
		$email = $_POST['email'];
		$skype = $_POST['skype'];
		$refer = $_POST['referedby'];
                

		$usn = $pdo->prepare("SELECT * FROM users WHERE username = :username");
		$usn->bindValue(":username",$username,PDO::PARAM_STR);
		$usn->execute();
		
		$ymn = $pdo->prepare("SELECT * FROM email WHERE email = :email");
		$ymn->bindValue(":email",$email,PDO::PARAM_STR);
		$ymn->execute();

		
		if(count($usn->fetchAll()) > 0) {
			echo '<div class="alert alert-block alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <center>
                                <h5>Username already in use!</h5>
                                </center>
                            </div>';
		}elseif(count($ymn->fetchAll()) > 0) {
			echo '<div class="alert alert-block alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <center>
                                <h5>Email already in use!</h5>
                                </center>
                            </div>';
		}elseif(strlen($_POST['password']) <= 3){
			echo '<div class="alert alert-block alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <center>
                                <h5>Password must be at least 3 characters!</h5>
                                </center>
                            </div>';
                }elseif(strlen($_POST['email']) <= 3){
			echo '<div class="alert alert-block alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <center>
                                <h5>No email address entered!</h5>
                                </center>
                            </div>';
		}else{
			$ins = $pdo->prepare("INSERT INTO users (username,email,password,skype,referedby) VALUES (:username,:email,:password,:skype,:referedby)");
			$ins->bindValue(":username",$username,PDO::PARAM_STR);
			$ins->bindValue(":email",$email,PDO::PARAM_STR);
			$ins->bindValue(":password",$password,PDO::PARAM_STR);
			$ins->bindValue(":skype",$skype,PDO::PARAM_STR);
			$ins->bindValue(":referedby",$refer,PDO::PARAM_STR);
			$ins->execute();
                        Header("Location: index.php?site=welcome");
		}
	}


?>
<form action="" method="POST">
<div class="row">
            <div class="col-sm-12">
                <section class="panel panel-info">
                    <header class="panel-heading" align="center">
                        Register
                    </header>
                    <div class="panel-body">
                   			<label for="username">Username:</label>
			<input type="text" class="form-control" placeholder="Your Username" name="username">
			<br>
			<label for="password">Password</label>
			<input type="password" class="form-control" placeholder="Your Password" name="password">
		<br>
			<label for="email">Email Address</label>
			<input type="text" class="form-control" placeholder="Your Email Address" name="email">
		<br>
		
			<label for="skype">Contact Information</label>
			<input type="text" class="form-control" placeholder="Your primary contact information" name="skype">
		<br>
		
			<label for="referedby">Referred by</label>
			<input type="text" class="form-control" name="referedby" placeholder="Username of who refered you">
		
	<br>
		<input type="submit" class="btn btn-block btn-info" name="register" value="Register Now">
                <br>
                
</form>
                    </div></section>
                            