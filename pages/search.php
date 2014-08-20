<?php
	if(!isset($index)){ Header("Location: ../index.php"); exit; }

?>
<form action="index.php?site=result" method="POST">
	 <div class="row">
            <div class="col-sm-12">
                <section class="panel panel-info">
                    <header class="panel-heading" align="center">
                        Search
                    </header>
                    <div class="panel-body">
                   	<label for="alias">Alias</label><br>
                   	<input type="text" class="form-control" placeholder="Enter Alias Here" name="alias">
	<br>
	<input type="submit" class="btn btn-block btn-info" name="search" value="Search">
                    </div>
                    </section>
            </div>
	 </div>
</form>