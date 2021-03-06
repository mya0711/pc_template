/* *******************************************************
 * filename : sub.js
 * description : 서브컨텐츠에만 사용되는 JS
 * date : 2020-02-24
******************************************************** */

jQuery(function($){
	/* 서브 Visual Active */ 
	setTimeout(function  () {
		addActive($("#visual"));
	});

	/* 서브 MagnificPopup */
	magnificPopup($(".popup-gallery"));

	/* 서브 Scrollbar Table  */ 
	$(".custom-scrollbar-wrapper").each(function  () {
		var $scrollObject = $(this).find(".scroll-object-box");
		if ($.exists($scrollObject)) {
			customScrollX($scrollObject);
		}
		$(this).on("touchmove click",function  () {
			$(this).find(".custom-scrollbar-cover").fadeOut(200);
		});
	});
	
	/* *********************** 서브 메뉴 FIXED ************************ */
	if ($.exists(".fixed-sub-menu")) {
		var $fixedSubMenu = $(".fixed-sub-menu");
	
		$(window).scroll(function  () {
			var topMenuStart =  $fixedSubMenu.offset().top;
			objectFixed($fixedSubMenu, topMenuStart);
		});
	}

	/* *********************** 메뉴 FIXED 및 해당영역 이동 ************************ */
	if ($.exists(".cm-fixed-tab-container")) {
		if ( $.exists(".cm-fixed-link-tab-wrapper")) {
			var menuFunc = "linkTab";	// 링크이동일때
		}else {
			var menuFunc = "moveTab";	// 영역이동일때
		}
		var $fixedMoveTab = $(".cm-fixed-move-tab-list");
		var $moveTabItem = $fixedMoveTab.find("li");
		var menuCount= $moveTabItem.size();
		
		startPointCheck();
		$(window).on('resize', startPointCheck); 
		
		// Fixed되는 시점, 탭 높이값 측정
		function startPointCheck () {
			if ( getWindowWidth() < 1025 ) {
				fixedHeaderHeight = $("#header").height();
			}else {
				fixedHeaderHeight = 0
			}
			fixedTabHeight = $fixedMoveTab.height();
			fixedStartPoint =  $(".cm-fixed-move-tab-wrapper").offset().top - fixedHeaderHeight;	// 탭이 붙는 지점
			
			if ( menuFunc === "moveTab" ) {
				nav= new Array();
				for(var i=0;i < menuCount;i++){
					nav[i]="nav"+i;
					nav[i]=$($moveTabItem.eq(i).children("a").attr("href")).offset().top - fixedTabHeight - fixedHeaderHeight;
				}
			}
		}

		$(window).scroll(function  () {
			// 메뉴fixed
			objectFixed($fixedMoveTab, fixedStartPoint);
			if ( menuFunc === "moveTab" ) { 
				$moveTabItem.each(function  (idx) {
					if( getScrollTop() >= nav[idx] ){
						$moveTabItem.removeClass('selected');
						$moveTabItem.eq(idx).addClass('selected');
					};
				});
			}
			
		});
		
		if ( menuFunc === "moveTab" ) { 
			$moveTabItem.find("a").click(function  () {
				var goDiv = $($(this).attr("href")).offset().top - (fixedTabHeight-1) - fixedHeaderHeight;
				moveScrollTop(goDiv);
				 
				return false;
			});
		}
	}


	/* *********************** 에디터 관련 ************************ */
	if ($.exists(".editor")) {
		/* 테이블 스크롤넣기 */ 
		$(".editor table").each(function  () {
			$(this).wrap("<div class='editor-table-box'></div>");
		});
		
		/* iframe 태그 감싸기 */ 
		$(".editor iframe").each(function  () {
			var iframeSrc = $(this).attr("src");
			var findStr = "https://www.youtube.com/embed"; 

			if (iframeSrc.indexOf(findStr) != -1) {
			  $(this).wrap("<div class='editor-iframe-box'></div>");
			}
		});
	}
});


$(window).load(function  () {	
	/* *********************** 리스트의 높이값 맞추기 ************************ */
	$(".auto-height-list-con").each(function  () {
		var $autoList = $(this).find(".auto-height-item");	// ul > li
		var $autoListInner = $autoList.children(".inner-box");	 // ul > li 안에 높이값을 넣는영역
		var heightDiv = ".inner";				// 높이값을 결정하는 영역		
		var listNum = $autoList.length;			
		var resetWidth = $(this).data("reset-width") ; // 높이값을 해제하는 구간
		
		autoHeight();
		$(window).on('resize', autoHeight);

		function  autoHeight(){
			maxHeight = 0;
			for (var i=0; i<listNum; i++) {
				var curHeight = $autoList.eq(i).find(heightDiv).innerHeight();
				if ( curHeight > maxHeight ) {
					maxHeight = curHeight;
				}
			}
			//console.log(maxHeight);
			$autoListInner.height(maxHeight);
			
			if ( getWindowWidth() < resetWidth + 1 ){
				$autoListInner.css('height','auto');
			}
		}
	});
});
