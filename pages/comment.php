<?php
require "../includes/config.php";
?>
<html lang="ru">
<?php require "../includes/head.php";?>
<link rel="stylesheet" type="text/css" href="../fansy/jquery.fancybox.css" media="screen" />
<body>
	<?php require "../includes/header.php";?>
	<main>
		<div class="container">
			<div class="row">
				<div class="block__margin">
					<div class="articles__theme">
						<div class="col-md-4 main__block_top">
							<div class="first__grey__strip"></div>
							<div class="white__strip"></div>
							<div class="second__grey__strip"></div>
							<div class="white__strip"></div>
							<div class="second__grey__strip"></div>
						</div><!--col-md-4 main__block_top-->
						<div class="col-md-4 main__block_text">
							<p>Comments</p>
						</div><!--col-md-2 main__block_text-->
						<div class="col-md-4 main__block_top">
							<div class="first__grey__strip"></div>
							<div class="white__strip"></div>
							<div class="second__grey__strip"></div>
							<div class="white__strip"></div>
							<div class="second__grey__strip"></div>
						</div><!--col-md-4 main__block_top-->
					</div><!--articles__theme-->
				</div><!--block__margin-->
			</div><!--row-->
		</div><!--container-->
		<div class="container">
			<div class="row">
				<div class="block__margin">
					<?php
					$article = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id` = 9");
					$art = mysqli_fetch_assoc($article);
					?>
					<div class="comment__block col-md-12">
						<!--Вывод комментариев-->
						<?php
						$comments = mysqli_query($connection, "SELECT * FROM `comments` WHERE `articles_id` = ". (int) $art['id'] . " ORDER BY `id` DESC" );
						if ( mysqli_num_rows($comments) <= 0 ){
							echo "Нет комментариев!<br/";
						}
						while( $comment = mysqli_fetch_assoc($comments)){
							?>
							<div class="comment col-md-12">
								<div class="comment__image col-md-2" style="background-repeat:no-repeat; background-image: url(https://gravatar.com/avatar/<?php echo md5($comment['email']); ?>?s=80);"></div>
								<div class="comment__info col-md-8">
									<h5>Написал: <a href="comment.php?id=<?php echo $comment['articles_id']; ?>"><?php echo $comment['name'] ?> <span>[ <?php echo $comment['nickname'] ?> ]</span> </a></h5>
									<h6><?php echo $comment['pubdate'] ?></h6>
									<p><?php echo $comment['text'] ; ?></p>
								</div><!--comment__info-->
							</div><!--comment-->
							<?php
						}
						?>
					</div><!--comment__block-->
					<!--Добавление комментариев-->
					<div class="input__comments col-md-12">
						<div id="comment-add-form" class="col-md-12">
							<h3>Добавить комментарий</h3>
							<form class="form-horizontal" role="form" method="POST" action="/comment.php?id=<?php echo $art['id']; ?> #comment-add-form" >
								<?php   
								if( isset($_POST['do_post']) ){
									$errors = array();
									if( $_POST['name'] == ''){
										$errors[] = 'Вы не ввели имя!';
									}
									if( $_POST['nickname'] == ''){
										$errors[] = 'Вы не ввели никнейм!';
									}
									if( $_POST['email'] == ''){
										$errors[] = 'Вы забыли указать e-mail!';
									}
									if( $_POST['text'] == ''){
										$errors[] = 'А как же текст?';
									}
									if (empty($errors)){
                  //добавить комментарий
										mysqli_query($connection, "INSERT INTO `comments` (`email`, `nickname`, `text`, `pubdate`,`articles_id`,`name`) VALUES (mysql_real_escape_string('".$_POST['email']."'), mysql_real_escape_string('".$_POST['nickname']."'),mysql_real_escape_string('".$_POST['text']."'), NOW(),mysql_real_escape_string('".$art['id']."'),mysql_real_escape_string('".$_POST['name']."'))");
										echo '<span style="color:green; font-weight:700; margin-bottom:10px;">'. "Комментарий успешно добавлен" . '<hr/'. '</span>';
									} else{
                  //вывести ошибку
										echo '<span style="color:red; font-weight:700; margin-bottom:10px;">'. $errors['0'] . '<hr/'. '</span>';
									}
								}
								;?>
							</div><!--id="comment-add-form"-->
							<!--Форма добавления комментариев-->
							<div class="form__group">
								<div class="row">
									<div class="col-md-4">
										<input type="text" name="name" class="form__control" placeholder="Имя * " value="<?php echo $_POST['name'];?>">
									</div><!--col-md-4-->
									<div class="col-md-4">
										<input type="text" name="nickname" class="form__control" placeholder="Никнейм *" value="<?php echo $_POST['nickname'];?>">
									</div><!--col-md-4-->
									<div class="col-md-4">
										<input type="text" name="email" class="form__control" placeholder="Email *  (не будет показан)" value="<?php echo $_POST['email'];?>">
									</div><!--col-md-4-->
								</div><!--row-->
							</div><!--form__group-->
							<div class="form__group">
								<textarea class="form-control" rows="3" name="text" placeholder="Текст комментария... *" ><?php echo $_POST['text'];?></textarea>
							</div><!--form__group-->
							<div class="form__group">
								<input type="submit" name="do_post" value="Добавить комментарий" class="form__control button__output">
							</div><!--form__group-->
						</form>
						<?php
						?>
					</div><!--input comments-->
				</div><!--block__margin-->
			</div><!--row-->
		</div><!--container-->
	</main>
	<?php include "../includes/footer.php"; ?>
</body>
</html>