<?php
		echo '
		<div class="alert alert-block alert-success fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <center>
                                <h5>Thank you for registering. Please sign in.</h5>
                                </center>
                            </div>';
		header( "refresh:1; url=/index.php?site=login" );
?>