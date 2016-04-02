<div class="test-social <?=$params["wrapper-modification"];?>">

	<div class="test-social__title">Поделиться с друзьями</div>
	<?req_with_param(PATH__COMMON . $params["buttons-inside"], ["modification" => $params["modification"]]);?>

</div>