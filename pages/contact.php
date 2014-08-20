<?php
	if(!isset($index)){ Header("Location: ../index.php"); exit; }
?>

				<?php
				if (isset($_POST['name'])){
				if (isset($_POST['email'])){
				if (isset($_POST['subject1'])){
				if (isset($_POST['message'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject1 = $_POST['subject1'];
    $message = $_POST['message'];
    $from = 'support@skypeip.net'; 
    $to = 'kasualsworld@gmail.com'; 
    $subject = 'kBase Support';

    $body = "From: $name\n Email Address: $email\n Subject:\n $subject1 Message:\n $message";}}}}
?>
<?php
if (isset($_POST['submit'])){
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p><div class="alert alert-success" align="center">
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       Your message has been successfully delivered! 
       </div></p>';
    } else { 
        echo '<div class="alert alert-danger" align="center">
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
       Something went wrong! Go back and try again.
       </div>'; 
    }
}
?>

<div class="panel">
					<div class="panel-heading">
						<span class="panel-title"><i class="panel-title-icon fa fa-envelope"></i> Contact Us</span>
					</div>
					<div class="panel-body">
									<form method="post" action="">
        
    <label>Name</label>
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <input name="name" class="form-control" placeholder="Your Name"></div>
     <br>       
    <label>Email</label>
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <input name="email" class="form-control" type="email" placeholder="Your Email Address"></div>
    <br>
    <label>Subject</label>
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-question"></i></span>
    <input name="subject1" class="form-control" placeholder="Subject"></div>
     <br>       
    <label>Message</label>
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
    <textarea name="message" class="form-control" placeholder="Your Message"></textarea></div>
    <br>      
    <input id="submit" class="btn btn-info btn-block" name="submit" type="submit" value="Submit">
        
</form>			
					</div>
				</div>	