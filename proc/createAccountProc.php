<head>
  <title>ConnectUrKids</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="icon" href="resources/images/LoginWaterMark.png"  type="image/x-icon">
</head>	
<?php
//Strings remove for security purposes
$servername = "";
$username = "";
$password = "";
$dbname = "";
?> 
<div style="text-align: center; 	margin: 200px 200px;">
	<div class="floating-box" style="text-align: center; width: 350px;">
		<?php		  
			//Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			//Check connection
			if ($conn->connect_error)
			{
				die("Connection failed: " . $conn->connect_error);
			}
			else
			{					
				$conn->query("USE logins");
				
				$email = $_POST['new_email']; 
				$pw = $_POST['new_password'];
				$username = $_POST['user_name'];
				
				// prepare and bind
				$stmt = "INSERT INTO logins (email, password, username) VALUES (?, ?,?)";
				
				if($query = $conn->prepare($stmt)) 
				{ 
					$query->bind_param("sss", $email, $pw, $username);
					
					if($query->execute())
					{
						$query->close();
						include 'directoryProc.php';
						echo 'Account created successfully for ' . $email;
						echo '<br><br><a href="../index.html"> Login </a>';
					}
					else 
					{
						echo 'Email provided is already registered! <br> Please select another email address'; 
						echo '<br><br><a href="createAccount.php"> Create Account</a>';
					}
				}
			}				
			$conn->close();
			?>
		<br>
		<br>
	</div>
</div>