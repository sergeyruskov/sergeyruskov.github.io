<div class="test-description col__3--desktop col__2--laptop <?= $params["modification"]; ?>">



	<? if(isset($params["show-number"])): ?>
		<div class="test-description__number-and-counter">
			<span class="test-description__cover-number">Psychologies №114</span>Тест пройден 79891 раз
		</div>
	<? endif; ?>

	<h1 class="h__1 test-description__title"><?= $params["title"]; ?></h1>

	<? if(isset($params["test-img"])): ?>
		<img src="<?= PATH__IMG . "/test/test-description.jpg" ?>" alt="" class="test-description__img" width="181" height="181">
	<? endif; ?>

	<? if(isset($params["subtitle"])): ?>
			<div class="mt20 text-lead"><?= $params["subtitle"]; ?></div>
	<? endif; ?>

	<? if(isset($params["show-result"])): ?>
		<div class="test-description__you-result">Ваш результат</div>
		<h4 class="test-description__response-test" id="test-result__result">У вас харизма лидера</h4>
	<? endif;?>

	<? if(isset($params["text"])): ?>
		<div class="test-description__text"><?= $params["text"]; ?></div>
	<? endif;?>

	<? if(isset($params["author-without-photo"])): ?>
		<div class="test-description__author">Автор: светлана кирьенина</div>
	<? endif;?>

	<? if(isset($params["author-with-photo"])): ?>
			<div class="test-description__author-with-photo">
				<? req_with_param(PATH__COMMON . "/article/article-author-block.php"); ?>
			</div>
	<? endif;?>

	<? if(isset($params["show-bottom-btn"])): ?>

		<div class="test-description__bottom-btn hide--tablet hide--phone">

			<div class="pull-left">
				<? req_with_param(PATH__COMMON . "/btn.php", ["text" => "Пройти еще раз", "class" => "btn--additional-brand"]); ?>
			</div>

			<a href="#" class="test-description__next-test pull-right">Следующий тест</a>

		</div>

	<? endif;?>

</div>