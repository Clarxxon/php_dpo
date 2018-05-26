<?
include('../header.php');
include('../database/connection.php');

function redTo($value='')
{
  echo "<script> window.location.replace('$value'); </script>";
}
	
		$login = strtolower(trim(htmlspecialchars($_POST['email'])));
		$pass = trim(htmlspecialchars($_POST['password']));
		
        $st = $connection->query("SELECT * FROM user_ WHERE email_user='$login'");
        $auth_success=false;

		foreach($st->fetchAll(PDO::FETCH_ASSOC) as $row) 
		{
			$email_user = $row['email_user'];
            $hash = $row['password'];
            $id_user= $row['id_user'];
            $auth_success=true;
        }
       
        
		//$_SESSION['email_user'] = $email_user;
		//$_SESSION['role'] = $role;

		if(password_verify($pass, $hash)) 
		{
			if(password_needs_rehash($hash, PASSWORD_BCRYPT))
			{
				$newhash = password_hash($pass, PASSWORD_BCRYPT);
				$q = "UPDATE user_ SET password = '$newhash' WHERE id_user = $id_user";
				$connection->exec($q);
			}
            
			$_SESSION['email_user'] = $email_user;
			redTo('../index.php');

            /*
			if($_SESSION['role']  == 'agent')
			{
				redTo('cabinet_agent.php');
			}
			if($_SESSION['role']  == 'customer')
			{
				redTo('cabinet_customer.php');
            }
            */			
		}
		else
		{
			echo "неверный логин или пароль!";
		}	
	

include('../footer.php');
?>