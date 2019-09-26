/* *******************************************************
 * filename : nav.js
 * description : 네비게이션 및 사이드바 on 등 메뉴에 관련된 JS
 * date : 2018-01-16
******************************************************** */

var dep1;
var dep2;

jQuery(function($){
	/* *********************** PC NAV ************************ */
	var $openMenu = $(".cm-top-menu");
	// PC
	var $gnb = $("#gnb");
	var $gnbList = $("#gnb > ul");
	var $gnb_dep1 = $("#gnb > ul > li");
	var $gnb_dep2 = $("#gnb > ul > li .gnb-2dep");
	var $gnbBg = $('.gnb-overlay-bg');
	var $snb = $(".snb");

	if ( $gnb.is(".total-menu") ) {
		gnb_total_on();
	}else if ( $gnb.is(".each-menu") ) {
		gnb_each_on();
	}

	// gnb 전체메뉴
	function gnb_total_on () {
		$gnbList.children("li").children("a").on("mouseenter focus",function  () {
			if( $gnb_dep2.css('display') == 'none'){
				$("#header").addClass("over");		/* 헤더배경 흰색으로 변경될 경우에만 */
				$gnb_dep2.stop().slideDown("fast");
				$gnb.find('#gnbBg').stop().slideDown("fast");
				$gnbBg.stop().fadeIn();
			}
		})
	
		$gnbList.on("mouseleave",gnb_return);
		$gnbList.find("a").last().on("focusout",gnb_return);
		
		function gnb_return () {
			if( $gnb_dep2.css('display') == 'block'){
				$("#header").removeClass("over");	/* 헤더배경 흰색으로 변경될 경우에만 */
				$gnb_dep2.stop().slideUp("fast");
				$gnb.find('#gnbBg').stop().slideUp("fast");
				$gnbBg.hide();
			}
			if ( dep1 > 0 && dep2 ) {
				$gnbList.children("li").eq(dep1-1).addClass("active");
			}
		}
	}

	// gnb 각각메뉴
	function gnb_each_on () {
		$gnbList.children("li").children("a").on("mouseenter focus",function  () {
			$gnbList.children("li").removeClass("on").children(".gnb-2dep").removeClass("open"); //.hide();
			$(this).parent("li").addClass("on").children(".gnb-2dep").stop().addClass("open"); //.slideDown(500);
		})

		
		$gnbList.on("mouseleave",gnb_return);
		$gnbList.find("a").last().on("focusout",gnb_return);
		
		function gnb_return () {
			// if (!$gnb.find('*').is(':animated')) {
				$gnbList.children("li").removeClass("on").children(".gnb-2dep").removeClass("open"); //.hide();
			// }
			if ( dep1 > 0 && dep2 ) {
				$gnbList.children("li").eq(dep1-1).addClass("active");
			}
		}
	}
	
	// gnb 2차 메뉴에 마우스 올렸을때 대메뉴 on
	$gnb_dep2.hover(function(){
		$(this).parent("li").addClass("on");
	},function  () {
		$gnb_dep1.removeClass("on");
	});

	/* *********************** SUB MENU ************************ */
	// 서브메뉴에서 해당메뉴 on
	if ( dep1 > 0 && dep2 > 0) {
		$gnbList.children("li").eq(dep1-1).addClass("active");
		$snb.each(function  () {
			$(this).children("li").eq(dep2-1).addClass("on").children(".snb-2dep").show();
		});
	}
	
	/* 서브메뉴가 2차메뉴를 가지고있으면 클래스 붙이기  */ 
	$("#sideMenu > ul > li:has('ul')").addClass("has-2dep");
	$("#sideMenu > ul > li:has('ul')").each(function  () {
		$(this).children("a").append("<em class='snb-icon close-icon'><i class='material-icons'>&#xE145;</i></em><em class='snb-icon open-icon'><i class='material-icons'>&#xE15B;</i></em>");
	});

	/* SNB 2DEPTH 열기 */ 
	$("#sideMenu .snb > li:has('ul')").children("a").click(function(event){
		if( $(this).parent("li").hasClass("open")) {
			$(this).parent("li").removeClass("open");
			$(this).siblings(".snb-2dep").slideUp(400);
		}else{
			$("#sideMenu .snb > li").has(".snb-2dep").each(function(){
				$(this).removeClass("open");
				$(this).children(".snb-2dep").slideUp(400);
			});
			$(this).parent("li").addClass("open");
			$(this).siblings(".snb-2dep").slideDown(400);
			return false;
		}
		return false;
	});

	/* *********************** PC, 모바일 공통 ************************ */
	/* ------------------------
	*** 서브 상단 location (1차, 2차) 하위메뉴 ON & 열기 *** 
	------------------------ */ 
	$openMenu.find(".menu-location").each(function  () {
		// 클릭할때 펼치기
		$(this).find(".cur-location").click(function  () {
			$(this).toggleClass("open");
			$(this).siblings(".location-menu-con").slideToggle();

			return false;
		});
		// 2depth ON
		if ( $(this).is(".location1") ) {
			$(this).find(".location-menu-con").find("li").eq(dep1-1).addClass("on");
		}else {
			$(this).find(".location-menu-con").find("li").eq(dep2-1).addClass("on");
		}
	});
	
	$(".menu-location").mouseleave(function  () {
		if ( $(this).find(".location-menu-con").css("display") == "block" ) {
			$(this).find(".cur-location").removeClass("open");
			$(this).find(".location-menu-con").slideUp(300);
		}
	});

	/* ------------------------
	*** 이전페이지,다음페이지 링크걸기 *** 
	------------------------ */ 
	/*  (무조건 페이지의 dep1, dep2의 값을 가져와야함) */
	// 2depth 이동
	var $sub_prev_page_btn = $(".sub-prev-page-btn");
	var $sub_next_page_btn = $(".sub-next-page-btn");
	var $dep1_menu = $("#gnb > ul > li");
	var dep1_menu_lang = $dep1_menu.length;

	$sub_prev_page_btn.attr("href",$dep1_menu.eq(dep1-2).children("a").attr("href"));
	$sub_next_page_btn.attr("href",$dep1_menu.eq(dep1).children("a").attr("href"));

	$sub_prev_page_btn.find(".sub-page-name").text($dep1_menu.eq(dep1-2).children("a").text());
	$sub_next_page_btn.find(".sub-page-name").text($dep1_menu.eq(dep1).children("a").text());
	


	if ( dep1 == dep1_menu_lang ) {
		$sub_next_page_btn.attr("href",$dep1_menu.eq(0).children("a").attr("href"));
		$sub_next_page_btn.find(".sub-page-name").text($dep1_menu.eq(0).children("a").text());
	}else if ( dep1 == 1 ) {
		$sub_prev_page_btn.attr("href",$dep1_menu.eq(dep1_menu_lang-1).children("a").attr("href"));
		$sub_prev_page_btn.find(".sub-page-name").text($dep1_menu.eq(dep1_menu_lang-1).children("a").text());
	}
	
});
