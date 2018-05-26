<?include('../header.php');
include('../database/connection.php');

$name=$_POST['name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_confirm=$_POST['password-confirmation'];



if($password!=$password_confirm){
	echo "пароли не совпадают!";
}else{
	if($name and $email and $password){
		$dbpassword=$password;
		$dbpassword = password_hash($password, PASSWORD_DEFAULT);
		$q = "INSERT INTO user_ (`name_user`, `last_name_user`, `email_user`, `password`) VALUES ('$name', '$last_name', '$email', '$dbpassword')";

		
		if ($connection->exec($q)) {
			$mg = "пользователь зарегистрирован";
		}
		else
			$mg = "такой пользователь уже есть";

		echo $mg;
	}
}





include('../footer.php');
?>