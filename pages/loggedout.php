<?php
		echo '
		<div class="alert alert-block alert-warning fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <center>
                                <h5>You have logged out</h5>
                                </center>
                            </div>
		';
		header( "refresh:1; url=../index.php?site=login" );
?>