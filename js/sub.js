/* *******************************************************
 * filename : sub.js
 * description : 서브컨텐츠에만 사용되는 JS
 * date : 2019-09-03
******************************************************** */

jQuery(function($){
	/* *********************** 서브 비주얼 Active ************************ */
	setTimeout(function  () {
		$("#visual").addClass("active");
	});

	/* *********************** 서브 메뉴 FIXED ************************ */
	if ( $(".fixed-sub-menu").length > 0 ) {
		var $fixedSubMenu = $(".fixed-sub-menu");
	
		$(window).scroll(function  () {
			var scrollHeight = $(window).scrollTop();
			var topMenuStart =  $fixedSubMenu.offset().top;

			if ( scrollHeight > topMenuStart ) {
				$fixedSubMenu.addClass("fixed");
			}else {
				$fixedSubMenu.removeClass("fixed");
			}
		});
	}

	/* *********************** 메뉴 FIXED 및 해당영역 이동 ************************ */
	if ( $(".fixed-move-tab-list-wrapper").length > 0 ) {
		var $fixedMoveTab = $(".fixed-move-tab-list");
		var $moveTabItem = $fixedMoveTab.find("li");
		var menuCount= $moveTabItem.size();

		// 서브메뉴가 같이 fixed될때와 안될때 구분
		if ( $(".fixed-sub-menu").length > 0 ) {
			var fixedStartTab =  $fixedMoveTab.offset().top - $(".fixed-sub-menu").height();
			var fixedStartHeight = $fixedMoveTab.height() + $(".fixed-sub-menu").height();
		}else {
			var fixedStartTab =  $fixedMoveTab.offset().top;
			var fixedStartHeight = $fixedMoveTab.height();
		}

		$(window).scroll(function  () {
			var scrollHeight = $(window).scrollTop();
			
			// 메뉴fixed
			if ( scrollHeight > fixedStartTab ) {
				$fixedMoveTab.addClass("fixed");
			}else {
				$fixedMoveTab.removeClass("fixed");
			}

			// 메뉴이동
			var nav= new Array();
			for(var i=0;i < menuCount;i++){
				nav[i]="nav"+i;
				nav[i]=$($moveTabItem.eq(i).children("a").attr("href")).offset().top - fixedStartHeight;
			}
			 
			$moveTabItem.each(function  (idx) {
				if( scrollHeight >= nav[idx] ){
					$moveTabItem.removeClass('selected');
					$moveTabItem.eq(idx).addClass('selected');
				};
			});
			
		});

		$moveTabItem.find("a").click(function  () {
            var goDiv = $($(this).attr("href")).offset().top - (fixedStartHeight-1);
            $("html, body").animate({scrollTop:goDiv},300,"swing");
             
            return false;
        });
	}
});
