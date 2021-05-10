<?php
$name= $_REQUEST['name'];
$email= $_REQUEST['email'];
$message= $_REQUEST['message'];

if(empty($name) || empty($email) || empty($message))
{
	echo "Please fill all the fields";
}
else
{
	mail("arshadqadri321@gmail.com", "portfolio", $message,"From: $name<$email>");

echo "<script type='text/javascript'>alert('Message sent successfully.');
	window.history.log(-1);
</script>";
}
?>