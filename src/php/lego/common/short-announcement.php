<?
if ($params["width"] === "short") {
	$width_wrapper = "short-announcement--w260";
	$width_text = "short-announcement__title--short";
} else {
	$width_wrapper = "col__1";
	$width_text = "short-announcement__title--long";
}
?>

<a href="#" class="short-announcement link link--black <?=$width_wrapper?> <?=$params["class"]?>">

	<img src="<?= PATH__IMG; echo $params["img"];?>" alt="" class="pull-left short-announcement__img" width="87px" height="60px">

	<h3 class="short-announcement__title <?= $width_text; ?>"><?= $params["title"] ?></h3>

</a>