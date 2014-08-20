<div class="row">
            <div class="col-sm-12">
                <section class="panel panel-primary">
                    <header class="panel-heading" align="center">
                        Results
                    </header>
                    <div class="panel-body">
                    <?php
	if(!isset($index)){ Header("Location: ../index.php"); exit; }
	if(!isset($_SESSION['username'])){
		Header("Location: index.php?site=login");
	}
	
	
	if(isset($_POST['search']) OR isset($_GET['alias'])){
		if(isset($_POST['search'])){
			$search = $_POST['alias'];
		}else{
			$search = $_GET['alias'];
		}
		$lines = file($filename); //edit in config.php
		$found = false;
		foreach($lines as $line)
		{
		  $var = explode(" ",$line);
                  if(strpos($var[1] . $var[2], $search) !== false) //search in alias
		 {
			$found = true;
			echo '<br>
			<strong>Alias:</strong> '.$var[1].'<br>
			<strong>Email Address:</strong> '.$var[2].'<br>';
			$get = $pdo->prepare("SELECT * FROM unlocked WHERE username = :username AND alias = :alias");
			$get->bindValue(":username",$_SESSION['username'],PDO::PARAM_STR);
			$get->bindValue(":alias",$var[1],PDO::PARAM_STR);
			$get->execute();
			
			if(count($get->fetchAll()) == 0){
				echo'<strong>Hash:</strong> '.DotPerLen(strlen($var[3])).'<br>
				<strong>Cracked:</strong> '.DotPerLen(strlen($var[4])).'<br>
				<a class="btn btn-xs btn-info" href="index.php?site=unlock&alias='.$var[1].'">Unlock</a><br>
				';
			}else{
				echo'<strong>Hash:</strong> '.$var[3].'<br>
				<strong>Cracked:</strong> '.$var[4].'<br>
				';
			}
			
		  }
		}
		if(!$found)
		{
		  echo '<div class="alert alert-block alert-warning fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <center>
                                <h5>No Hash Found</h5>
                                <strong><a class="btn btn-xs btn-primary" href="index.php?site=search">Search again</a></strong>
                                </center>
                            </div>';
		}
		
		
	}

?>
            </div>
                </section>
            </div>
        </div>
     
     
                            
                            