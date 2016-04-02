<div class="branded-input">
	<input type="radio"
	       class="branded-input__radio"
	       name="<?= $params["name"]; ?>"
	       id="<?= $params["id-for-label"]; ?>"
	>
	<label class="branded-input__label <?= $params["circle-modification"]; ?> text-inside-frame" for="<?= $params["id-for-label"]; ?>">
		<?= $params["text"]; ?>
	</label>
</div>