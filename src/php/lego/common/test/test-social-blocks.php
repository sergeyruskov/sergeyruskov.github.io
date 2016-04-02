<div class="test-social-blocks <?= $params["modification"]; ?>">

	<? req_with_param(PATH__COMMON . "/test/test-social.php", [
			"buttons-inside" => "/test/test-social-networks.php" ,
			"wrapper-modification" => "col__2--desktop col__2--laptop col__2--tablet",
			"modification" => "test-social-network--test"
	]); ?>

	<? req_with_param(PATH__COMMON . "/test/test-social.php",
			[
					"buttons-inside" => "/test/test-social-discuss.php" ,
					"wrapper-modification" => "test-social--discuss col__1"
			]); ?>

</div>