<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "./lib/config.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<!--[if lt IE 9]>
	<script type="text/javascript">
		$(document).ready(function  () {
			/* 하위브라우저 popup */
			winPopupOpen("<?=$site_url?>/service/ie8_popup.php","","width=800, height=600, left=0, top=0, resizable=no, scrollbars=no, status=no;");
		});
	</script>
<![endif]-->

<script>
	$(function  () {
		dep1 = 0,
		dep2 = 0;
	})
</script>
<script type="text/javascript" src="<?=$site_host?>/js/nav.js"></script>
<script type="text/javascript" src="<?=$site_host?>/js/main.js"></script>
</head>

<body>
<!--[if lt IE 7]>
<p class="cm-alert-ie">현재 웹브라우저에서는 사이트가 정상적으로 표시되지 않을 수 있습니다. <strong><a href="http://browsehappy.com/" target="_blank">여기를 클릭</a></strong>하여 웹브라우저를 업그레이드 하세요.</p>
<![endif]-->
<!-- accessibility -->
<div class="cm-accessibility">
	<a href="#mainContainer">본문바로가기</a>
</div>
<!-- //accessibility -->

<!-- code -->
<div id="wrap">
	<!-- header -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/header.php"; ?>
	<!-- //header -->
	<!-- container -->
	<div id="mainContainer">
		<!-- ****************** 메인비주얼 ********************** -->
		<section id="mainVisual" class="full-height">	<!-- 메인 비주얼 full 높이 해제 : full-height 클래스 빼주세요  -->
			<div class="main-visual-con">
				<div class="main-visual-item">
					<div class="main-visual-pc-img" style="background:#fff url(/images/main/main_visual_01.jpg) no-repeat 50% 50%;"></div>
					<div class="main-visual-m-img"><img src="<?=$site_host?>/images/main/main_visual_01_m.jpg" alt="" /></div>	<!-- 모바일이미지 -->
					<div class="main-visual-txt-con">
						<div class="main-visual-txt-inner area-box">
							<strong class="main-visual-txt1">giantsoft Stand in the world 11</strong>
							<p class="main-visual-txt2"><b>거인소프트</b> 반응형 </p>
							<p class="main-visual-txt3">언제나 처음 시작하였던 다짐과 포부를 가슴 깊이 되새기고,<br>미래를 열어가겠습니다. </p>
							<a href="" class="main-visual-more-btn">DETAIL VIEW</a>
						</div>
					</div>
				</div>
				<div class="main-visual-item">
					<div class="main-visual-pc-img" style="background:#fff url(/images/main/main_visual_02.jpg) no-repeat 50% 50%;"></div>
					<div class="main-visual-m-img"><img src="<?=$site_host?>/images/main/main_visual_02_m.jpg" alt="" /></div>	<!-- 모바일이미지 -->
					<div class="main-visual-txt-con">
						<div class="main-visual-txt-inner area-box">
							<strong class="main-visual-txt1">giantsoft Stand in the world 22</strong>
							<p class="main-visual-txt2"><b>거인소프트</b> 반응형 </p>
							<p class="main-visual-txt3">언제나 처음 시작하였던 다짐과 포부를 가슴 깊이 되새기고,<br>미래를 열어가겠습니다. </p>
							<a href="" class="main-visual-more-btn">DETAIL VIEW</a>
						</div>
					</div>
				</div>
			</div>
			<div class="main-scroll-icon">
				<span>SCROLL DOWN</span>
			</div>
		</section>

		<!-- ****************** 메인컨텐츠 ********************** -->
		<section id="mainContent">
			<!-- ****************** 메인컨텐츠 1 (퀵메뉴) ********************** -->
			<article id="mainContent1">
				<div class="area-box">
					<h3 class="main-tit"><strong>Giantsoft News</strong></h3>
					<ul class="main-quick-menu-list clearfix">
						<li class="quick-menu-item quick-menu-item1">
							<a href="">
								<div class="quick-menu-item-inner">
									<p class="item-txt-box">
										<strong class="item-tit">Giantsoft Business</strong>
										<span class="item-sub-tit">Giantsoft Stand in the world</span>
										<span class="item-sub-txt">1200이하 800이상 에서는 비율대로 줄어든다</span>
									</p>
								</div>
								<div class="over-thum"></div>
							</a>
						</li>
						<li class="quick-menu-item quick-menu-item2">
							<a href="">
								<div class="quick-menu-item-inner">
									<p class="item-txt-box">
										<strong class="item-tit">Giantsoft Business</strong>
										<span class="item-sub-tit">Giantsoft Stand in the world</span>
										<span class="item-sub-txt">1200이하 800이상 에서는 비율대로 줄어든다</span>
									</p>
								</div>
								<div class="over-thum"></div>
							</a>
						</li>
						<li class="quick-menu-item quick-menu-item3">
							<a href="">
								<div class="quick-menu-item-inner">
									<p class="item-txt-box">
										<strong class="item-tit">Giantsoft Business</strong>
										<span class="item-sub-tit">Giantsoft Stand in the world</span>
										<span class="item-sub-txt">1200이하 800이상 에서는 비율대로 줄어든다</span>
									</p>
								</div>
								<div class="over-thum"></div>
							</a>
						</li>
						<li class="quick-menu-item quick-menu-item4">
							<a href="">
								<div class="quick-menu-item-inner">
									<p class="item-txt-box">
										<strong class="item-tit">Giantsoft Business</strong>
										<span class="item-sub-tit">Giantsoft Stand in the world</span>
										<span class="item-sub-txt">1200이하 800이상 에서는 비율대로 줄어든다</span>
									</p>
								</div>
								<div class="over-thum"></div>
							</a>
						</li>
					</ul>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 2 (갤러리) ********************** -->
			<article id="mainContent2">
				<div class="area">
					<h3 class="main-tit"><strong>Giantsoft News</strong></h3>
					<ul class="main-news-list clearfix">
						<li>
							<a href="">
								<span class="bbs-inner-thumb"><img src="http://design.giantsoft.co.kr/images/test/thum/test14.jpg" alt="" /></span>
								<div class="bbs-inner-con">
									<strong class="bbs-category">카테고리</strong>
									<strong class="bbs-tit line2">Giantsoft Sttand in the world</strong>
									<p class="bbs-content line3">
										홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 제작하는것이 이슈가 되고 있습니다. 보다 실용적이며 효과적인 구축하기위한 우리의 노력은 오늘도 계속되고 있습니다.
									</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<span class="bbs-inner-thumb"></span>
								<div class="bbs-inner-con">
									<strong class="bbs-category">카테고리</strong>
									<strong class="bbs-tit line2">Giantsoft Sttand in the world</strong>
									<p class="bbs-content line3">
										홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 제작하는것이 이슈가 되고 있습니다. 보다 실용적이며 효과적인 구축하기위한 우리의 노력은 오늘도 계속되고 있습니다.
									</p>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<span class="bbs-inner-thumb"></span>
								<div class="bbs-inner-con">
									<strong class="bbs-category">카테고리</strong>
									<strong class="bbs-tit">제목이 길어도 한줄로 표시됩니다</strong>
									<p class="bbs-content line3">
										홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 제작하는것이 이슈가 되고 있습니다. 보다 실용적이며 효과적인 구축하기위한 우리의 노력은 오늘도 계속되고 있습니다.
									</p>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 3 (갤러리 슬라이드) ********************** -->
			<article id="mainContent3">
				<div class="area">
					<h3 class="main-tit"><strong>Giantsoft News</strong></h3>
					<article class="main-gallery-rolling-con">
						<ul class="bbs-basic-gallery-con">
							<li>
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="http://design.giantsoft.co.kr/images/test/thum/test1.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="http://design.giantsoft.co.kr/images/test/thum/test2.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="http://design.giantsoft.co.kr/images/test/thum/test14.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="http://design.giantsoft.co.kr/images/test/thum/test4.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="http://design.giantsoft.co.kr/images/test/thum/test5.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="http://design.giantsoft.co.kr/images/test/thum/test13.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="http://design.giantsoft.co.kr/images/test/thum/test7.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<div class="gallery-thum-box"><span class="gallery-thum"><img src="http://design.giantsoft.co.kr/images/test/thum/test8.jpg" alt="" /></span></div>
									<div class="gallery-txt-con">
										<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
										<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
										<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
									</div>
								</a>
							</li>
						</ul>
					</article>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 4 (갤러리 + 설명 슬라이드) ********************** -->
			<article id="mainContent3">
				<div class="area">
					<h3 class="main-tit"><strong>Giantsoft News</strong></h3>
					<div class="main-slide-box clearfix">
						<div class="main-slide-photo-con">
							<div class="main-slide-photo-item"><div class="slide-photo-inner"><img src="" alt="" /><p style="position:absolute; top:0; left:0; color:#fff; font-size:50px;">1 삭제하세여</p></div></div>
							<div class="main-slide-photo-item"><div class="slide-photo-inner"><img src="" alt="" /><p style="position:absolute; top:0; left:0; color:#fff; font-size:50px;">2 삭제하세여</p></div></div>
							<div class="main-slide-photo-item"><div class="slide-photo-inner"><img src="" alt="" /><p style="position:absolute; top:0; left:0; color:#fff; font-size:50px;">3 삭제하세여</p></div></div>
						</div>
						<div class="main-slide-text-con">
							<div class="main-slide-text-item">
								<strong class="main-slide-tit">Giantsoft Stand in the world 1111</strong>
								<p class="main-slide-txt">
									홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 
									제작하는 것이이슈가 되고 있습니다. 보다 실용적이며 효과적인 시스템을 구축하기위한 우리의 노력은 
									오늘도 계속되고 있습니다.<br><br>

									홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 
									제작하는 것이이슈가 되고 있습니다. 보다 실용적이며 효과적인 시스템을 구축하기위한 우리의 
									노력은 오늘도 계속되고 있습니다.
								</p>
								<a href="" class="main-slide-btn">자세히보기</a>
							</div>
							<div class="main-slide-text-item">
								<strong class="main-slide-tit">Giantsoft Stand in the world 2222</strong>
								<p class="main-slide-txt">
									홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 
									제작하는 것이이슈가 되고 있습니다. 보다 실용적이며 효과적인 시스템을 구축하기위한 우리의 노력은 
									오늘도 계속되고 있습니다.<br><br>

									홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 
									제작하는 것이이슈가 되고 있습니다. 보다 실용적이며 효과적인 시스템을 구축하기위한 우리의 
									노력은 오늘도 계속되고 있습니다.
								</p>
								<a href="" class="main-slide-btn">자세히보기</a>
							</div>
							<div class="main-slide-text-item">
								<strong class="main-slide-tit">Giantsoft Stand in the world 3333</strong>
								<p class="main-slide-txt">
									홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 
									제작하는 것이이슈가 되고 있습니다. 보다 실용적이며 효과적인 시스템을 구축하기위한 우리의 노력은 
									오늘도 계속되고 있습니다.<br><br>

									홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 
									제작하는 것이이슈가 되고 있습니다. 보다 실용적이며 효과적인 시스템을 구축하기위한 우리의 
									노력은 오늘도 계속되고 있습니다.
								</p>
								<a href="" class="main-slide-btn">자세히보기</a>
							</div>
						</div>
					
					</div>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 5 (FIXED 배너) ********************** -->
			<article id="mainContent5">
				<div class="main-fixed-con">
					<p class="main-fixed-sub-tit">giantsoft Stand in the world</p>
					<h3 class="main-fixed-tit">거인소프트반응형</h3>
					<p class="main-fixed-txt">스크롤 시 배경이 고정되고 텍스트만 스크롤됨  / 스크롤 시 배경이 고정되고 텍스트만 스크롤됨  / 스크롤 시 배경이 고정되고 텍스트만 스크롤됨 </p>
					<a href="" class="main-fixed-more-btn trans400">COMPANY VIEW</a>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 6 (사각, 원 배너들) ********************** -->
			<article id="mainContent6">
				<div class="area">
					<ul class="main-banner-list-con">
						<li>
							<a href="">
								<div class="banner-thumb over-img"><img src="http://design.giantsoft.co.kr/images/test/thum/test5.jpg" alt="" /></div>
								<div class="banner-inner-box">
									<p class="banner-tit">giantsoft Stand in the world</p>
									<strong class="banner-sub-tit">거인소프트 베너</strong>
									<span class="banner-sub-txt">오버시 이미지 확대</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="banner-thumb over-img"><img src="" alt="" /></div>
								<div class="banner-inner-box">
									<p class="banner-tit">giantsoft Stand in the world</p>
									<strong class="banner-sub-tit">거인소프트 베너</strong>
									<span class="banner-sub-txt">오버시 이미지 확대</span>
								</div>
							</a>
						</li>
					</ul>
					<ul class="custom-gallery-list-con04 clearfix">
						<li>
							<a href="" class="circle-item">
								<span class="circle-thumb"><img src="http://design.giantsoft.co.kr/images/test/thum/test14.jpg" alt=""></span>
								<div class="circle-info">
									<strong class="circle-cate">카테고리</strong>
									<p class="off-txt circle-tit">
										제목이 들어갑니다
									</p>
									<div class="on-txt">
										<p class="circle-tit">제목 or 서브타이틀이 들어갑니다</p>
									</div>
									<span class="more-btn"><i class="material-icons"></i></span>
								</div>
							</a>
						</li>
						<li>
							<a href="" class="circle-item">
								<span class="circle-thumb"><img src="http://design.giantsoft.co.kr/images/test/thum/test5.jpg" alt=""></span>
								<div class="circle-info">
									<strong class="circle-cate">카테고리</strong>
									<p class="off-txt circle-tit">
										제목이 들어갑니다
									</p>
									<div class="on-txt">
										<p class="circle-tit">제목 or 서브타이틀이 들어갑니다</p>
									</div>
									<span class="more-btn"><i class="material-icons"></i></span>
								</div>
							</a>
						</li>
						<li>
							<a href="" class="circle-item">
								<span class="circle-thumb"><img src="http://design.giantsoft.co.kr/images/test/thum/test12.jpg" alt=""></span>
								<div class="circle-info">
									<strong class="circle-cate">카테고리</strong>
									<p class="off-txt circle-tit">
										제목이 들어갑니다
									</p>
									<div class="on-txt">
										<p class="circle-tit">제목 or 서브타이틀이 들어갑니다</p>
									</div>
									<span class="more-btn"><i class="material-icons"></i></span>
								</div>
							</a>
						</li>
						<li>
							<a href="" class="circle-item">
								<span class="circle-thumb"><img src="http://design.giantsoft.co.kr/images/test/thum/test1.jpg" alt=""></span>
								<div class="circle-info">
									<strong class="circle-cate">카테고리</strong>
									<p class="off-txt circle-tit">
										제목이 들어갑니다
									</p>
									<div class="on-txt">
										<p class="circle-tit">제목 or 서브타이틀이 들어갑니다</p>
									</div>
									<span class="more-btn"><i class="material-icons"></i></span>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 7 (100% 풀배너) ********************** -->
			<article id="mainContent7">
				<div class="main-full-banner-box clearfix">
					<div class="main-full-banner-left area">
						<div class="full-banner-inner">
							<strong>Giantsoft Stand in the world</strong>
							<p>언제나 처음 시작하였던 다짐과 포부를 가슴 깊이 되새기고,<br>미래를 열어가겠습니다. </p>
						</div>
					</div>
					<div class="main-full-banner-right">
						<div class="full-banner-inner">
							<strong>Giantsoft Stand in the world</strong>
							<p>언제나 처음 시작하였던 다짐과 포부를 가슴 깊이 되새기고,<br>미래를 열어가겠습니다. </p>
						</div>
					</div>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 8 (Global Network)********************** -->
			<article id="mainContent8">
				<div class="area">
					<h3 class="main-tit">
						<strong>giantsoft Global Network</strong>
						<span class="main-sub-tit">에니메이션 위치 이동시 퍼블리셔에게 문의 또는 각자 해결/ 지도이미지는 자유롭게 편집</span>
					</h3>
					<div class="global-map-con">
						<img src="<?=$site_host?>/images/content/global_map.png" alt="세계지도" />
						<div class="global-nation-box">
							<!-- 기준은 left :50%; top:0; 이며, margin-left값과 top으로 위치 조정해주셔야 합니다. -->
							<div class="nation-circle" title="국가1" style="margin-left:344px; top:222px"><span></span><span></span><span></span><span></span><i></i><p>giantsoft Global Network 국가1</p></div>
							<div class="nation-circle" title="국가2" style="margin-left:-359px; top:386px"><span></span><span></span><span></span><span></span><i></i><p>giantsoft Global Network 국가2</p></div>
							<div class="nation-circle" title="국가3" style="margin-left:-289px; top:334px"><span></span><span></span><span></span><span></span><i></i><p>giantsoft Global Network 국가3</p></div>
							<div class="nation-circle" title="국가4" style="margin-left:-501px; top:69px"><span></span><span></span><span></span><span></span><i></i><p>giantsoft Global Network 국가4</p></div>
							<div class="nation-circle" title="국가5" style="margin-left:-59px; top:166px"><span></span><span></span><span></span><span></span><i></i><p>giantsoft Global Network 국가5</p></div>
						</div>
					</div>
					<div class="global-map-con-m">
						<img src="<?=$site_host?>/images/content/global_map_m.jpg" alt="세계지도" />
					</div>
				</div>
			</article>
			<!-- ****************** 메인컨텐츠 9 (공지사항 게시판 + 배너)********************** -->
			<article id="mainContent9">
				<div class="area clearfix">
					<div class="main-board-box">
						<h3 class="main-board-tit">Giantsoft News</h3>
						<ul class="main-board-con">
							<li><a href="" class="bbs-tit">홈페이지를 오픈하였습니다. 많은 이용 부탁드립니다</a><span class="bbs-date">2018-03-29</span></li>
							<li><a href="" class="bbs-tit">홈페이지를 오픈하였습니다. 많은 이용 부탁드립니다 홈페이지를 오픈하였습니다. 많은 이용 부탁드립니다</a><span class="bbs-date">2018-03-29</span></li>
							<li><a href="" class="bbs-tit">홈페이지를 오픈하였습니다. 많은 이용 부탁드립니다</a><span class="bbs-date">2018-03-29</span></li>
							<li><a href="" class="bbs-tit">홈페이지를 오픈하였습니다. 많은 이용 부탁드립니다</a><span class="bbs-date">2018-03-29</span></li>
							<li><a href="" class="bbs-tit">홈페이지를 오픈하였습니다. 많은 이용 부탁드립니다</a><span class="bbs-date">2018-03-29</span></li>
						</ul>
						<a href="" class="board-more-btn" title="공지사항 페이지로 이동"><i class="material-icons">&#xE8DE;</i></a>
					</div>
					<div class="main-board-banner-con">
						<ul>
							<li>
								<a href="">
									<span class="main-board-banner-thumb"><img src="http://design.giantsoft.co.kr/images/test/thum/gallery_test_img1.jpg" alt="" /></span>
									<div class="main-board-thumb-cover">
										<p><strong>Giantsoft News</strong></p>
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<span class="main-board-banner-thumb"><img src="" alt="" /></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</article>
		</section>
		
		<!-- ****************** 퀵메뉴 ********************** -->
		<aside id="rightBar">
			<ul>
				<li><a href="" title="○○페이지 바로가기"><i class="material-icons">&#xE560;</i></a></li>
				<li><a href="" title="○○페이지 바로가기"><i class="material-icons">&#xE422;</i></a></li>
				<li><a href="" title="○○페이지 바로가기"><i class="material-icons">&#xE873;</i></a></li>
				<li><a href="" title="○○페이지 바로가기"><i class="material-icons">&#xE8B8;</i></a></li>
				<li><a href="" title="○○페이지 바로가기"><i class="material-icons">&#xE3B0;</i></a></li>
			</ul>
		</aside>
	</div>
	<!-- //container -->
	<!-- footer -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/footer.php"; ?>
	<!-- //footer -->
</div>
<!-- //code -->
</body>
</html>
