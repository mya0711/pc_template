/* *******************************************************
 * filename : common.js
 * description : 전체적으로 사용되는 JS
 * date : 2020-02-24
******************************************************** */

/* IE 버전체크 */ 
function ieVersionCheck () {
	var word; 
	var version = "N/A"; 
	var agent = navigator.userAgent.toLowerCase(); 
	var name = navigator.appName; 

	// IE old version ( IE 10 or Lower ) 
	if ( name == "Microsoft Internet Explorer" ) word = "msie "; 
	else { 
		// IE 11 
		if ( agent.search("trident") > -1 ) word = "trident/.*rv:"; 
		// Microsoft Edge  
		else if ( agent.search("edge/") > -1 ) word = "edge/"; 
	} 
	var reg = new RegExp( word + "([0-9]{1,})(\\.{0,}[0-9]{0,1})" ); 
	if (  reg.exec( agent ) != null  ) version = RegExp.$1 + RegExp.$2; 
	
	if ( version !="NaN" && version < 12 ) {
		return parseInt (version)
	}else {
		return false;
	}
}

/* 브라우저 체크 */
function detectBrowser () {
	var agent = navigator.userAgent.toLowerCase(); 
	var browser; 
	
	if (agent.indexOf('msie') > -1) { 
		browser = 'ie' + agent.match(/msie (\d+)/)[1] 
	}else if(agent.indexOf('trident') > -1) { 
		browser = 'ie11' 
	}else if(agent.indexOf('edge') > -1) { 
		browser = 'edge' 
	}else if(agent.indexOf('firefox') > -1) { 
		browser = 'firefox' 
	}else if(agent.indexOf('opr') > -1) { 
		browser = 'opera' 
	}else if(agent.indexOf('chrome') > -1) { 
		browser = 'chrome' 
	}else if(agent.indexOf('safari') > -1) { 
		browser = 'safari'
	}

	return browser;

}

/* Window Popup Open */ 
function winPopupOpen(src,title,option){
	window.open(src,title,option);
}

/* 모바일/PC 체크 */ 
function isMobile(){
	var UserAgent = navigator.userAgent;
	if (UserAgent.match(/iPhone|iPad|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i) != null || UserAgent.match(/LG|SAMSUNG|Samsung/) != null)
	{
		return true;
	}else{
		return false;
	}
}

/* 임의의 영역을 만들어 스크롤바 크기 측정 */ 
function getScrollBarWidth(){
	if($(document).height() > $(window).height()){
		$('body').append('<div id="fakescrollbar" style="width:50px;height:50px;overflow:hidden;position:absolute;top:-200px;left:-200px;"></div>');
		fakeScrollBar = $('#fakescrollbar');
		fakeScrollBar.append('<div style="height:100px;">&nbsp;</div>');
		var w1 = fakeScrollBar.find('div').innerWidth();
		fakeScrollBar.css('overflow-y', 'scroll');
		var w2 = $('#fakescrollbar').find('div').html('html is required to init new width.').innerWidth();
		fakeScrollBar.remove();
		return (w1-w2);
	}
	return 0;
}

/* 브라우저 가로, 세로크기 측정 */ 
function getWindowWidth () {
	return $(window).outerWidth() + getScrollBarWidth() ;
}
function getWindowHeight () {
	return $(window).height() ;
}

/* 브라우저 스크롤위치 측정 */
function getScrollTop () {
	return $(window).scrollTop();
}

/* 브라우저 스크롤 위치 이동 */
function moveScrollTop (top) {
	$("html, body").animate({scrollTop:top},500,"easeInOutExpo");
}

/* addClass Active */
function addActive (activeItem) {
	$(activeItem).addClass("active");
}

/* selector length */
$.exists = function(selector) {
	return ($(selector).length > 0);
}

/* AOS Plugin */
function aosInit () {
	var browserVer = ieVersionCheck();
	if ( !browserVer || browserVer > 9 ) {
		AOS.init({
		 // Global settings:
		  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
		  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
		  initClassName: 'aos-init', // class applied after initialization
		  animatedClassName: 'aos-animate', // class applied on animation
		  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
		  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
		  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
		  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
		  

		  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
		  offset: 150, // offset (in px) from the original trigger point
		  delay: 0, // values from 0 to 3000, with step 50ms
		  duration: 1000, // values from 0 to 3000, with step 50ms
		  easing: 'ease', // default easing for AOS animations
		  once: true, // whether animation should happen only once - while scrolling down
		  mirror: false, // whether elements should animate out while scrolling past them
		  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
		});		
	}
}

/* magnificPopup Plugin */
function magnificPopup (popupGallery) {
	$(popupGallery).magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: true,
		fixedContentPos: true,
		mainClass: 'mfp-with-zoom',
		removalDelay: 500, //delay removal by X to allow out-animation
		  callbacks: {
			beforeOpen: function() {
			  // just a hack that adds mfp-anim class to markup 
			   this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
			   this.st.mainClass = this.st.el.attr('data-effect');
			}
		  },
		closeOnContentClick: true,
		midClick: true, // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
	});
}

/* Custom Scrollbar Plugin (x,y) */
function customScrollX (scrollObject) {
	$(scrollObject).mCustomScrollbar({
		axis:"x",
		theme:"dark"
	});
}
function customScrollY (scrollObject) {
	$(scrollObject).mCustomScrollbar({
		axis:"y",
		theme:"dark"
	});
}

/* PHP Get Parameter  */
function getParameter(strParamName){
	var arrResult = null;
	if(strParamName){
		 arrResult = location.search.match(new RegExp("[&?]" + strParamName + "=(.*?)(&|$)"));
	}
	return arrResult && arrResult[1] ? arrResult[1] : null;
}
function toAnchorParameter (anchor) {
	if ( getParameter(anchor) ) {
		var anchorConTop = $("#"+getParameter(anchor)+"").offset().top;
		var headerHeight = $("#header").height();
		moveScrollTop(anchorConTop-headerHeight);
	}
}


/* Active cycle */ 
function rollingActive (activeList) {
	$(activeList).each(function  (index) {
		$itemList = $(this);
		$item = $itemList.find("li");
		itemLength = $item.length;
		startNum = 0;
		rollingSpeed = $itemList.data("rolling-time");
		
		function visualTime(){
			if(startNum < ( itemLength - 1)){
				startNum++;
			}else{
				startNum = 0;
			}
			visualPlay();
		}
		function visualPlay(){
			$item.each(function(id){
				if(id == startNum){
					$(this).addClass("active"); // li에 클래스 붙이기
				}else{
					$(this).removeClass("active");
				}
			});
		};
		visualPlay();
		visual_timer = setInterval(visualTime,rollingSpeed);
	});
}

function objectFixed ( object, fixedStartTop ) {		// $(클래스이름), 시작되는지점
	if ( getScrollTop() >  fixedStartTop ) {
		if (!($(object).hasClass("fixed"))) {	
			$(object).addClass("fixed");
		}
	}else {
		if ($(object).hasClass("fixed")) {
			$(object).removeClass("fixed");
		}
	}
}

jQuery(function($){
	/* *********************** 브라우저 체크 및 기기체크 ************************ */
	if ( isMobile() ) {
		$("body").addClass("is-mobile").addClass(detectBrowser()+"-browser");
	}else {
		$("body").addClass("is-pc").addClass(detectBrowser()+"-browser");
	}

	/* *********************** 상단 :: 헤더 FIXED ************************ */
	if ($.exists('#header')) {
		$(window).scroll(function  () {
			var startTop = $("#header").height();
			objectFixed($("#header"), startTop);
		});
	}


	/* *********************** 상단 :: 검색 toggle ************************ */
	$(".header-search-box").each(function  () {
		var $searchBox = $(this);
		var $openBtn = $(this).find(".header-search-open-btn");
		var $closeBtn = $(this).find(".header-search-close-btn");
		
		$openBtn.click(function  () {
			$searchBox.addClass("open");
		});
		$closeBtn.click(function  () {
			$searchBox.removeClass("open");
		});
	});

	/* *********************** 하단 :: top버튼 ************************ */
	$(".to-top-btn").each(function  () {
		// top버튼 나오게 (필요한 경우에만 넣으세요)
		if ( $(this).length > 0 ) {
			$(window).scroll(function  () {
				objectFixed($(".to-top-btn"), 0);
			});
		}
		// top버튼 클릭
		$(this).on("click",function  () {
			if ($.exists('#fullpage')) {
				$.fn.fullpage.moveTo(1);
			}else {
				moveScrollTop(0);
			}
            
			return false;
		});
	});
	
	/* *********************** 하단 ::  파트너사 리스트 ************************ */
	$('.footer-partner-list').slick({
		slidesToShow: 7,
		slidesToScroll: 1,
		arrows: true,
		fade: false,
		dots:false,
		autoplay: true,
		speed:500,
		infinite:true,
		autoplaySpeed: 3000,
		easing: 'easeInOutQuint',
		pauseOnHover:false,
		prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="xi-angle-left-min"></i></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="xi-angle-right-min"></i></button>',
		responsive: [
					{
					  breakpoint: 1367,
					  settings: {
						slidesToShow: 5
					  }
					},
					{
					  breakpoint: 1025,
					  settings: {
						slidesToShow: 3
					  }
					}
				  ]
	});

	/* *********************** 하단 :: 모달영역 붙이기 ************************ */
	$("body").append(" <article class='modal-fixed-pop-wrapper'><div class='modal-fixed-pop-inner'><div class='modal-loading'><span class='loading'></span></div><div class='modal-inner-box'><div class='modal-inner-content'></div></div></div></article>");

	/* *********************** 드롭메뉴 공통 ************************ */
	$(".cm-drop-menu-box").each(function  () {
		var $dropBox = $(this);
		var $dropOpenBtn = $(this).children(".cm-drop-open-btn");
		var $dropList = $(this).children(".cm-drop-list");

		$dropOpenBtn.click(function  () {
			$dropList.slideToggle(500);
			$dropBox.toggleClass("open");
			return false;
		});
		$("body").click(function  () {
			if ( $dropBox.data("drop-width") ) {
				if ( getWindowWidth () < $dropBox.data("drop-width")+1 ) {
					dropClose ();
				}
			}else {
				dropClose ();
			}
		});
		function dropClose () {
			$dropList.slideUp(500);
			$dropBox.removeClass("open");
		}
		$(window).resize(function  () {
			if ( getWindowWidth () > $dropBox.data("drop-width") ) {
				$dropList.show();
			}else {
				$dropList.hide();
			}
		});
	});

	/* *********************** 탭 공통 ************************ */
	$(".cm-tab-container").each(function  () {
		var $cmTabList = $(this).children(".cm-tab-list");
		var $cmTabListli = $cmTabList.find("li");
		var $cmConWrapper = $(this).children(".cm-tab-content-wrapper");
		var $cmContent = $cmConWrapper.children(".cm-tab-con");
		
		
		// 탭 영역 숨기고 selected 클래스가 있는 영역만 보이게
		var $selectCon = $cmTabList.find("li.selected").find("a").attr("href");
		var selectTxt = $cmTabList.find("li.selected").find("em").text();
		$cmContent.hide();
		$($selectCon).show();

		$cmTabListli.children("a").click(function  () {
			if ( !$(this).parent().hasClass("selected")) {
				var visibleCon = $(this).attr("href");
				$cmTabListli.removeClass("selected");
				$(this).parent("li").addClass("selected");
				$cmContent.hide();
				$(visibleCon).fadeIn();
			}
			return false;
		});

		// 모바일 버튼이 있을때 추가
		var $cmTabMobileBtn = $(this).find(".cm-tab-m-btn");
		if ($.exists($cmTabMobileBtn)) {
			$cmTabMobileBtn.find("span").text(selectTxt);
			// Mobile Btn Click
			$cmTabMobileBtn.click(function  () {
				$(this).toggleClass("open").siblings().slideToggle();
				return false;
			});

			// Mobile List Click
			$cmTabListli.children("a").click(function  () {
				$cmTabMobileBtn.find("span").text($(this).find("em").text());
				tabListClose();
			});
			$("body").click(function  () {
				tabListClose();
			});
			function tabListClose () {
				if ( getWindowWidth () < 801 ) {
					$cmTabMobileBtn.removeClass("open").siblings().slideUp();
				}
			}
			$(window).resize(function  () {
				if ( getWindowWidth () > 800 ) {
					$cmTabMobileBtn.siblings().show()//.css("display","inline-block");
				}else {
					$cmTabMobileBtn.siblings().hide()//.css("display","none");
				}
			});
		}
	});
});

$(window).load(function  () {
	/* *********************** 한페이지 내에서의 주소 이동 ************************ */
	toAnchorParameter("anchor");	/* 주소~?anchor=content */ 

	/* *********************** AOS Plugin ************************ */
	aosInit ();
});