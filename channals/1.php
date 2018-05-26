<!DOCTYPE html>
<?
	$connection = new PDO('mysql:host=localhost;dbname=tvCompany;charset=utf8', 'root', '');
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Список передач</title>
	<link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="css/aside.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="css/form.css" type="text/css" charset="utf-8">
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
					<a href="" title="Войти в кабинет пользователя">
						<div id="btn">
							Войти
						</div>
						</a>
				</div>
				<div id ="reg">
					<a href="regg.php" title="Зарегистрироваться за сайте">
						<div id="btn">
							Регистрация
						</div>
					</a>
				</div>
			</header>
			<nav>
				<a href="telecast.php">Список передач</a>
				<a href="">Список роликов</a>
				<a href="">Прайс-лист</a>
				<a href="about.php">О компании</a>
				<a href="contacts.php">Контакты</a>
			</nav>
			
			<div id="main">		<!-- колонка справа -->
				<div id="news">
					<h2 class="heading">Список передач</h2>
					<br>
					<br>
					<br>
					<div class="block">
						<table border = 1>

						<tr>
						<th>Название передачи</th><th>Рейтинг передачи</th>
						</tr>
					
						<?php
						foreach($connection->query('SELECT telecast.name, telecast.rating FROM (channels INNER JOIN channels_telecast ON channels.pk_channels=channels_telecast.fk_channels) INNER JOIN telecast ON telecast.pk_telecast=channels_telecast.fk_telecast WHERE channels_telecast.fk_channels = 1;') as $row) {
							echo '<td>';
							echo $row['name'];
							echo '</td>';
	
							echo '<td>';
							echo $row['rating'];
							echo '</td>';
							
							echo '</tr>';	
						}
						?>
						</table> <br>
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