<div class="test-quiz <?= $params["modification"] ?>">
	<? req_with_param(PATH__COMMON . "/slide-block.php", ["btn-text" => "Конкурс-викторина", "img" => "/index/slider-1.jpg", "title" => "Знак о Фрейде", "text" => "Вам скучно и хочется весело провести свободное время? <br> Ответьте на все вопросы и получите ценный приз.", "modification" => "slide-block--test-section col__2--desktop col__1--laptop col__2--tablet"]); ?>

	<form action="#" class="test-quiz__question h430">
		<fieldset>
			<legend class="test-quiz__legend branded-legend">Какова роль работы Фрейда и каково влияние его взглядов на развитие вашей аналитической психологии?
			</legend>
			<div class="test-quiz__possible-answer">
				<? req_with_param(PATH__COMMON . "/branded-input.php",
						[
								"circle-modification" => "branded-input__label--white-unmarked-radio",
								"name" => "branded-input__freid",
								"id-for-label" => "branded-input__1",
								"text" => "Заглушить свои сомнения и слабости"
						]);
				?>
			</div>

			<div class="test-quiz__possible-answer">
				<? req_with_param(PATH__COMMON . "/branded-input.php",
						[
								"circle-modification" => "branded-input__label--white-unmarked-radio",
								"name" => "branded-input__freid",
								"id-for-label" => "branded-input__2",
								"text" => "Продемонстрировать гибкость и эмпатию"
						]);
				?>
			</div>

			<div class="test-quiz__possible-answer">
				<? req_with_param(PATH__COMMON . "/branded-input.php",
						[
								"circle-modification" => "branded-input__label--white-unmarked-radio",
								"name" => "branded-input__freid",
								"id-for-label" => "branded-input__3",
								"text" => "Применить все свое обаяние"
						]);
				?>
			</div>

			<div class="test-quiz__possible-answer">
				<? req_with_param(PATH__COMMON . "/branded-input.php",
						[
								"circle-modification" => "branded-input__label--white-unmarked-radio",
								"name" => "branded-input__freid",
								"id-for-label" => "branded-input__4",
								"text" => "Нестандартно мыслить"
						]);
				?>
			</div>

			<div class="test-quiz__possible-answer">
				<? req_with_param(PATH__COMMON . "/branded-input.php",
						[
								"circle-modification" => "branded-input__label--white-unmarked-radio",
								"name" => "branded-input__freid",
								"id-for-label" => "branded-input__5",
								"text" => "Нестандартно мыслить"
						]);
				?>
			</div>
		</fieldset>
		<input type="submit" class="btn btn--additional-brand test-quiz__submit" value="Продолжить">

	</form>

</div>