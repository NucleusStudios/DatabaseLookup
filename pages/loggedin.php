<?php
		echo '
		<center>
		<div class="alert alert-block alert-success fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <center>
                                <h5>You logged in successfully!</h5>

                            </div>		</center>
		';
		header( "refresh:1; url=../index.php?site=home" );
?>