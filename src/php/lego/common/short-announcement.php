<?
if ($params["width"] === "short") {
	$width_wrapper = "short-announcement--w260";
	$width_text = "short-announcement__title--short";
} else {
	$width_wrapper = "col__1";
	$width_text = "short-announcement__title--long";
}
?>

<a href="#" class="short-announcement
<?="$width_wrapper " , $params["class"], " " . $params["modification"]?> ">

	<img src="<?= PATH__IMG; echo $params["img"];?>" alt="" class="pull-left short-announcement__img" width="87" height="60">

	<h3 class="short-announcement__title <?= $width_text; ?>"><?= $params["title"] ?></h3>

</a>