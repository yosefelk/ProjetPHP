<?php
include 'core/init.php';
include 'includes/overall/header.php';?>
<?php
if(isset($_POST)){
if (empty($_POST) === false) {
	
	
	$name		= $_POST['name'];
	$email		= $_POST['email'];
	$text	= $_POST['text'];

	mysql_query("INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$text')");
	}
}
else{
	echo "something wrong!";
}

?>
<h2>Contacts us</h2>
<div id="maps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.2312417704443!2d77.48509699999998!3d13.084525999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae236e37165bc5%3A0x775c53e4d8c418b9!2sACHARYA+INSTITUTES!5e0!3m2!1sen!2sin!4v1438023384037" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<h2>we value your feedback!</h2>
			<form action="" method="post">
			<ul>
				
		
						<li>Name:<br>
						<input type="text" name="name" onkeypress="return onlyAlphabets(event,this);"  required placeholder="Your name here...">
						</li>
						
						<li>Email:<br>
						<input type="text" name="email" required placeholder="example@mail.com">
						</li>
						<li>Feedback:<br>
						<textarea rows="10" cols="28" name="text"> 
					    </textarea>
						</li>
						<input type="submit" value="submit"/>
				
						
			<ul>
			</form>
<?php include 'includes/overall/footer.php';?>