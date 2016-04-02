<div class="quote-block col__1">

	<div class="quote-block__wrapper-share">

		<div class="quote-block__wrapper-share-icons icon-share">
			<a href="#" class="quote-block__share-icons color__twitter quote-block__share-icons--twitter icon-twitter link"></a>
			<a href="#" class="quote-block__share-icons color__fb quote-block__share-icons--fb icon-facebook link"></a>
			<a href="#" class="quote-block__share-icons color__vk quote-block__share-icons--vk icon-vk link"></a>
		</div>

	</div>


	<h2 class="quote-block__quote"><?= $params["quote"];?></h2>

	<div class="quote-block__wrapper-author">
		<div class="quote-block__wrapper-index-red-photo">
			<? req_with_param(PATH__COMMON . "/red-photo.php",
					["path-img" => PATH__IMG . "/index/photo-psychologist.png", "size" => "60px"]); ?>
		</div>
		<h3 class="quote-block__name"><?= $params["name"];?></h3>
		<div class="quote-block__author-specialization"><?= $params["specialization"]; ?></div>
	</div>

</div>