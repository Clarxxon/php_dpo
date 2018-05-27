<?include('header.php');
include('/database/connection.php');
/*
if ($_POST['entryReg']) {
	$lastname = ($_POST['lastname']);
	$firstname = ($_POST['firstname']);
	$middlename = $_POST['middlename'];
	$email = ($_POST['email']);
	$login = ($_POST['login']);
	$password = ($_POST['password']);
	$repassword = ($_POST['repassword']);

	$q = "SELECT*, count(*) as count FROM customer WHERE lastname = '$lastname' AND firstname = '$firstname' AND middlename = '$middlename' AND email = '$email'";
	echo $q;

	$connection->query($q);
	$regcheck = false;

	foreach($connection->query($q) as $row) {
		if ($row['count']==0)
		{
			$regcheck = false;
			$mg = "Такого клиента нет в базе данных. ";
		}
		else $regcheck = true;

		$fk = $row['pk_customer'];
	}
	if ($password!=$repassword) {
		$regcheck = false;
		$mg .= "Пароль и его подтверждение не совпадают. ";
	}
	if ($regcheck!=false) {
		$dbpassword = password_hash($password, PASSWORD_DEFAULT);
		$q = "INSERT INTO user (`login`, `pass`, `role`, `fk_customer`) VALUES ('$login', '$dbpassword', 'customer', '$fk')";
	//	echo $q;
		if ($connection->exec($q)) {
			$mg = "Пользователь зарегистрирован";
		}
		else
			$mg = "Такой пользователь уже есть";

	}
}*/
 ?>

<div class="container">
    <form class="form-horizontal" role="form" method="POST" action="/user_action/register.php">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Регистрация нового пользователя</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Имя</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="name" class="form-control" id="name"
                               placeholder="John" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="last_name">Фамилия</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="last_name" class="form-control" id="last_name"
                               placeholder="Doe" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">E-Mail</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               placeholder="you@example.com" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Пароль</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Password" required>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <i class="fa fa-close"> Example Error Message</i>
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Повторите пароль</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fa fa-repeat"></i>
                        </div>
                        <input type="password" name="password-confirmation" class="form-control"
                               id="password-confirm" placeholder="Password" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="user_type">Кто вы?</label>
            </div>
           
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <select class="custom-select" name="user_type" id="user_type">
                            <option value="1">Заказчик</option>
                            <option value="2">Оператор</option>
                            <option value="3">Партнёр</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Зарегистрироваться</button>
            </div>
        </div>
    </form>
</div>


<? include ('footer.php')?>
