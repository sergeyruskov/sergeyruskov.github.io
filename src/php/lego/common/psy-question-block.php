<div class="psy-question-block col__1 h430">

	<a href="#" class="psy-question-block__top-wrapper">

		<div class="psy-question-block__rubric">
			Вопрос психологу
		</div>

		<h3 class="psy-question-block__title">
			<?= $params["title"]; ?>
		</h3>

		<div class="psy-question-block__question-author">
			<?= $params["question-author"]; ?>
		</div>

	</a>

	<a href="#" class="psy-question-block__bottom-wrapper">

		<div class="psy-question-block__answer-author">На вопрос отвечает</div>

		<div class="psy-question-block__wrapper-index-red-photo">
			<? req_with_param(PATH__COMMON . "/red-photo.php",
					["path-img" => PATH__IMG . "/index/photo-psychologist.png", "size" => "60px"]); ?>
		</div>

		<h3 class="psy-question-block__question-answer">
			<?= $params["question-answer"]; ?>
		</h3>

		<div class="psy-question-block__author-specialization">
			<?= $params["author-specialization"]; ?>
		</div>

	</a>

</div>