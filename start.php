<?php 
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<form action="login.php" method="POST">
   	<input type="text" name="uid" placeholder="Username"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
    <br>
    <br>
 	<button type="submit">LOGIN</button>
</form>

<?php 
	if (isset($_SESSION['id'])) {
		echo $_SESSION['id'];
		}	else	{
		
			}
			?>
        
<br><br><br>


 <form action="signup.php" method="POST">
 	<input type="text" name="first" placeholder="Firstname"><br>
 	<input type="text" name="last" placeholder="Lastname"><br>
 	<input type="text" name="uid" placeholder="Username"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
    <br>
    <br>
 	<button type="submit">SIGN UP</button>
 </form>
 
 <form action="start.php">
  <button>LOG OUT</button>
 </form>

</body>
</html>