"use strict";

(function ($) {

	var $banner = $("#grid__side-banner-1");

	deviceLogic([{
		logic: function logic() {
			$banner.insertAfter($("#test-result__result"));
		},

		desiredDevice: "tablet phone"
	}, {
		logic: function logic() {
			$banner.insertAfter($("#test-result__test-description"));
		},

		desiredDevice: "laptop desktop"
	}]);
})(jQuery);
//# sourceMappingURL=test-result.js.map
