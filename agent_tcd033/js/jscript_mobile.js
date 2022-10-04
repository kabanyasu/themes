jQuery(document).ready(function($){

  $("a").bind("focus",function(){if(this.blur)this.blur();});
  $("a.target_blank").attr("target","_blank");

  jQuery.easing.easeOutExpo = function (x, t, b, c, d) {
   return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
  };

	var topBtn = $('#return_top');	
  topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 1000, 'easeOutExpo');
		return false;
  });

  $("#comment_area ol > li:even").addClass("even_comment");
  $("#comment_area ol > li:odd").addClass("odd_comment");
  $(".even_comment > .children > li").addClass("even_comment_children");
  $(".odd_comment > .children > li").addClass("odd_comment_children");
  $(".even_comment_children > .children > li").addClass("odd_comment_children");
  $(".odd_comment_children > .children > li").addClass("even_comment_children");
  $(".even_comment_children > .children > li").addClass("odd_comment_children");
  $(".odd_comment_children > .children > li").addClass("even_comment_children");

  $("#trackback_switch").click(function(){
    $("#comment_switch").removeClass("comment_switch_active");
    $(this).addClass("comment_switch_active");
    $("#comment_area").animate({opacity: 'hide'}, 0);
    $("#trackback_area").animate({opacity: 'show'}, 1000);
    return false;
  });

  $("#comment_switch").click(function(){
    $("#trackback_switch").removeClass("comment_switch_active");
    $(this).addClass("comment_switch_active");
    $("#trackback_area").animate({opacity: 'hide'}, 0);
    $("#comment_area").animate({opacity: 'show'}, 1000);
    return false;
  });

  $('#footer_menu_button1').on('click', function(e) {
      e.preventDefault();
      e.stopPropagation();

      $('body').toggleClass('open_right');

      $('#container').one('click', function(e){
        if($('body').hasClass('open_right')){
            $('body').removeClass('open_right');
            return false;
        };
      });
  });

  $('#footer_menu_button2').on('click', function(e) {
      e.preventDefault();
      e.stopPropagation();

      $('body').toggleClass('open_left');

      $('#container').one('click', function(e){
        if($('body').hasClass('open_left')){
            $('body').removeClass('open_left');
            return false;
        };
      });
  });

});