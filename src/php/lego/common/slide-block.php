<a href="#" class="slide-block h430--exclude-phone <?= $params["modification"]; ?>">

	<img src="<?= PATH__IMG; echo $params["img"];?>" alt="" class="img-responsive">

	<div class="slide-block__content-wrapper">
		<div class="slide-block__content">
			<div class="slide-block__bottom-text">

				<div class="slide-block__wrapper-btn">
					<? req_with_param(
							PATH__COMMON . "/btn.php", [
							"text" => $params["btn-text"],
							"class" => "btn--brand"
					]); ?>
				</div>

				<h3 class="slide-block__title <?= $params["text_uppercase"] ? "text-uppercase" : ""; ?>">
					<?= $params["title"]; ?>
				</h3>

				<?
				if ($params["text"]) {
					echo <<<A
						<p class="slide-block__text">{$params["text"]}</p>
A;
				}
				?>

			</div>
		</div>
	</div>

</a>