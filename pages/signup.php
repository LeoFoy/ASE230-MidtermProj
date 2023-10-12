<?php
require_once('../lib/functions.php');
if(count($_POST) > 0){
	if (isset($_POST['username'][0]) && isset($_POST['email'][0]) && isset($_POST['phone'][0]) && isset($_POST['password'][0])){ 
		$fp = fopen('../data/users.csv.php', 'a+');
		fputs($fp, $_POST['username'].','.$_POST['email'].','.$_POST['phone'].','.$_POST['password'].PHP_EOL);
		fclose($fp);
		echo 'Account created!';	
	}
	else
		echo 'username, email, phone, and password are missing';
}
else {
?>

<h1>Welcome to foot in door!<h1>
<h2>Eneter in information to create a new account<h2>

<form method="POST">
	Username:<input type="text" name="username" required></input><br>
	</br>
	Email:<input type="email" name="email" required></input><br>
	</br>
	Phone:<input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" pattern="[0-9]{3}[0-9]{2}[0-9]{3}" required></input><br>
	</br>
	Password:<input type="Password" name="password" required></input><br>
	</br>
	<button type="submit">Sign up</button>
</form>
<?php } ?>
<a href="../foot_in_door_website/index.php">Go back to home page</a>