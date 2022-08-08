<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		//$email=$_POST['email'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$zipcode=$_POST['zipcode'];
		

		$to='3fire6@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Enquiry';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$address;
		$headers="From: ".$name;

		if(mail($to, $subject, $name, $phone)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>