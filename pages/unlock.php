<?php
	if(!isset($index)){ Header("Location: ../index.php"); exit; }
	if(!isset($_SESSION['username'])){
		Header("Location: index.php?site=login");
	}
	
	if(isset($_GET['alias'])){
		
		$get = $pdo->prepare("SELECT * FROM users WHERE username = :username");
		$get->bindValue(":username",$_SESSION['username'],PDO::PARAM_STR);
		$get->execute();
		$get = $get->fetchAll();
		$credits = $get[0]['credits'];
		if($credits >= 1){
			$credits--;
			
			$upd = $pdo->prepare("UPDATE users SET credits = :credits WHERE username = :username");
			$upd->bindValue(":username",$_SESSION['username'],PDO::PARAM_STR);
			$upd->bindValue(":credits",$credits,PDO::PARAM_STR);
			$upd->execute();
			
			
			$ins = $pdo->prepare("INSERT INTO unlocked (username,alias) VALUES (:username,:alias)");
			$ins->bindValue(":username",$_SESSION['username'],PDO::PARAM_STR);
			$ins->bindValue(":alias",$_GET['alias'],PDO::PARAM_STR);
			$ins->execute();
			
			Header("Location: index.php?site=result&alias=".$_GET['alias']."");
		}else{
			echo '<div class="alert alert-block alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <center>
                                <h5>Not enough credits! To unlock this hash, you must <a class="btn btn-xs btn-primary" href="index.php?site=buycredits">purchase</a> some more credits!</h5>
                                </center>
                            </div>';
		}
		
	}
	
?>