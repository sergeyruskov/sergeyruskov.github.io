'use strict';(function($){var $banner=$('#grid__501');deviceLogic([{logic:function logic(){$banner.insertAfter($('#article-main-content__img'));},desiredDevice:'phone'},{logic:function logic(){$banner.insertAfter($('#article-main-content__external-info-wrapper'));},desiredDevice:'tablet'},{logic:function logic(){$banner.insertAfter($('#grid__2'));},desiredDevice:'laptop desktop'}]);$('#subscribe-block').subscribe();window.externalInfoSlider('#external-info-1');window.externalInfoSlider('#external-info-2');showMore($('#show-more-block'),$('#show-more-btn'));})(jQuery);