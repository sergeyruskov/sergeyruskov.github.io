<div class="index-quote col__1">

	<div class="index-quote__wrapper-share">

		<div class="index-quote__wrapper-share-icons icon-share">
			<a href="#" class="index-quote__share-icons color__twitter index-quote__share-icons--twitter icon-twitter"></a>
			<a href="#" class="index-quote__share-icons color__fb index-quote__share-icons--fb icon-facebook"></a>
			<a href="#" class="index-quote__share-icons color__vk index-quote__share-icons--vk icon-vk"></a>
		</div>

	</div>


	<h2 class="index-quote__quote"><?= $params["quote"];?></h2>

	<div class="index-quote__wrapper-author">
		<? req_with_param(PATH__PHP_LEGO . "/index/index-red-photo.php",
			["path-img" => PATH__IMG . "/index/photo-psychologist.png"]); ?>
		<h3 class="index-quote__name"><?= $params["name"];?></h3>
		<div class="index-quote__author-specialization"><?= $params["specialization"]; ?></div>
	</div>

</div>