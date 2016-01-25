<a href="#" class="link link--black index-slide h430--exclude-phone <?= $params["modification"]; ?>">

	<img src="<?= PATH__IMG; echo $params["img"];?>" alt="" class="img-responsive">

	<div class="index-slide__content-wrapper">
		<div class="index-slide__content">
			<div class="index-slide__bottom-text">

				<div class="index-slide__wrapper-btn">
					<? req_with_param(PATH__PHP_COMMON . "/btn.php", ["text" => $params["btn-text"], "class" =>
							"btn--brand"]); ?>
				</div>

				<h3 class="index-slide__title <?= $params["text_uppercase"] ? "text-uppercase" : ""; ?>">
					<?= $params["title"]; ?>
				</h3>

				<?
				if ($params["text"]) {
					echo <<<A
						<p class="index-slide__text">{$params["text"]}</p>
A;
				}
				?>

			</div>
		</div>
	</div>

</a>