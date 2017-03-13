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
            <p>HTML5/CSS3</p>
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
          $views = mysqli_query($connection, "SELECT * FROM `articles` WHERE `id` = 3");
          if ( mysqli_num_rows($views) <= 0 ){
           ?>
           <h3>Постов пока нет,  но скоро будут</h3>
           <?php
         } else{
          $view = mysqli_fetch_assoc($views);
          mysqli_query($connection, "UPDATE `articles` SET `views` = `views` + 1 WHERE `id` = " . (int) $view ['id']);
          ?> 
          <div class="block__how__views"><p class="how__views"><span class="how__views__num"><?php echo $view['views'] ;?></span> просмотров</p></div>
        </div>
      </div>

      <?php
                     //Пагинация и вывод записей
                      $per_page = 6;//количество записей на 1 страницу
                      $page = 1;
                      $offset = 0;
                      //переменная страницы
                      if( isset($_GET['page'])){
                      	$page = (int) $_GET['page'];
                      }
                      //Все записи в разделе
                      $total_count_q = mysqli_query($connection, "SELECT COUNT(`id`) AS `total_count` FROM `articles` WHERE `categories_id` = 3 ");
                      $total_count = mysqli_fetch_assoc($total_count_q);
                      $total_count = $total_count['total_count'];
                      //Все страницы
                      $total_pages = ceil($total_count / $per_page);
                      if( $page <= 1 || $page > $total_pages){
                      	$page = 1;
                      }
                      //Если страница не первая вернет первые 6 статей
                      if($page != 0){
                      	$offset = ($per_page * $page) - $per_page;
                      }
                      $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT $offset,$per_page");
                      $articles_exist = true;
                      if(mysqli_num_rows($articles) <= 0){
                      	echo "Нет статей !<br/>";
                      	$articles_exist = false;
                      }
                      while( $art = mysqli_fetch_assoc($articles)){
                      	?>
                      	<?php  
                      	$articles = mysqli_query($connection, "SELECT * FROM `articles` WHERE `categories_id` = 3 ORDER BY `id`  DESC LIMIT $offset,$per_page ");
                      	?>
                      	<?php 
                      	while($art = mysqli_fetch_assoc($articles) ){
                      		?>
                      		<div class= "col-md-4 col-sm-6 col-xs-12 articles">
                            <a class="gallery"  title="<?php echo $art['title']; ?>" href="../img/portfolio/<?php echo $art['images']; ?>.jpg">
                              <img src="../img/portfolio/<?php echo $art['images']; ?>_300_300.png">
                            </a>
                            <span class="articles__title"><span class="articles__title__name">Название: </span> <?php echo $art['title']; ?><br></span>
                            <span class="articles__section__photoshop"><span class="articles__title__name">Раздел: </span>Фотошоп</span>
                            <p class="section__text"><span class="articles__title__name">Описание: </span> <?php echo mb_substr($art['text'],0 , 50, 'utf-8') ?></p>
                          </div><!--col-md-4 articles-->
                          <?php
                        }
                      }
                        ?>
                        <?php
                      }
                      ?>
                      <div class="container">
                       <div class="row">
                        <div class="col-md-12">
                         <?php if ($total_pages > 1) { ?>
                         <ul class="pagination pagination-lg">
                          <?php for ($p = 1; $p <= $total_pages; $p++) { ?>
                          <li><a href="html.php?page=<?= $p ?>"><?= $p ?></a></li>
                          <?php } ?>
                        </ul>
                        <?php } ?>
                      </div><!--col-md-12-->
                    </div><!--row-->
                  </div><!--container-->
                </div><!--block__margin-->
              </div><!--row-->
            </div><!--container-->
          </main>
          <?php include "../includes/footer.php"; ?>
          <script type="text/javascript" src="../js/modernizr.custom.js"></script>
          <script type="text/javascript" src="../fansy/jquery-1.3.2.min.js"></script>
          <script type="text/javascript" src="../fansy/jquery.easing.1.3.js"></script>
          <script type="text/javascript" src="../fansy/jquery.fancybox-1.2.1.pack.js"></script>
          <script type="text/javascript">
            $(document).ready(function() {
              $("a.gallery, a.iframe").fancybox();
              url = $("a.modalbox").attr('href').replace("for_spider","content2");
              $("a.modalbox").attr("href", url);  
              $("a.modalbox").fancybox(
              {                 
                "frameWidth" : 400,  
                "frameHeight" : 400 
              });
              $("a.gallery").fancybox(
              {           
                "padding" : 20, // отступ контента от краев окна
                "imageScale" : false, // Принимает значение true - контент(изображения) масштабируется по размеру окна, или false - окно вытягивается по размеру контента. По умолчанию - TRUE
                "zoomOpacity" : false,  // изменение прозрачности контента во время анимации (по умолчанию false)
                "zoomSpeedIn" : 1000, // скорость анимации в мс при увеличении фото (по умолчанию 0)
                "zoomSpeedOut" : 1000,  // скорость анимации в мс при уменьшении фото (по умолчанию 0)
                "zoomSpeedChange" : 1000, // скорость анимации в мс при смене фото (по умолчанию 0)
                "frameWidth" : 700,  // ширина окна, px (425px - по умолчанию)
                "frameHeight" : 600, // высота окна, px(355px - по умолчанию)
                "overlayShow" : true, // если true затеняят страницу под всплывающим окном. (по умолчанию true). Цвет задается в jquery.fancybox.css - div#fancy_overlay 
                "overlayOpacity" : 0.8,  // Прозрачность затенения  (0.3 по умолчанию)
                "hideOnContentClick" :true, // Если TRUE  закрывает окно по клику по любой его точке (кроме элементов навигации). Поумолчанию TRUE   
                "centerOnScroll" : false // Если TRUE окно центрируется на экране, когда пользователь прокручивает страницу   
              });
              $("#menu a, .anim").hover( function() {
                $(this).animate({"paddingLeft" : "10px"}, 300)},
                function() {$(this).animate({"paddingLeft" : "0"}, 300);
              });
              $("a.iframe").fancybox(
              {                 
                "frameWidth" : 800,  // ширина окна, px (425px - по умолчанию)
                "frameHeight" : 600 // высота окна, px(355px - по умолчанию)
              });
            });
          </script>
        </body>
        </html>