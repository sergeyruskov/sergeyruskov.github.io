<div class="branded-input-wrapper <?= $params["modification"]; ?>">

	<? foreach($params["test-content"] as $value) {
		echo '<div class="branded-input-wrapper__item">';
			req_with_param(PATH__COMMON . "/branded-input.php", $value);
		echo '</div>';
	}
	?>

</div>