"use strict";

(function ($) {

	var $banner = $("#grid__3");

	deviceLogic([{
		logic: function logic() {
			$banner.insertAfter($("#article-main-content__img"));
		},

		desiredDevice: "phone"
	}, {
		logic: function logic() {
			$banner.insertAfter($("#article-main-content__article-external-info-wrapper"));
		},

		desiredDevice: "tablet"
	}, {
		logic: function logic() {
			$banner.insertAfter($("#grid__2"));
		},

		desiredDevice: "laptop desktop"
	}]);
})(jQuery);
//# sourceMappingURL=article.js.map
