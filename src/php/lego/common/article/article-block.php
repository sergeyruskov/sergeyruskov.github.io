<div class="article-block col__1">

	<a href="#">

		<div class="article-block__wrapper-photo-and-header">

			<div class="article-block__video-icon">

				<img src="<?= PATH__IMG, $params["img"]; ?>" alt="" class="img-responsive">
				<?
				if ($params["video"]) {
					echo '
					<div class="article-block__video-icon-wrapper">
						<div class="article-block__video-icon-wrapper-outline"></div>
						<div class="article-block__video-icon-wrapper-icon">►</div>
					</div>
					';
				}
				?>

			</div>

			<h3 class="article-block__title"><?= $params["title"]; ?></h3>

		</div>

		<p class="article-block__text"><?= $params["text"]; ?></p>

	</a>

	<? if ($params["author"]): ?>
		<div class="article-block__wrapper-article-author">
			<? req_with_param(PATH__COMMON . "/article/article-author-block.php"); ?>
		</div>
	<?endif?>

</div>