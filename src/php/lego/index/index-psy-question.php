<div class="index-psy-question col__1 h430">

	<a href="#" class="index-psy-question__top-wrapper link link--black">

		<div class="index-psy-question__rubric">
			Вопрос психологу
		</div>

		<h3 class="index-psy-question__title">
			<?= $params["title"]; ?>
		</h3>

		<div class="index-psy-question__question-author">
			<?= $params["question-author"]; ?>
		</div>

	</a>

	<a href="#" class="index-psy-question__bottom-wrapper link link--black">

		<div class="index-psy-question__answer-author">На вопрос отвечает</div>

		<? req_with_param(PATH__PHP_LEGO . "/index/index-red-photo.php",
				["path-img" => PATH__IMG . "/index/photo-psychologist.png"]); ?>

		<h3 class="index-psy-question__question-answer">
			<?= $params["question-answer"]; ?>
		</h3>

		<div class="index-psy-question__author-specialization">
			<?= $params["author-specialization"]; ?>
		</div>

	</a>

</div>