<head>
  <title>ConnectUrKids</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="icon" href="../resources/images/LoginWaterMark.png"  type="image/x-icon">
</head>
<div style="text-align: center; 	margin: 100px 100px;">
<?php
//Strings remove for security purposes
$servername = "";
$username = "";
$password = "";
$dbname = "";
?> 
<div style="text-align: center; 	margin: 100px 100px;">
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
				
				$email = $_POST['email']; 
				
				$pw = $_POST['login_password'];				
				
				$stmt = "SELECT * FROM logins WHERE email= ? AND password= ?;";
				
				if($query = $conn->prepare($stmt)) 
				{ 
					$query->bind_param("ss", $email, $pw);
					$query->execute();
					$query->store_result();
					
					if ($query->num_rows == 1) 
					{
						echo 'Welcome ', $email;
						include 'homePage.php';
					}
					else 
					{
						echo "Incorrect user-name or password"; 
						echo "<br> Please try again.";
						echo "<br> <a href='../index.html'> Login </a>";
					}
				}	
				   $query->close();
			}
			
			$conn->close();
			?>
</div>



