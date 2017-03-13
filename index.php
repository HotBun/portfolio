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
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/anim_style.css" />
	<link rel="stylesheet" type="text/css" href="css/adapt.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-4 header__block right">
					<div class="header__block__fraction border">
					</div>
					<div class="header__block__fraction">
						<ul class="nav nav-tabs nav-justified">
							<li id="portfolio" class=""><a href="#port"><span class="glyphicon glyphicon-th">&#160;</span>&#160;<span class="first_letter">P</span>ortfolio</a></li>
							<li id="resume" class=""><a href="/pages/resume.php"><span class="glyphicon glyphicon-list-alt">&#160;</span>&#160;<span class="first_letter">R</span>esume</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 header__block center">
					<ul class="ch-grid">
						<li>
							<div class="ch-item ch-img-1">				
								<div class="ch-info-wrap">
									<div class="ch-info">
										<div class="ch-info-front ch-img-1"></div>
										<div class="ch-info-back">
										</div>	
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-md-4 header__block left">
					<div class="header__block__fraction border">		
					</div>
					<div class="header__block__fraction">
						<ul class="nav nav-tabs nav-justified">
							<li class=""><a href="#about"><span class="glyphicon glyphicon-user">&#160;</span>&#160;<span class="first_letter">A</span>bout me</a></li>
							<li class=""><a href="#cont"><span class="glyphicon glyphicon-info-sign">&#160;</span>&#160;<span class="first_letter">C</span>ontacts</a></li>
						</ul>
					</div>
				</div>
			</div><!--row-->
		</div><!--container-->
	</header>
	<main>
		<div class="container">
			<div class="row">
				<div class="block__margin">
					<div class="col-md-4 main__block_top">
						<div class="first__grey__strip"></div>
						<div class="white__strip"></div>
						<div class="second__grey__strip"></div>
						<div class="white__strip"></div>
						<div class="second__grey__strip"></div>
					</div>
					<div class="col-md-2 main__block_text">
						<p>Hello!</p>
					</div>
					<div class="col-md-4 main__block_top">
						<div class="first__grey__strip"></div>
						<div class="white__strip"></div>
						<div class="second__grey__strip"></div>
						<div class="white__strip"></div>
						<div class="second__grey__strip"></div>
					</div>
				</div>
				<div class="col-md-12 main__about__me" >
					<h3>Привет, меня зовут <span class="color__name">Василий Олейник</span>!</h3>
					<h1>Я WEB - дизайнер / Front-end разработчик / Начинающий Back-end разработчик</h1>
					<h3 class="quote">"Ты не можешь ни выиграть, ни проиграть, до тех пор, пока ты не попробуешь"</h3>
				</div>
			</div><!--row-->
		</div><!--container-->
		<div class="container">
			<div class="row">
				<div class="block__margin">
					<div class="main__portfolio">
						<span class="glyphicon glyphicon-th glyphicon__position"></span>
						<div class="line"></div>
						<span class="end__line" id="port" >Portfolio</span>
						<div class="col-md-6 main__portfolio">
							<ul class="grid cs-style-4">
								<li>
									<figure>
										<div><img src="img/ps.png" alt="Photoshop"></div>
										<figcaption class="ps">
											<h3>Adobe Photoshop</h3>
											<span>Level: 6.5/10</span>
											<ul class="what__I__can">
												<li>Что я знаю и чем <br>пользуюсь:</li>
												<li>- Рисовать пером</li>
												<li>- Фотокоррекция</li>
											</ul>
											<a href="/pages/photoshop.php">Смотреть работы</a>
										</figcaption>
									</figure>
								</li>
							</ul>
						</div>
						<div class="col-md-6 main__portfolio">
							<ul class="grid cs-style-4">
								<li>
									<figure>
										<div><img src="img/ai.png" alt="Illustrator" ></div>
										<figcaption  class="ai">
											<h3>Adobe Illustrator</h3>
											<span>Level: 7.5/10</span>
											<ul class="what__I__can">
												<li>Что я знаю и чем <br>пользуюсь:</li>
												<li>Создание - </li>
												<li>- Логотипов</li>
												<li>- 3d объектов</li>
												<li>- Векторных<br> изображений</li>
											</ul>
												<a href="/pages/illustrator.php">Смотреть работы</a>
										</figcaption>
									</figure>
								</li>
							</ul>
						</div>
						<div class="col-md-6 main__portfolio">
							<ul class="grid cs-style-4">
								<li>
									<figure>
										<div><img src="img/3d_max.png" alt="3d Max"></div>
										<figcaption class="max">
											<h3>Autodesk 3ds Max</h3>
											<span>Level: 4.5/10</span>
											<ul class="what__I__can">
												<li>Что я знаю и чем <br>пользуюсь:</li>
												<li>- Анимации</li>
												<li>- Свет</li>
												<li>- Камеры</li>
												<li>- Материалы</li>
												<li>- Полигональное<br>моделирование</li>
											</ul>
												<a href="/pages/max.php">Смотреть работы</a>
										</figcaption>
									</figure>
								</li>
							</ul>
						</div>
						<div class="col-md-6 main__portfolio">
							<ul class="grid cs-style-4">
								<li>
									<figure>
										<div><img src="img/ph.png" alt="Photo"></div>
										<figcaption class="ph">
											<h3>Photo</h3>
											<span>Level: 7/10</span>
											<ul class="what__I__can">
												<li>Что я знаю и чем <br>пользуюсь:</li>
												<li>- Потреты</li>
												<li>- Натюрморты</li>
												<li>- Пейзажи</li>
												<li>- Постановка света</li>
												<li>- Студийная съемка</li>
												<li>- Лайтбокс</li>
											</ul>
												<a href="/pages/photo.php">Смотреть работы</a>
										</figcaption>
									</figure>
								</li>
							</ul>
						</div>
						<div class="col-md-6 main__portfolio">
							<ul class="grid cs-style-4">
								<li>
									<figure>
										<div><img src="img/html.png" alt="Html / Css"></div>
										<figcaption class="html">
											<h3>HTML<span class="html_5">5</span> & CSS<span class="css_3">3</span></h3>
											<span>Level: 8/10</span>
											<ul class="what__I__can">
												<li>Что я знаю и чем <br>пользуюсь:</li>
												<li>- Adaptive Web Design</li>
												<li>- Less</li>
												<li>- HTML 5</li>
												<li>- CSS 3</li>
												<li>- Bootstrap 3</li>
												<li>- Gulp</li>
												<li>- Git</li>
												<li>- W3C</li>
												<li>- ModX</li>
												<li>- UX/UI</li>
											</ul>
												<a href="/pages/html.php">Смотреть работы</a>
										</figcaption>
									</figure>
								</li>
							</ul>
						</div>
						<div class="col-md-6 main__portfolio">
							<ul class="grid cs-style-4">
								<li>
									<figure>
										<div><img src="img/php.png" alt="PHP"></div>
										<figcaption class="php">
											<h3>&#60;?PHP ?&#62;</h3>
											<span>Level: 3/10</span>
											<ul class="what__I__can">
												<li>Что я знаю и чем <br>пользуюсь:</li>
												<li>- SQL-запросы</li>
												<li>- MyAdmin</li>
											</ul>
												<a href="/pages/php.php">Смотреть работы</a>
										</figcaption>
									</figure>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div><!--row-->
		</div><!--container-->
		<div class="container">
			<div class="row">
				<div class="block__margin">
					<span class="glyphicon glyphicon-user glyphicon__position"></span>
					<div class="line"></div>
					<span class="end__line" id="about" >About me</span>
					<div class="col-md-6 col-xs-12 main__about">
						<h3>Кто я</h3>
						<p>Я уверен ,вы просто хотите посмотреть мои работы так что буду краток. После школы я поступил в компьютерную академию и открытый международный университет развития человека. В академии я изучал множество различных интересных предметов. Но однажды у нас началась верстка сайтов на языке HTML5, меня это заинетесовало больше всего и теперь я занимаюсь этим. В настоящее время я живу в Мариуполе и пока не работаю, поскольку все еще учусь в 2 учебных заведениях. Чем я буду заниматься в будущем, кто знает? Но я уверен, что WEB я не брошу и буду создавать новые проекты. Возможно и для тебя.</p>
					</div>
					<div class="col-md-6 col-xs-12 main__about">
						<h3>Чем я занимаюсь</h3>
						<p>Я строю web-сайты. Я специализируюсь на Front-end разработке (HTML5, CSS3), но сейчас начинаю изучать и работать с Back-end (PHP, SQL, MyAdmin). Если вы хотите со мной работать или просто поздороваться и спросить как дела, просто так, то пишите мне в комментарии<a href="/pages/comment.php" target="bland"> сюда</a> либо <a href="#cont">сюда</a> </p>
					</div>
				</div>
			</div><!--row-->
		</div><!--container-->
	</main>
	<footer>
		<div class="container">
			<div class="row">
				<div class="block__margin">
					<span class="glyphicon glyphicon-info-sign glyphicon__position" ></span>
					<div class="line"></div>
					<span class="end__line" id="cont" >Contacts</span>
					<div class="col-md-12 contacts contacts__shadow">
						<h3>Связаться со мной</h3>
						<div class="contacts__link">
							<div class="contacts__link__social">
								<a href="<?php echo $config['vk_url']; ?>" target="bland">
									<div class="col-md-4 col-xs-12 social__block vk">		
										<div class="vk__background"><h5>Vk</h5>
										</div></div></a>
										<a href="<?php echo $config['gp_url']; ?>" target="bland">
											<div class="col-md-4 col-xs-12 social__block gp">
												<div class="gp__background"><h5>G+</h5>
												</div></div></a>
												<a href="<?php echo $config['in_url']; ?>" target="bland">
													<div class="col-md-4 col-xs-12 social__block in">
														<div class="in__background"><h5>In</h5>
														</div></div></a>
													</div>
												</div>
												<div class="contacts__link__telephone">
													<p class="telephone"><img src="img/mts.png" alt="MTS"><span class="operator__name">МТС</span>+38 (099) 228-32-52</p>
													<p class="telephone"><img src="img/ks.png" alt="Kievstar"><span class="operator__name">Киевстар</span>+38 (098) 278-40-30</p>
													<p class="telephone"><img src="img/life.png" alt="Life"><span class="operator__name">Life</span>+38 (063) 945-46-16</p>
													<p class="telephone"><img src="img/skype.png" alt="Skype"><span class="operator__name">Skype</span>vasilii0leinik</p>
													<p class="telephone"><img src="img/mail.png" alt="mail"><span class="operator__name">Gmail</span>goooneoooogle@gmail.com</p>
												</div>
											</div><!--contacts-->
										</div><!--block__margin-->					
									</div><!--row-->
								</div><!--container-->
								<div class="footer__background">
								</div>
							</footer>
							<script src="js/modernizr.custom.js"></script>
							<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
							<script type="text/javascript" src="js/bootstrap.js"></script>
							<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
						</body>
						</html>