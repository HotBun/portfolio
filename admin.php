<?php
require "includes/config.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $config['title'];  ?></title>
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/admin.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/anim_style.css" />
	<link rel="stylesheet" type="text/css" href="css/adapt.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>
	<header>
		<div class="admin__panel col-md-12">
			<aside class="left__sidebar col-md-4">
				<div class="profile__info">
					<div class="profile__info__image"></div>
					<h3>Vasiliy Oleinik</h3>
					<h4>Admin</h4>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="glyphicon glyphicon-chevron-down"></span>
						</button>
					</div>
				</div>
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav  left__sidebar__link">
								<li><a href=""><span class="glyphicon glyphicon-tasks"></span>Информационная панель</a></li>	
								<li><a href=""><span class="glyphicon glyphicon-bookmark"></span>Страницы</a></li>	
								<li><a href=""><span class="glyphicon glyphicon-user"></span>Пользователь</a></li>	
								<li><a href=""><span class="glyphicon glyphicon-cog"></span>Настройки</a></li>	
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</aside><!--left__sidebar-->
			<div class="info__admin__panel col-md-9">
				<div class="header__info">
					<h3>Hello, <span>Vasiliy Oleinik</span></h3>
					<h4>Сейчас: 15:07 [09/03/2017]</h4>
				</div><!--header__info-->
				<div class="total__comments col-md-6">
					<div class="col-md-6 comment__image"><span class="glyphicon glyphicon-comment"></span></div>
					<div class="col-md-10 comment__title">
						<p>238</p>
						<h3>Комментариев</h3>
					</div><!--title-->
				</div><!--total__comments-->
				<div class="total__views col-md-6">
					<div class="col-md-6 views__image"><span class="glyphicon glyphicon-eye-open"></span></div>
					<div class="col-md-10 views__title">
						<p>238</p>
						<h3>Просмотров</h3>
					</div><!--title-->
				</div><!--total__comments-->

				<div class="table__comments col-md-10">
				<table class="table table-hover">
					<p> Последние комментарии</p>
						<tr class="bold">
							<td>ID</td>
							<td>Email</td>
							<td>Nickname</td>
							<td>Text</td>
							<td>Pubdate</td>
							<td>Articles ID</td>
							<td>Name</td>
						</tr>
						<tr>
							<td>1</td>
							<td>goooneoooogle@gmail.com</td>
							<td>Bun</td>
							<td>Hello, world!</td>
							<td>14:04 10.03.2017</td>
							<td>9</td>
							<td>Vasiliy</td>
						</tr>
						<tr>
							<td>2</td>
							<td>rogger@mail.ru</td>
							<td>Heppy Rogger</td>
							<td>Lorem ipsum dolor sit amet, consectetur </td>
							<td>14:30 10.03.2017</td>
							<td>9</td>
							<td>Rogger</td>
						</tr>
					</table>

					<table class="table table-hover">
					<p> Последние записи</p>
						<tr class="bold">
							<td>ID</td>
							<td>Title</td>
							<td>Images</td>
							<td>Text</td>
							<td>Categories ID</td>
							<td>Pubdate</td>
							<td>Views</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Гонщик</td>
							<td>Raser</td>
							<td>Гонщик в фотошопе</td>
							<td>5</td>
							<td>14:30 10.03.2017</td>
							<td>3</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Батарейка</td>
							<td>Battery</td>
							<td>Векторная батарейка</td>
							<td>4</td>
							<td>14:30 10.03.2017</td>
							<td>36</td>
						</tr>
					</table>
				</div>
			</div><!--info__admin__panel-->
		</div><!--admin__panel-->
	</header>
	<script src="js/modernizr.custom.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
	<!--Скрипт для навбар тугл
<script>
    $(document).ready(function () {
        $('.navbar-toggle').click(function (e) {
            $(this).toggleClass('active');
            $('.left__sidebar__link').toggle();   
            e.stopPropagation();
        });
        $('body').click(function () {
            var link = $('.navbar-toggle');
            if (link.hasClass('active')) {
                link.click();
            }
        });
    });
</script>
-->
</body>
</html>