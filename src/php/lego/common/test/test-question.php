<div class="test-question">

	<div class="test-question__question-counter"><?= $params["counter"]; ?></div>

	<h3 class="test-question__legend branded-legend"><?= $params["legend"]; ?></h3>

	<? req_with_param(PATH__COMMON . $params["content"], [
			"test-question-one-img" => $params["test-question-one-img"],
			"test-content" => $params["test-content"],
			"test-question-multiple-img-wrapper" => $params["test-question-multiple-img-wrapper"]
	]); ?>

</div>