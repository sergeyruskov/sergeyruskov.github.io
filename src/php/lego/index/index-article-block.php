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

	<? if ($params["author"]): ?>
		<div class="index-article-block__wrapper-article-author">
			<? req_with_param(PATH__PHP_INDEX . "index-article-author.php"); ?>
		</div>
	<?endif?>

</div>