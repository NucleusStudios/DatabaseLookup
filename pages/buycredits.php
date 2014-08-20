<?php

	if(!isset($_SESSION['username'])){
		Header("Location: index.php?site=login");
	}


	if(isset($_POST['submit'])){
		die($_POST['calcolato']);
	}
?>

<script type="text/javascript"> 
	function Totale(t){
		document.getElementById("calcolato").value = t;
		$('#someButton').click(function() {
			window.location.href = 'index.php?site=buy&credits='+document.getElementById('calcolato').value;
			return false;
		});


	}
	
</script> 

  <div class="row">
            <div class="col-sm-12">
                <section class="panel panel-success">
                    <header class="panel-heading" align="center">
                        Purchase Credits
                    </header>
                    <div class="panel-body">
                  <label for="valore">Amount of Credits</label>
  	<input type="text" class="form-control" value="5" onchange="Totale(this.value)" name="valore">
  	<br>
  	<label for="calcolato">Price (USD)</label>
  	<input type="text" class="form-control" value="5" id="calcolato" readonly name="calcolato">
<br>
                       <input type="submit" class="btn btn-block btn-info" value="Buy Now" id="someButton">
                    </div>
                    </section>
                    </div>
                    </div>
