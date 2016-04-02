<div class="external-articles h430 col__1">

	<div class="external-articles__wrapper-title">
		<div class="external-articles__title">
			<div class="external-articles__title-content">
				<?= $params["title"];?>
			</div>
		</div>
	</div>

	<div class="external-articles__wrapper-articles">
		<a href="#" class="external-articles__acrticle">
			<img src="<?=PATH__IMG . $params["img1"];?>" alt="" class="external-articles__img" width="80" height="80">
			<span  class="external-articles__acrticle-text"><?= $params["text1"];?></span>
		</a>
		<a href="#" class="external-articles__acrticle">
			<img src="<?=PATH__IMG . $params["img2"];?>" alt="" class="external-articles__img" width="80" height="80">
			<span  class="external-articles__acrticle-text"><?= $params["text2"];?></span>
		</a>
		<a href="#" class="external-articles__acrticle">
			<img src="<?=PATH__IMG . $params["img3"];?>" alt="" class="external-articles__img" width="80" height="80">
			<span  class="external-articles__acrticle-text"><?= $params["text3"];?></span>
		</a>
		<a href="#" class="external-articles__acrticle">
			<img src="<?=PATH__IMG . $params["img4"];?>" alt="" class="external-articles__img" width="80" height="80">
			<span  class="external-articles__acrticle-text"><?= $params["text4"];?></span>
		</a>
	</div>

</div>