<?php
$name =$_REQUEST['Name'];
$email =$_REQUEST['Email'];
$message =$_REQUEST['Message'];
//check input fields
if (empty($name) || empty($email) || empty($message))
{
	echo "Please fill all the fields";
}
else
{
	mail("rishikeshamitnayak@gmail.com","PROFILE MESSAGE",$message , "From: $name<$email>");
	echo "<script type='text/javascript'>alert('Your Message sent successfully');
	window.history.log(-1)
	</script>";
}
?>