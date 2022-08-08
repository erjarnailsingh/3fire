<?php 
$name = $_REQUEST['name'];
$phone = $__REQUEST['phone'];
$address = $_REQUEST['address'];
$zipcode = $_REQUEST['zipcode'];

if (empty($name) || empty($phone) || empty($address) )

{
echo "Please fill all details";
}

if (
mail("3fire6@gmail.com", "Enquiry" , $name , $phone , "From: $name")){
echo "<script type= 'text/javascript'>alert('Your Message Has Been Sent Successfully. We Will Call You Shortly');
window.history.go(-1)
 </script>";}

?>