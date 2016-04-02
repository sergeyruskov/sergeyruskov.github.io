<div class="content-wrapper grid <?= $params["branding"]; ?>">

	<div class="grid__1">

		<? req_with_param(PATH__COMMON . "/announcements.php",
				[
						"modification" => "announcements--index",
						"first-element-classes" => "",
						"second-element-classes" => "",
						"third-element-classes" => "hide--tablet",
						"fourth-element-classes" => "hide--tablet hide--laptop hide--phone",
				]
		); ?>

	</div>

	<div class="grid__2">

		<? req_with_param(PATH__COMMON . "/section-name.php",
				[
						"name" => "Конкурсы"
				]
		); ?>

	</div>

	<div class="grid__3">
		
		<? req_with_param(PATH__COMMON . "/section-description.php",
				[
						"text" => "Участвуй в онлайн конкурсах и викторинах, выиграй ценный приз. Условия и период проведения конкурсов читайте на сайте psychologies.ru",
						"modification" => "section-description--game"
				]
		); ?>

	</div>

	<div class="grid__4">
		
		<div class="game-main-content">
			
			<? req_with_param(PATH__COMMON . "/test/test-description.php", [
					"title" => "Сочувствовать другим, чтобы сохранить себя",
					"test-img" => true,
					"subtitle" => "Некоторые картины обладают интересной, противоречивой, а то и трагической историей. Мы предлагаем вам 10 вопросов о художниках и их произведениях. Если игра покажется сложной, не расстраивайтесь – зато, узнав правильные ответы на все вопросы, вы будете чувствовать себя если не искусствоведом, то по крайней мере выпускником художественной школы.",
			]); ?>

			<div class="game-main-content__wrapper-externals-info">

				

					<? req_with_param(PATH__COMMON . "/external-info.php", [
							"modification" => "external-info--size-mod-1 external-info--order-list",
							"title" => "<div class='external-info__block-title'>Условия игры</div>",
							"content" => "
				<div>
					<p class=\"external-info__text\">Участвовать могут все жители территории РФ, всех городов. Душа моя озарена неземной радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего сердца. Я совсем один и блаженствую в здешнем краю, словно созданном для таких, как я.</p>
					
					<ol>
					
						<li>Правильно ответьте на  все вопросы.</li>
						<li>Нажмите кнопку «Ответить», загрузите ваши результаты.</li>
						<li>Ждите ответа от редакции в случае победы.</li>
						
					
					</ol>
					
				</div>"
					]); ?>
					
					<? req_with_param(PATH__COMMON . "/external-info.php", [
							"modification" => "external-info--size-mod-2",
							"title" => "<div class='external-info__block-title'>Спонсор:</div>",
							"include" => "/wrote-about.php"]); ?>

					<? req_with_param(PATH__COMMON . "/external-info.php",
							[
									"modification" => "external-info--size-mod-2",
									"id" => "external-info-1",
									"title" => "
							<div class='external-info__block-title'>Призы:</div>
							<div class='external-info__block-title'>
								<span class='external-info__current-slide-number'>1</span>
								<span class='external-info__separator-numbers'>/</span>
								<span class='external-info__number-slides'></span>
							</div>
							",
									"include" => "/external-slide.php",
									"require" => "/wrote-about.php"
							]); ?>


			</div>




		</div>

	</div>

	<div class="grid__5">

		
	</div>

</div>

