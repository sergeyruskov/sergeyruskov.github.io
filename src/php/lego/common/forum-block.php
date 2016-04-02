<div class="forum-block col__1 <?= $params["modification"]; ?>">

	<? req_with_param(PATH__COMMON . "/title-with-line.php", [
		"text" => "Форум",
		"modification" => "title-with-line--forum-block",
		"modification1" => "title-with-line__wrapper--forum-block",
		"modification2" => "title-with-line__content--forum-block"
	]); ?>

	<div class="forum-block__wrapper-themes">
		<a href="#" class="forum-block__wrapper-theme">
			<div class="forum-block__comments-icon">512</div>
			<div class="forum-block__theme-title">Если жена зарабатывает намного больше мужа?</div>
		</a>

		<a href="#" class="forum-block__wrapper-theme">
			<div class="forum-block__comments-icon">79</div>
			<div class="forum-block__theme-title">"Миллионная попытка" или "видимость семьи"</div>
		</a>

		<a href="#" class="forum-block__wrapper-theme hide--tablet">
			<div class="forum-block__comments-icon">18</div>
			<div class="forum-block__theme-title">Турбо суслик - техника влияния на подсознание</div>
		</a>
	</div>

	<div class="forum-block__wrapper-discussions">
		<a href="#1" class="link link--brand forum-block__discussions">Все обсуждения</a>
	</div>

</div>