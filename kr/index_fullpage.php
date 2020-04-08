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
<!-- Fullpage JS  -->
<link rel="stylesheet" type="text/css" href="<?=$site_host?>/css/plugin/jquery.fullPage.css" />
<script type="text/javascript" src="<?=$site_host?>/js/plugin/scrolloverflow.min.js"></script>
<script type="text/javascript" src="<?=$site_host?>/js/plugin/jquery.fullPage.js"></script>
<!-- // -->
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
<div id="wrap" class="fullpage-wrapper">
	<!-- header -->
	<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/header.php"; ?>
	<!-- //header -->
	<!-- container -->
	<div id="fullpage">
		<!-- ****************** 메인비주얼 ********************** -->
		<section id="mainVisual" class="section">
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
		<!-- ****************** 메인 컨텐츠1 ********************** -->
		<section id="" class="section">
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
		</section>
		<!-- ****************** 메인 컨텐츠2  ********************** -->
		<section id="" class="section" style="background:#f2f2f2;">
			<div class="area">
				<h3 class="main-tit"><strong>Giantsoft News</strong></h3>
				<ul class="main-news-list clearfix">
					<li>
						<a href="">
							<span class="bbs-inner-thumb over-img"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" class="img-full" /></span>
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
							<span class="bbs-inner-thumb over-img"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" class="img-full" /></span>
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
							<span class="bbs-inner-thumb over-img"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" class="img-full" /></span>
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
		</section>
		<!-- ****************** 메인 컨텐츠3  ********************** -->
		<section id="" class="section">
			<div class="area">
				<h3 class="main-tit"><strong>Giantsoft News</strong></h3>
				<article class="main-gallery-rolling-con">
					<ul class="bbs-basic-gallery-con">
						<li>
							<a href="">
								<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
								<div class="gallery-txt-con">
									<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
									<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
									<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
								<div class="gallery-txt-con">
									<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
									<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
									<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
								<div class="gallery-txt-con">
									<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
									<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
									<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
								<div class="gallery-txt-con">
									<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
									<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
									<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
								<div class="gallery-txt-con">
									<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
									<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
									<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
								<div class="gallery-txt-con">
									<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
									<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
									<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
								<div class="gallery-txt-con">
									<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
									<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
									<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
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
		</section>
		<section id="" class="section fp-auto-height">
			<!-- footer -->
			<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/footer.php"; ?>
			<!-- //footer -->
		</section>
	</div>
	<!-- //container -->
	
</div>
<!-- //code -->
</body>
</html>
