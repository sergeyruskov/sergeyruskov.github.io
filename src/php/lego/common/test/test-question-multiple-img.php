<div class="test-question-multiple-img col__1">

	<label for="<?= $params["id-for-label"]; ?>">
		<img src="<?= PATH__IMG . $params["img"]; ?>" alt="" width="300" height="300"
		     class="test-question-multiple-img__img">
	</label>

	<? req_with_param(PATH__COMMON . "/branded-input.php",
			[
					"text" => $params["text"],
					"id-for-label" => $params["id-for-label"],
					"circle-modification" =>  $params["circle-modification"],
					"name" => $params["name"],
			]);
	?>
</div>