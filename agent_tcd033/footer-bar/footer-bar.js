jQuery(document).ready(function($){

	/**
	 * スマホ用固定フッターバー
	 */
	if ($(".dp-footer-bar-share").length) {
		$(".dp-footer-bar-share, #modal-overlay").on("click", function() {
			$("#modal-content, #modal-overlay").toggleClass("hide");
			return false;
		});	
		$("#modal-overlay, #modal-content").on("touchmove", function(e) {
			e.preventDefault();
		});
	}
	if ($(".dp-footer-bar").length) {
		var footerBar = $(".dp-footer-bar");
		var footerBarHeight = footerBar.height() || 55;
		footerBar.hide();
		$('body').css('paddingBottom', footerBarHeight);
		//$('.returntop a').css('bottom', footerBarHeight);
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				footerBar.stop().fadeIn("slow");
			} else {
				footerBar.stop().fadeOut();
			}
		});
	}
});
