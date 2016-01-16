<div class="index-article-block col__1 h430--exclude-phone">

	<a href="#" class="link link--black">

		<div class="index-article-block__wrapper-photo-and-header">

			<div class="index-article-block__video-icon">

				<img src="<?= PATH__IMG; echo $params["img"]; ?>" alt="" class="img-responsive">
				<?
				if ($params["video"]) {
					echo '
					<div class="index-article-block__video-icon-wrapper">
						<div class="index-article-block__video-icon-wrapper-outline"></div>
						<div class="index-article-block__video-icon-wrapper-icon">►</div>
					</div>
					';
				}
				?>

			</div>

			<h3 class="index-article-block__title"><?= $params["title"]; ?></h3>

		</div>

		<p class="index-article-block__text"><?= $params["text"]; ?></p>

	</a>

	<?
	if ($params["author"]) {
		$string = <<<EOT
		<div class="index-article-block__wrapper-article-author">

			<a href="#1" class="article-author">

				<div class="article-author__author-content">

					<img src="%s/index/photo-author.jpg" alt="" class="article-author__author-img
					img-circle">

					<div class="article-author__author-name">Наталья Кириллина</div>
					<div class="article-author__author-specialization">Cоциальный психолог</div>

				</div>

			</a>

		</div>
EOT;
	}
	$string = sprintf($string, PATH__IMG);
	echo $string;
	?>



</div>