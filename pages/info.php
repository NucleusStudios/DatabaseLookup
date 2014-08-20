<br>
<?php
	if(!isset($index)){ Header("Location: ../index.php"); exit; }
	if(!isset($_SESSION['username'])){
		Header("Location: index.php?site=login");
	}
	
	$get = $pdo->prepare("SELECT * FROM users WHERE username = :username");
	$get->bindValue(":username",$_SESSION['username'],PDO::PARAM_STR);
	$get->execute();
	$get = $get->fetchAll();
	
	
	echo '
	<aside class="profile-nav alt">
                            <section class="panel">
                                <div class="user-heading alt gray-bg">
                                    <center><h1>'.$_SESSION['username'].'</h1>
                                    <p><i class="fa fa-user"></i> User</p>
                                    </center>
                                </div>

                                <ul class="nav nav-pills nav-stacked">
                                    <li><a> <i class="fa fa-envelope-o"></i> <strong>Email Address</strong> &bull; '.$get[0]['email'].'</a></li>
                                    <li><a> <i class="fa fa-money"></i> <strong>Credits</strong> &bull; '.$get[0]['credits'].'</a></li>
                                    <li><a> <i class="fa fa-comment-o"></i> <strong>Contact Information</strong> &bull; '.$get[0]['skype'].'</a></li>
                                </ul>

                            </section>
                        </aside>

	
	';
	

?>