/* *******************************************************
 * filename : main.js
 * description : 메인에만 사용되는 JS
 * date : 2017-05-30
******************************************************** */


jQuery(function($){
	/* *********************** 메인 비주얼 ************************ */
	// 임의의 영역을 만들어 스크롤바 크기 측정
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

	// 메인 비주얼 높이값 설정
	if ( $("#mainVisual.full-height").length > 0 ) {
	
		scrollWidth = getScrollBarWidth();
		var win_width = $(window).outerWidth() + getScrollBarWidth();

		if ( $("#header").is(".fixed-header") ) {
			var visual_height = $(window).height()	// - $("#header").height(); /* header가 fixed가 아닌경우는 주석해제*/ 
		}else {
			var visual_height = $(window).height()	- $("#header").height();
		}
		
		if ( win_width > 800 ) {
			$("#mainVisual").height(visual_height);
		}else {
			$("#mainVisual").css("height","auto");
		}
		$(window).resize(function  () {
			var win_width = $(window).outerWidth() + getScrollBarWidth();

			if ( $("#header").is(".fixed-header") ) {
				var visual_height = $(window).height()	// - $("#header").height(); /* header가 fixed가 아닌경우는 주석해제*/ 
			}else {
				var visual_height = $(window).height()	- $("#header").height();
			}

			if ( win_width > 800 ) {
				$("#mainVisual").height(visual_height);
			}else {
				$("#mainVisual").css("height","auto");
			}
		});
	}
	
	// 메인 비주얼 zoom-out 효과
	$(".main-visual-con").on('init', function(event, slick) {
		$(".main-visual-item").eq(0).addClass("active-item");
	});
	$(".main-visual-con").on('afterChange', function(event, slick, currentSlide){
        $(".main-visual-item").removeClass("active-item");
		$(this).find(".main-visual-item").eq(currentSlide).addClass("active-item")
    });

	// 메인 비주얼 슬라이드
	$('.main-visual-con').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		dots:true,
		autoplay: true,
		speed:2000,
		infinite:true,
		autoplaySpeed: 4000,
		easing: 'easeInOutQuint',
		pauseOnHover:false,
		zIndex:1
	});
	
	// 스크롤 아이콘 모션
	var $moveIcon = $('.main-scroll-icon');
	var moveIcon = setInterval(function() {
		$moveIcon.animate({opacity:'.5',"margin-bottom":'-=10px'}).animate({opacity:'1',"margin-bottom":'+=10px'})
	}, 1000);
	
	
	/* *********************** 메인 갤러리 슬라이드 ************************ */
	$('.main-gallery-rolling-con > ul').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		fade: false,
		dots:false,
		autoplay: true,
		speed:800,
		infinite:true,
		autoplaySpeed: 3000,
		easing: 'easeInOutQuint',
		pauseOnHover:false,
		prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="material-icons">&#xE314;</i></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="material-icons">&#xE315;</i></button>',
		responsive: [
					{
					  breakpoint: 801,
					  settings: {
						slidesToShow: 3,
						slidesToScroll: 1
					  }
					},
					{
					  breakpoint: 641,
					  settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					  }
					}
				  ]
	});

	/* *********************** 메인 갤러리 + 설명 슬라이드 ************************ */
	$('.main-slide-photo-con').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: false,
		dots:false,
		autoplay: true,
		speed:800,
		infinite:true,
		autoplaySpeed: 3000,
		easing: 'easeInOutQuint',
		pauseOnHover:false,
		prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="material-icons">&#xE314;</i></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="material-icons">&#xE315;</i></button>',
		asNavFor: '.main-slide-text-con'
	});
	$('.main-slide-text-con').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		dots:false,
		autoplay: true,
		speed:800,
		infinite:true,
		autoplaySpeed: 3000,
		easing: 'easeInOutQuint',
		pauseOnHover:false,
		asNavFor: '.main-slide-photo-con'
	});	

	/* *********************** 사이드바 FIXED ************************ */
	$(window).scroll(function  () {
		var scrollHeight = $(window).scrollTop();
		var rightStartTop = $(window).height() / 2;

		if ( scrollHeight > rightStartTop ) {
			$("#rightBar").addClass("fixed");
		}else {
			$("#rightBar").removeClass("fixed");
		}
	});
});
