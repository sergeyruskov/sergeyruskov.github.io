<div class="test-question-one-img <?= $params["test-question-one-img"]["modification"]; ?>">

	<img
			src="<?= PATH__IMG . $params["test-question-one-img"]["img"]; ?>"
			alt=""
			class="test-question-one-img__img"
	>

	<div class="pull-left">

		<? req_with_param(PATH__COMMON . "/branded-input-wrapper.php",
				[
						"test-content" => $params["test-question-one-img"]["branded-input"],

						"modification" => $params["test-question-one-img"]["branded-input-wrapper-modification"]
				]
		) ?>

	</div>

</div>