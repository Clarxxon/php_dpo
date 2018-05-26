<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>���� ��������</title>
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
					<a href="index.php" title="�� �������">
						<img src="img/3.ico" title="�������� �����" alt="��������">
						<span>����� ������</span>
					</a>
				</div>
				<div id="about">
					<a href="ad.php" title="������ ��������� � ������">�����</a>
					<a href="graph.php" title="����������� ������ �������">������ �������</a>
				</div>
				<div id="entry">
					<a href="authorization.php" title="����� � ������� ������������">
						<div id="btn">
							�����
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
					<a href="reg.php" title="������������������ �� �����">
						<div id="btn">
							�����������
						</div>
					</a>
				</div>
			</header>
			<nav>
				<a href="telecast.php">������ �������</a>
				<a href="price.php">�����-����</a>
				<a href="about.php">� ��������</a>
				<a href="contacts.php">��������</a>
			</nav>
			
			<div id="main">		<!-- ������� ������ -->
				<div id="news">
					<h2 class="heading">��������</h2>
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
						<strong>�����:</strong><br>
						�. �������, ��. ��������, �. 5, ��. 88<br>
						����� ������: 9:00 - 18:00<br><br>
						<strong>�������:</strong>
						� ������: +7 (499) 321 45 65<br>
						� �������: +7 (8172) 789 987<br><br>
						<strong>������ �� ��� ����:</strong>
						8 (800) 3 000 123<br><br>
						<strong>E-MAIL:</strong>
						info@mail.ru<br><br>
						<br><br>						
						<a href="rec.php" title="���������">���������</a>
					</div>
				</div>
			</div>
			<!--<aside>		<!-- ������� �����
				
			</aside>-->
			
		</div>
		<footer>
			<div id="site_name">
				<span>������ ����� - ���� ��������!</span>
				</div>
				<div id="clear"></div> <!-- ����� �������� ������ -->
				<div id="footer_menu">
					<a href="ad.php" title="������ ��������� ��� �����">� ������</a>
					<a href="graph.php" title="����������� ������ �������">������</a>
				</div>
				<div id="rights">
					<a href="">��� ����� �������� &copy; <?=date ('Y')?></a>
				</div>
		</footer>
	</div>
</body>
</html>