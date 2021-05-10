<?php
// $name= $_REQUEST['name'];
// $email= $_REQUEST['email'];
// $message= $_REQUEST['message'];

// if(empty($name) || empty($email) || empty($message))
// {
// 	echo "Please fill all the fields";
// }
// else
// {
// 	mail("arshadqadri321@gmail.com", "portfolio", $message,"From: $name<$email>");

// echo "<script type='text/javascript'>alert('Message sent successfully.');
// 	window.history.log(-1);
// </script>";
// }

// =================================================================

if(isset($_REQUEST['submit'])){


if(($_REQUEST['name']=="") || ($_REQUEST['email']=="") || ($_REQUEST['message']=="" ))
{
    
    echo "<script type='text/javascript'>alert('Please fill all the fields.');</script>";
}
else
{
$name= $_REQUEST['name'];
$subject=$_REQUEST ['subject'];
$email= $_REQUEST['email'];
$message= $_REQUEST['message'];
	$mailTo="arshadqadri321@gmail.com";
	$subject="Portfolio website";
	$txt="Name : ".$name.".\n\nMessage : ".$message.".\n\nEmail : ".$email;
	$headers= "From-".$email;
	mail($mailTo, $subject, $txt);

echo "<script type='text/javascript'>alert('Message Sent Successfully.');
window.location='../index.html';
</script>";
}}


?>