<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Наши контакты</title>
	<link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="css/aside.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="css/form.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="css/rec.css" type="text/css" charset="utf-8">
	<link href="img/1.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body>
	<div id="wrapper">
		<div id="content">
			<header>
				<div id="logo">
					<a href="index.php" title="На главную">
						<img src="img/3.ico" title="Заказать ролик" alt="Заказать">
						<span>Заказ ролика</span>
					</a>
				</div>
				<div id="about">
					<a href="ad.php" title="Узнать детальнее о заказе">Заказ</a>
					<a href="graph.php" title="Просмотреть график передач">График передач</a>
				</div>
				<div id="entry">
					<a href="authorization.php" title="Войти в кабинет пользователя">
						<div id="btn">
							Войти
						</div>
						</a>
				</div>
				<style>
				.reg {
					position: absolute;
					top: 6px;
					right: 100px;
					
				}

				.reg>a:hover {
					border-bottom: 2px solid #f00024;
					margin-top: 7px;
				}

				.reg>a:active {
					border-bottom: 0;
					margin-top: 9px;
				}

				.reg>a {
					float: right;
					margin-right: 3%;
					margin-top: 5px;
					border-radius: 5px;
					padding: 5px 9px;
					font-size: 1.2em;
					background-color: #ff1027;
					text-shadow: #454545 0 0 2px;
					border-bottom: 4px solid #f00024;
					color: white;
				}
				</style>
				<div class ="reg">
					<a href="reg.php" title="Зарегистрироваться за сайте">
						<div id="btn">
							Регистрация
						</div>
					</a>
				</div>
			</header>
			<nav>
				<a href="telecast.php">Список каналов</a>
				<a href="price.php">Прайс-лист</a>
				<a href="about.php">О компании</a>
				<a href="contacts.php">Контакты</a>
			</nav>
			
			<div id="main">		<!-- колонка справа -->
				<div id="news">
					<h2 class="heading">Контакты</h2>
					<br>
					<br>
					<br>
					<style>
						.block2 {
							background-color: #fafafa;
							width: 50%;
							padding: 3%;
							border: 1px solid silver;
							font-size: 1.1em;
							color: #3e3e3e;
							float: left;
							font-family: 'Montserrat', sans-serif;
						}
					</style>
					<div class="block2">
						<strong>АДРЕС:</strong><br>
						г. Вологда, ул. Мальцева, д. 5, оф. 88<br>
						Время работы: 9:00 - 18:00<br><br>
						<strong>ТЕЛЕФОН:</strong>
						в Москве: +7 (499) 321 45 65<br>
						в Вологде: +7 (8172) 789 987<br><br>
						<strong>ЗВОНОК ЗА НАШ СЧЕТ:</strong>
						8 (800) 3 000 123<br><br>
						<strong>E-MAIL:</strong>
						info@mail.ru<br><br>
						<br><br>						
						<a href="rec.php" title="Реквизиты">РЕКВИЗИТЫ</a>
					</div>
				</div>
			</div>
			<!--<aside>		<!-- колонка слева
				
			</aside>-->
			
		</div>
		<footer>
			<div id="site_name">
				<span>Закажи ролик - будь молодцом!</span>
				</div>
				<div id="clear"></div> <!-- чтобы отделить строки -->
				<div id="footer_menu">
					<a href="ad.php" title="Узнать детальнее про заказ">О заказе</a>
					<a href="graph.php" title="Просмотреть график передач">График</a>
				</div>
				<div id="rights">
					<a href="">Все права защищены &copy; <?=date ('Y')?></a>
				</div>
		</footer>
	</div>
</body>
</html>