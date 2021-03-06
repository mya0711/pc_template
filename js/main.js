/* *******************************************************
 * filename : main.js
 * description : 메인에만 사용되는 JS
 * date : 2020-02-24
******************************************************** */


jQuery(function($){
	if ($.exists('#fullpage')) {
		$('#fullpage').fullpage({
			css3: true,
			fitToSection: false,
			navigation: true,
			scrollBar:false,
			navigationPosition: 'right',
			navigationTooltips: ['Content01', 'Content02', 'Content03', 'Content04'],
			responsiveWidth: 1024,
			responsiveHeight : 750,
			onLeave : function(index, nextIndex, direction){
				if( nextIndex == 2 ){
					setTimeout(function  () {
						$("#mainContent1").find(".aos-init").addClass('aos-animate');
					},300);
				}else if( nextIndex == 3 ){
					setTimeout(function  () {
						$("#mainContent2").find(".aos-init").addClass('aos-animate');
					},300);
				}else if( nextIndex == 4 ){
					setTimeout(function  () {
						$("#mainContent3").find(".aos-init").addClass('aos-animate');
					},300);

				}else if( nextIndex == 5 ){
					/* 5번째 섹션 ( 영역 도달했을때 Slick autoplay 재생시킬때 ) */
					setTimeout(function  () {
						$('.footer-partner-list').slick("play");
					},600);

				}
				
				// 왼쪽leftBar 색상변경
				if( nextIndex > 1 ){
					$("#fp-nav").addClass("black");
				}else {
					$("#fp-nav").removeClass("black");
				}
			}
		});
	}
	/* *********************** 메인 비주얼 ************************ */
	// 메인 비주얼 높이값 설정
	if ($.exists('#mainVisual.full-height')) {
		mainVisualHeight();
		$(window).on('resize', mainVisualHeight);

		function mainVisualHeight () {
			var visual_height = getWindowHeight()	- $("#header").height();	// header가 fixed or absolute일경우 - $("#header").height() 삭제
			if ( getWindowWidth() > 800 ) {
				$("#mainVisual").height(visual_height);
			}else {
				$("#mainVisual").css("height","auto");
			}
		}
	}
	
	// 메인 비주얼 슬라이드
	var $mainVisualItem = $(".main-visual-con");
	var visualPausePlay = true;		// Pause, play 사용시 변경

	$mainVisualItem.on('init', function(event, slick) {
		$(".main-visual-item").eq(0).addClass("active-item");
	});
	$mainVisualItem.on('beforeChange', function(event, slick, currentSlide, nextSlide) {	
		$(".main-visual-item").removeClass("active-item");
		$(this).find(".main-visual-item").eq(nextSlide).addClass("active-item")
	});
	$mainVisualItem.slick({
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
		zIndex:1,
		prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="xi-angle-left-thin"></i></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="xi-angle-right-thin"></i></button>'
	});

	$mainVisualItem.find(".slick-dots").wrap("<aside class='slick-dots-wrapper'><div class='area-box'></div></aside>");

	if ( visualPausePlay ) {
		$(".slick-dots-wrapper").children().append("<span class='slick-control-btns'><button class='slick-pause-btn' title='일시정지'><i class='xi-pause'></i></button><button class='slick-play-btn' title='재생'><i class='xi-play-circle-o'></i></button></span>");
	
		// 일시정지, 재생버튼
		$(document).on("click",".slick-pause-btn",function  () {
			$mainVisualItem.slick("slickPause");
			$(this).hide();
			$(".slick-play-btn").show();
		});
		$(document).on("click",".slick-play-btn",function  () {
			$mainVisualItem.slick("slickPlay");
			$(this).hide();
			$(".slick-pause-btn").show();
		});
	}

	// 스크롤 아이콘 모션
	if ($.exists('.main-scroll-icon')) {
		var $moveIcon = $('.main-scroll-icon');
		var moveIcon = setInterval(function() {
			$moveIcon.animate({opacity:'.5',"margin-bottom":'-=10px'}).animate({opacity:'1',"margin-bottom":'+=10px'})
		}, 1000);
	}
	
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
	if ($.exists('#rightBar')) {
		$(window).scroll(function  () {
			var rightStartTop = $(window).height() / 2;
			objectFixed($("#rightBar"), rightStartTop);
		});
	}
});
