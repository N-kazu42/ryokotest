jQuery(function() {
	setTimeout(function(){
		jQuery('.start p').fadeIn(1600);
	},500); //0.5秒後にロゴをフェードイン!
	setTimeout(function(){
		jQuery('.start').fadeOut(500);
	},2500); //2.5秒後にロゴ含め真っ白背景をフェードアウト！
});
jQuery(function () {
  jQuery(window).scroll(function () {
    jQuery('.downup').each(function () {
      var elemPos = jQuery(this).offset().top; //画面の上からの距離
      var scroll = jQuery(window).scrollTop();//画面が縦に方向に進んだ距離
      var windowHeight = jQuery(window).height();//コンテンツの高さを取得
      if (scroll > elemPos - windowHeight + 300) { //画面の縦方向に進んだ距離＞画面の上の位置から400進んだ距離
        jQuery(this).addClass('scrollin');
      } else {
        jQuery(this).removeClass('scrollin');
      }
    });
  });
});
jQuery(function () {
  jQuery(window).scroll(function () {
    jQuery('.downup2').each(function () {
      var elemPos = jQuery(this).offset().top;
      var scroll = jQuery(window).scrollTop();
      var windowHeight = jQuery(window).height();
      if (scroll > elemPos - windowHeight + 400) {
        jQuery(this).delay(5000).addClass('scrollin');
      } else {
        jQuery(this).removeClass('scrollin');
      }
    });
  });
});
