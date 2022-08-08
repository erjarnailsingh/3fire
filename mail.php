<?php
//get data from form  
$name = $_POST['name'];
$phone= $_POST['phone'];
$pincode= $_POST['pincode'];
$to = "jrnlsk@gmail.com";
$subject = "3-Fire";
$txt ="Name = ". $name . "\r\n  Phone = " . $phone . "\r\n Pincode =" . $pincode;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
echo "<script type= 'text/javascript'>alert('Your Message Has Been Sent Successfully. We Will Call You Shortly');
window.history.go(-1)
 </script>";
// header("Location:thankyou.html");
?>