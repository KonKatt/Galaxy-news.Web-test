
<!DOCTYPE html>
<html lang="eng">
<head>
	<link rel="stylesheet" type="text/css" href= "../styles.css"> 
</head>

<body>

		<?php include "header.php" ?> 

<div class="content">
	<div class ="wrapper">
			<div class="links-nav">
				<a href="/index.php">Главная</a>
				<p class="slash">/</p>
				<p class="gray-color"><?php echo $news_item->title;?></p>
			</div>
	</div>

	<div class ="wrapper">
		<h1 class="news-title"><?php echo $news_item->title;?></h1>
		<div class="news-details">
			<div class="news-details__item">
				<p class="date"><?php echo $news_item->date;?></p>

					<h2><?php echo $news_item->announce;?></h2>

					<?php echo $news_item->content;?>

					<a href="http://galaxy-news/" class="button">
						<div class="arrow--left"><div class="arrow"><div>
						</div></div></div>
						<p>Назад</p>
					</a>  

			</div> 
			  


		<div class="news-details__container-img"><img class="news-details__img" src="/sources/imgs/<?php echo $news_item->image;?>" alt="news-details pic"></div>
	</div>


	</div>
</div>






<?php include "footer.php" ?>

	<script src="script.js"></script>
</body>

</html>