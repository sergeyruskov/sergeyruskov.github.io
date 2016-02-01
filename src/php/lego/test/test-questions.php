<form action="#22" class="test-questions">
	<div class="test-questions__question">

		<div class="test-questions__question-counter">1</div>
		<fieldset class="test-questions__fieldset">
			<legend class="test-questions__legend col__1--tablet">Что вы чувствуете, глядя на картину Судзуки Харунобу «Куртизанки»?</legend>

			<img src="<?= PATH__IMG . "/test/test-img.jpg" ?>" alt="" class="test-questions__one-picture">

			<div class="test-questions__wrapper-possible-answer col__2--desktop col__1--laptop col__1--tablet">

				<p class="test-questions__possible-answer">
					<input type="radio" class="test-questions__radio"
					       name="test-questions__1" id="test-questions__1--1">
					<label class="test-questions__label text-inside-frame" for="test-questions__1--1">
						Равнодушие, это всего лишь куртизанки в доме терпимости.
					</label>
				</p>

				<p class="test-questions__possible-answer">
					<input type="radio" class="test-questions__radio"
					       name="test-questions__1" id="test-questions__1--2">
					<label class="test-questions__label text-inside-frame" for="test-questions__1--2">
						Неприятие, это искусственное и усложненное изображение женственности.
					</label>
				</p>

				<p class="test-questions__possible-answer">
					<input type="radio" class="test-questions__radio"
					       name="test-questions__1" id="test-questions__1--3">
					<label class="test-questions__label text-inside-frame" for="test-questions__1--3">
						Волнение, эта сцена стимулирует сексуальные и эстетические переживания.
					</label>
				</p>

				<p class="test-questions__possible-answer">
					<input type="radio" class="test-questions__radio"
					       name="test-questions__1" id="test-questions__1--4">
					<label class="test-questions__label text-inside-frame" for="test-questions__1--4">
						Восхищение, это идеал утонченности.
					</label>
				</p>

			</div>

		</fieldset>
	</div>

	<div class="test-questions__question">
		<div class="test-questions__question-counter">
			2<span class="test-questions__separator">/</span>
			<span class="test-questions__question-number">16</span>
		</div>
		<fieldset class="test-questions__fieldset">
			<legend class="test-questions__legend">Что дает вам силы, когда перед вами стоит важная задача?</legend>

			<div class="test-questions__wrapper-possible-answer">

				<p class="test-questions__possible-answer">
					<input type="radio" class="test-questions__radio"
					       name="test-questions__2" id="test-questions__2--1">
					<label class="test-questions__label text-inside-frame" for="test-questions__2--1">
						Ваш опыт
					</label>
				</p>

				<p class="test-questions__possible-answer">
					<input type="radio" class="test-questions__radio"
					       name="test-questions__2" id="test-questions__2--2">
					<label class="test-questions__label text-inside-frame" for="test-questions__2--2">
						Ваше бесстрашие
					</label>
				</p>

				<p class="test-questions__possible-answer">
					<input type="radio" class="test-questions__radio"
					       name="test-questions__2" id="test-questions__2--3">
					<label class="test-questions__label text-inside-frame" for="test-questions__2--3">
						Окружающие вас люди
					</label>
				</p>

				<p class="test-questions__possible-answer">
					<input type="radio" class="test-questions__radio"
					       name="test-questions__2" id="test-questions__2--4">
					<label class="test-questions__label text-inside-frame" for="test-questions__2--4">
						Ваше воображение</label>
				</p>

			</div>


		</fieldset>
	</div>

	<div class="test-questions__question test-questions__question--img">
		<div class="test-questions__question-counter">
			3<span class="test-questions__separator">/</span>
			<span class="test-questions__question-number">16</span>
		</div>
		<fieldset class="test-questions__fieldset">
			<legend class="test-questions__legend">Какой кадр волнует вас больше всего?</legend>

			<div class="test-questions__wrapper-possible-answer">

				<p class="test-questions__possible-answer test-questions__possible-answer--img col__1">
					<label for="test-questions__3--1"><img src="<?= PATH__IMG . "/test/test-img.jpg" ?>" alt="" width="300" height="300" class="test-questions__multiple-img"></label>
					<input type="radio" class="test-questions__radio" name="test-questions__3" id="test-questions__3--1">
					<label class="test-questions__label text-inside-frame" for="test-questions__3--1">Кадр 1</label>
				</p>

				<p class="test-questions__possible-answer test-questions__possible-answer--img col__1">
					<label for="test-questions__3--2"><img src="<?= PATH__IMG . "/test/test-img.jpg" ?>" alt="" width="300" height="300" class="test-questions__multiple-img"></label>
					<input type="radio" class="test-questions__radio"
					       name="test-questions__3" id="test-questions__3--2">
					<label class="test-questions__label text-inside-frame" for="test-questions__3--2">Кадр 2</label>
				</p>

				<p class="test-questions__possible-answer test-questions__possible-answer--img col__1">
					<label for="test-questions__3--3"><img src="<?= PATH__IMG . "/test/test-img.jpg" ?>" alt="" width="300" height="300" class="test-questions__multiple-img"></label>
					<input type="radio" class="test-questions__radio"
					       name="test-questions__3" id="test-questions__3--3">
					<label class="test-questions__label text-inside-frame" for="test-questions__3--3">Кадр 3</label>
				</p>

				<p class="test-questions__possible-answer test-questions__possible-answer--img col__1">
					<label for="test-questions__3--4"><img src="<?= PATH__IMG . "/test/test-img.jpg" ?>" alt="" width="300" height="300" class="test-questions__multiple-img"></label>
					<input type="radio" class="test-questions__radio" name="test-questions__3" id="test-questions__3--4">
					<label class="test-questions__label text-inside-frame" for="test-questions__3--4">Кадр 4</label>
				</p>

				<p class="test-questions__possible-answer test-questions__possible-answer--img col__1">
					<label for="test-questions__3--5">
						<img src="<?= PATH__IMG . "/test/test-img.jpg" ?>" alt="" width="300" height="300" class="test-questions__multiple-img"></label>
					<input type="radio" class="test-questions__radio"
					       name="test-questions__3" id="test-questions__3--5">
					<label class="test-questions__label text-inside-frame" for="test-questions__3--5">Кадр 5</label>
				</p>

			</div>

		</fieldset>
	</div>

	<div class="test-questions__wrapper-btn">
		<input type="submit" class="btn btn--additional-brand" value="Показать результаты">
	</div>

</form>