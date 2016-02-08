<div class="test-description col__3--desktop col__2--laptop">

	<div class="test-description__number-and-counter">
		<span class="test-description__cover-number">Psychologies №114</span>
		Тест пройден 79891 раз
	</div>

	<h1 class="h__1 test-description__title"><?= $params["title"]; ?></h1>

	<? if(isset($params["show-img"])): ?>
		<img src="<?= PATH__IMG . "/test/test-description.jpg" ?>" alt="" class="test-description__img" width="181" height="181">
	<? endif; ?>

	<? if(isset($params["test-result"])): ?>
		<div class="test-description__you-result">Ваш результат</div>
		<h4 class="test-description__response-test" id="test-result__result">У вас харизма лидера</h4>
	<? endif;?>
	<div class="<?= isset($params["test-result"]) ? "test-description__text--result text-main" : "test-description__text--test text-lead"; ?>"><?= $params["text"]; ?></div>

	<? if(isset($params["author-without-photo"])): ?>
		<div class="test-description__author">Автор: светлана кирьенина</div>
	<? endif;?>

	<? if(isset($params["author-with-photo"])): ?>
			<div class="test-description__author-with-photo">
				<? req_with_param(PATH__PHP_INDEX . "index-article-author.php"); ?>
			</div>
	<? endif;?>

	<? if(isset($params["show-bottom-btn"])): ?>

		<div class="pull-left hide--tablet hide--phone">
			<? req_with_param(PATH__PHP_COMMON . "/btn.php", ["text" => "Пройти еще раз", "class" => "btn--additional-brand"]); ?>
		</div>

		<a href="#" class="test-description__next-test pull-right hide--tablet hide--phone">Следующий тест</a>
	<? endif;?>

	<? if(isset($params["article-img"])): ?>

		<img src="<?= PATH__IMG . "/article/article.jpg" ?>" alt="" class="test-description__article-img">

	<? endif;?>

</div>