<? if ($params["typeoftag"] === "submit"): ?>
	<input
			type="submit"
			class="btn <?= $params["class"]; ?>"
			<? if(isset($params["id"])) echo "id='" . $params["id"] . "'"; ?>
			<?= $params["disabled"]; ?>
			value="<?= $params["text"]; ?>">

<? elseif($params["typeoftag"] === "link"): ?>

	<a href="#" class="btn <?= $params["class"]; ?>"><?= $params["text"]; ?></a>

<? else: ?>
	<div
			class="btn <?= $params["class"]; ?>"
			<? if(isset($params["id"])) echo "id='" . $params["id"] . "'"; ?>
			<?= $params["disabled"]; ?>>
			<?= $params["text"]; ?>
	</div>
<? endif ?>


