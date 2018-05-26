<?php
session_start();
include('/database/connection.php');
?>

<?php
function redTo($value='')
{
  echo "<script> window.location.replace('$value'); </script>";
}
	if(isset($_POST['auth']))
	{
		$login = strtolower(trim(htmlspecialchars($_POST['login'])));
		$pass = trim(htmlspecialchars($_POST['pass']));
		
		$st = $connection->query("SELECT * FROM user WHERE login='$login'");
		foreach($st->fetchAll(PDO::FETCH_ASSOC) as $row) 
		{
			$login = $row['login'];
			$hash = $row['pass'];
			$role = $row['role'];
			$pk_user = $row['pk_user'];
			$fk_customer = $row['fk_customer'];
		}
		$_SESSION['login'] = $login;
		$_SESSION['role'] = $role;

	
		if(password_verify($pass, $hash)) 
		{
			
			if(password_needs_rehash($hash, PASSWORD_BCRYPT))
			{
				$newhash = password_hash($pass, PASSWORD_BCRYPT);
				$q = "UPDATE user SET pass = '$newhash' WHERE pk_user = $pk_user";
				$connection->exec($q);
			}
			
			if($_SESSION['role']  == 'agent')
			{
				redTo('cabinet_agent.php');
			}
			if($_SESSION['role']  == 'customer')
			{
				redTo('cabinet_customer.php');
			}			
		}
		else
		{
			echo "Неправильный пароль<br>";
		}	
	}
?>