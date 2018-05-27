<?session_start();?>
<html>
<head>
	<meta charset="utf-8">
	<title>Список передач</title>
	
	<!-- 
	<link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="css/aside.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="css/form.css" type="text/css" charset="utf-8">
	<link href="img/1.ico" rel="shortcut icon" type="image/x-icon">
	-->


	<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="/css/footer.css" type="text/css">
</head>

<body>
	<div id="wrapper">
		<div id="content">
			
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="index.php">Синема студия</a>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="partners.php">Партнёры<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="price-list.php">Прайс-лист</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="about.php">О компании</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contacts.php">Контакты</a>
						</li>
						<?if(isset($_SESSION['email_user'])){?>
							
							<div class="dropdown">
								<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<?echo $_SESSION['email_user']?>
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="profile.php">Профиль</a>
									<a class="dropdown-item" href="exit.php">Выйти</a>
								</div>
							</div>
						<?}?>
					</ul>

					
					<?if( !isset($_SESSION['email_user'])){?>
							
						<form class="form-inline" action="/user_action/auth.php" method="POST">
						<label for="email">Email address:</label>
						<input type="email" name="email" class="form-control" id="email">
						<label for="pwd">Password:</label>
						<input type="password" name="password" class="form-control" id="pwd">
						<button type="submit" class="btn btn-primary">Войти</button>
						<a class="nav-link" href="reg.php">Регистрация</a>
					</form>
					<?}?>
					
				</div>
			</nav>