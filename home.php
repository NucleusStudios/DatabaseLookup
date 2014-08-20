<?php
	if(!isset($index)){ Header("Location: ../index.php"); exit; }
	
	if(isset($_SESSION['username'])){
		echo '
		<center>
        <div class="row">
            <div class="col-sm-12">
                <section class="panel panel-info">
                    <header class="panel-heading">
                        News & Updates
                    </header>
                    <div class="panel-body">
                        <h4><u>8/8/14</u></h4>
                       Over 173k entries have been added! This website will be constantly updated with new database entries. Soon we will be cracking a lot more hashes then the large amount we already have to improve quality of lookups. We are now offering a reward for any databases submitted to us that are HQ and unseen, credits will be awarded.We are going to be adding a PayPal autobuy system for credits very soon. PayPal is not accepted and will not be accepted! Sorry! More security patches have been applied to keep the website secure with your data. There will be a rather strict terms of service being added to the site in the next few days or so.

                    </div>
                    </section>     </div>
        </div>
        </center>
		';
	}else{
		echo '<div class="alert alert-block alert-danger fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <center>
                                <h5>You must <a class="btn btn-xs btn-info" href="index.php?site=login">login</a> or <a class="btn btn-xs btn-info" href="index.php?site=register">register</a> to use this website!<br></h5>
                                </center>
                            </div>';
	}


?>