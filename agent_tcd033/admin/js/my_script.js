jQuery(document).ready(function($){

  $('#my_theme_option').cookieTab({
   tabMenuElm: '#theme_tab',
   tabPanelElm: '#tab-panel'
  });


  // fancybox
  $(".fancybox").fancybox();

	// radio button for page custom fields

   $(".ml_custom_fields .template li label").click(function () {
     $(".ml_custom_fields .template li label").removeClass('active');
     $(this).addClass('active');
   });

   $("#template_type1").click(function () {
    $("#ml_custom_fields_box2").hide();
    $("#ml_custom_fields_box3").hide();
    $("#ml_custom_fields_box4").hide();
    $("#ml_custom_fields_box5").hide();
   });

   $("#template_type2").click(function () {
    $("#ml_custom_fields_box2").show();
    $("#ml_custom_fields_box3").hide();
    $("#ml_custom_fields_box4").hide();
    $("#ml_custom_fields_box5").hide();
   });

   $("#template_type3").click(function () {
    $("#ml_custom_fields_box3").show();
    $("#ml_custom_fields_box2").hide();
    $("#ml_custom_fields_box4").hide();
    $("#ml_custom_fields_box5").hide();
   });

   $("#template_type4").click(function () {
    $("#ml_custom_fields_box4").show();
    $("#ml_custom_fields_box2").hide();
    $("#ml_custom_fields_box3").hide();
    $("#ml_custom_fields_box5").hide();
   });

   $("#template_type5").click(function () {
    $("#ml_custom_fields_box5").show();
    $("#ml_custom_fields_box2").hide();
    $("#ml_custom_fields_box3").hide();
    $("#ml_custom_fields_box4").hide();
   });

  // フッターの固定メニュー --------------------------------------------------------------
 // アコーディオンの開閉
 $(".repeater").on("click", ".theme_option_subbox_headline", function() {
  $(this).parents(".sub_box").toggleClass("active");
  return false;
 });
 // ボタンの並び替え
 $(".sortable").sortable({
  placeholder: "sortable-placeholder",
  helper: "clone",
  forceHelperSize: true,
  forcePlaceholderSize: true

 });
 // 新しいアイテムを追加する
 $(".repeater-wrapper").each(function() {
  var next_index = $(this).find(".repeater-item").last().index();
  $(this).find(".button-add-row").click(function() {
   var clone = $(this).attr("data-clone");
   var $parent = $(this).closest(".repeater-wrapper");
   if (clone && $parent.size()) { 
    next_index++;
    clone = clone.replace(/addindex/g, next_index);
    $parent.find(".repeater").append(clone.replace(/addindex/g, next_index));
   }
   return false;
  });
 });
 // アイテムを削除する
 $(".repeater").on("click", ".button-delete-row", function() {
  var del = true;
  var confirm_message = $(this).closest(".repeater").attr("data-delete-confirm");
  if (confirm_message) {
   del = confirm(confirm_message);
  }
  if (del) {
   $(this).closest(".repeater-item").remove();
  }
  return false;
 });
 // ボタンのタイプによって、表示フィールドを切り替える
 $(".repeater").each(function() {
  $(this).on("change", ".footer-bar-type select", function() {
   var sub_box = $(this).parents(".sub_box");
   var target = sub_box.find(".footer-bar-target");
   var url = sub_box.find(".footer-bar-url");
   var number = sub_box.find(".footer-bar-number");
   switch ($(this).val()) {
    case "type1" :
     target.show();
     url.show();
     number.hide();
     break;
    case "type2" :
     target.hide();
     url.hide();
     number.hide();
     break;
    case "type3" :
     target.hide();
     url.hide();
     number.show();
     break;
   }
  });
 });
 // リピーター ボタン名
 $(document).on('change keyup', '.repeater .repeater-label', function(){
  $(this).closest('.repeater-item').find('.theme_option_subbox_headline').text($(this).val());
 }); 
});