<div class="test-questions-form">

	<div class="test-questions-form__item">
		<? req_with_param(PATH__COMMON . "/test/test-question.php",
				[
						"counter" => "1",
						"legend" => "Что вы чувствуете, глядя на картину Судзуки Харунобу «Куртизанки»?",
						"content" => "/test/test-question-one-img.php",
						"test-question-one-img" => [
								"img" => "/test/test-img.jpg",
								"modification" => "test-question-one-img--test",
								"branded-input" => [

										[
												"circle-modification" => "branded-input__label--spot-unmarked-radio",
												"name" => "branded-input__1",
												"id-for-label" => "branded-input__1--1",
												"text" => "Равнодушие, это всего лишь куртизанки в доме терпимости."
										],

										[
												"circle-modification" => "branded-input__label--spot-unmarked-radio",
												"name" => "branded-input__1",
												"id-for-label" => "branded-input__1--2",
												"text" => "Неприятие, это искусственное и усложненное изображение женственности."
										],

										[
												"circle-modification" => "branded-input__label--spot-unmarked-radio",
												"name" => "branded-input__1",
												"id-for-label" => "branded-input__1--3",
												"text" => "Волнение, эта сцена стимулирует сексуальные и эстетические переживания."
										],

										[
												"circle-modification" => "branded-input__label--spot-unmarked-radio",
												"name" => "branded-input__1",
												"id-for-label" => "branded-input__1--4",
												"text" => "Восхищение, это идеал утонченности."
										]

								],

								"branded-input-wrapper-modification" => "branded-input-wrapper--test-with-one-img"
						]
				]
		); ?>

	</div>

	<div class="test-questions-form__item">

		<? req_with_param(PATH__COMMON . "/test/test-question.php", [
						"counter" => '2<span class="test-question__separator">/</span>
		<span class="test-question__question-number">16</span>',
						"legend" => "Что дает вам силы, когда перед вами стоит важная задача?",
						"content" => "/branded-input-wrapper.php",
						"test-content" => [

								[
										"circle-modification" => "branded-input__label--spot-unmarked-radio",
										"name" => "branded-input__2",
										"id-for-label" => "branded-input__2--1",
										"text" => "Равнодушие, это всего лишь куртизанки в доме терпимости."
								],

								[
										"circle-modification" => "branded-input__label--spot-unmarked-radio",
										"name" => "branded-input__2",
										"id-for-label" => "branded-input__2--2",
										"text" => "Неприятие, это искусственное и усложненное изображение женственности."
								],

								[
										"circle-modification" => "branded-input__label--spot-unmarked-radio",
										"name" => "branded-input__2",
										"id-for-label" => "branded-input__2--3",
										"text" => "Волнение, эта сцена стимулирует сексуальные и эстетические переживания."
								],

								[
										"circle-modification" => "branded-input__label--spot-unmarked-radio",
										"name" => "branded-input__2",
										"id-for-label" => "branded-input__2--4",
										"text" => "Восхищение, это идеал утонченности."
								]

						]
				]
		); ?>

	</div>

	<div class="test-questions-form__item">

		<? req_with_param(PATH__COMMON . "/test/test-question.php", [
						"counter" => '3<span class="test-question__separator">/</span>
		<span class="test-question__question-number">16</span>',
						"legend" => "Какой кадр волнует вас больше всего?",
						"content" => "/test/test-question-multiple-img-wrapper.php",
						"test-question-multiple-img-wrapper" => [

							"content" => [
									[
											"img" => "/test/test-img.jpg",
											"circle-modification" => "branded-input__label--spot-unmarked-radio",
											"name" => "branded-input__3",
											"id-for-label" => "branded-input__3--1",
											"text" => "Кадр 1",
									],

									[
											"img" => "/test/test-img.jpg",
											"circle-modification" => "branded-input__label--spot-unmarked-radio",
											"name" => "branded-input__3",
											"id-for-label" => "branded-input__3--2",
											"text" => "Кадр 2"
									],

									[
											"img" => "/test/test-img.jpg",
											"circle-modification" => "branded-input__label--spot-unmarked-radio",
											"name" => "branded-input__3",
											"id-for-label" => "branded-input__3--3",
											"text" => "Кадр 3",
									],

									[
											"img" => "/test/test-img.jpg",
											"circle-modification" => "branded-input__label--spot-unmarked-radio",
											"name" => "branded-input__3",
											"id-for-label" => "branded-input__3--4",
											"text" => "Кадр 4",
									],

									[
											"img" => "/test/test-img.jpg",
											"circle-modification" => "branded-input__label--spot-unmarked-radio",
											"name" => "branded-input__3",
											"id-for-label" => "branded-input__3--5",
											"text" => "Кадр 5",
									]
							],

							"test-question-multiple-img-wrapper__modification" => "test-question-multiple-img-wrapper--test",

						]
				]
		); ?>

	</div>

	<!--Если что-то надо скрыть добавляем класс hide-->

	<div class="test-questions-form__submit-btn">

		<input type="submit" class="btn btn--additional-brand" value="Показать результаты">

	</div>

	<div class="test-questions-form__submit-btn">

		<a href="#" class="test-questions-form__submit-btn-return btn btn--additional-brand btn--inactive link link--white">Вернуться</a>

		<a href="#" class="test-questions-form__submit-btn-continue btn btn--additional-brand btn--always-inactive link link--white">Продолжить</a>

	</div>

</div>