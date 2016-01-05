<head>
  <title>ConnectUrKids</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="icon" href="resources/images/LoginWaterMark.png"  type="image/x-icon">
</head>	
<div style="text-align: center;">
	<img src="../resources/images/createAccountWaterMark.png" alt="image">
	<br>
	<div class="createAccountFloating-box">
		<form action="createAccountProc.php" method="post">
		   <label for="newEmail">Email:</label><input id="new_email" name="new_email" type="text" required>
		   <br>
		   <label for="user_name">User-name:</label><input id="user_name" name="user_name" type="text" required>
		   <br>
		   <label for="password">Password:</label><input id="new_password" name="new_password" type="password" required>
		   <br>
		   <label for="passwordMatch">Re-enter Password:</label><input id="passwordMatch" type="password" required>
		   <br>
		   <br>
		   <br>
		   <input type="submit" class="hoverable" value="Create Account">
		</form> 
	</div>
</div>