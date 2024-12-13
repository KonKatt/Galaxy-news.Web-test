

<!DOCTYPE html>

<html lang="eng">
<head>
	<link rel="stylesheet" type="text/css" href= "../styles.css"> 
</head>

<body>

	<?php include "header.php" ?> 

<div class="content">

		<div class="banner-container" style="
		background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('/sources/imgs/<?php echo $banner->image;?>');
	color: var(--white-color);
	width: 100%;
	height: 646px;
	background-size: cover; 
	background-position: center; 
	margin-bottom: 54px;

		"
		>
				<div class="banner-container__text">
					<div  class="wrapper">
						<h1><a href="http://galaxy-news/details/<?php echo $banner->id; ?>">
							
							<?php echo $banner->title ?>
			
							</a></h1>
						<p> 
							<?php echo $banner->announce ?> 
						</p>
					</div>
				</div> 
		</div>

	
		<div class="wrapper"> 
			<h1 class="container-newslabel">Новости</h1> 
		</div>

		<div class="wrapper"> 

			<div class="news-grid">

			<?php $news_array=$data ?>
			<?php foreach ($news_array as $news_item) { ?> 	
					<a href="http://galaxy-news/details/<?php echo $news_item->id; ?>" div class="news-grid__item">
						
						<p class="date"><?php echo $news_item->date;  ?></p>
								
								<h2><?php echo $news_item->title; ?> </h2>
								
								<?php echo $news_item->announce; ?>
					
								<div class="button"><p>Подробнее</p> 
											<div class="arrow">  <div> </div>  </div>
								</div>
						</a>

			<?php } ?>


					

 

			</div>

		</div>


<div class="wrapper"> 

	<div class="navigation"> 

		<?php for ($i = 1; $i <= $max_page; $i++) { ?> 
		
		<?php if ($cur_page != $i) echo '<a href="http://galaxy-news/home/' . $i . '">' ;?>
			
		<div class="nav-button <?php if ($i==$cur_page) echo 'nav-button--active' ?>">
			<div class="nav-number">
			<?php echo  $i ?>
		</div>
		</div>
		<?php if ($cur_page != $i) echo '</a>'; ?>
	

		<?php } ?>

		<?php if($cur_page!=$max_page)  { ?>
		
		<a href="http://galaxy-news/home/<?php echo $cur_page+1; ?>"
			<div class="nav-button--arrow"><div class="nav-button">
			<div class="arrow--small"><div class="arrow">
												<div></div>
													</div></div></div></a>
			<?php } ?>

		</div>
	</div>
</div>



	<?php include "footer.php" ?> 

	<script src="script.js"></script> 
</body>
</html>