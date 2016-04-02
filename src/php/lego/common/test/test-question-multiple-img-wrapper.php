<div class="test-question-multiple-img-wrapper
<?=$params["test-question-multiple-img-wrapper"]["test-question-multiple-img-wrapper__modification"]; ?>
">

	<? foreach($params["test-question-multiple-img-wrapper"]["content"] as $value): ?>

		<div class="test-question-multiple-img-wrapper__item">

			<? req_with_param(PATH__COMMON . "/test/test-question-multiple-img.php", [
					"img" => $value["img"],
					"text" => $value["text"],
					"id-for-label" => $value["id-for-label"],
					"circle-modification" =>  $value["circle-modification"],
					"name" => $value["name"],
			]); ?>

		</div>

	<? endforeach; ?>

</div>