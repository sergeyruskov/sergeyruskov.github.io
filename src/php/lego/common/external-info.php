<div class="
	external-info
	<?= $params["modification"]; ?>"
	<?= isset($params["id"]) ?  "id='" . $params["id"] . "'" : ""; ?>>

	<?= $params["title"]; ?>

	<? if(isset($params["content"])): ?>
		<?= $params["content"]; ?>
	<? endif; ?>

	<? if(isset($params["include"])): ?>
		<? req_with_param(PATH__COMMON . $params["include"], [
				"modification" => $params["include-modification"],
				"require" => $params["require"]
		]); ?>
	<? endif; ?>

</div>