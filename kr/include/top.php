<script>
	$(function  () {
		<? if ( $page_section == "company" ) { ?>	//  1번째  대메뉴 인덱스
			dep1 = 1
		<? }else if ( $page_section == "" ) { ?>	//  2번째 대메뉴 인덱스
			dep1 = 2
		<? }else if ( $page_section == "" ) { ?>	//   3번째  대메뉴 인덱스
			dep1 = 3
		<? }else if ( $page_section == "" ) { ?> //  4번째  대메뉴 인덱스
			dep1 = 4	
		<? }else { ?>
			dep1 = 0	
		<? } ?>
		
		// dep1 = <?=$page_num?>,
		dep2 = <?=$sub_num?>;

		// sub2_num 변수가 있을때 ( 3차메뉴 )
		<? if( $sub2_num ){ ?>
				dep3 = <?=$sub2_num?>;
		<? } else { ?>
				dep3 = "";
		<? } ?>

	})
</script>
<script type="text/javascript" src="<?=$site_host?>/js/nav.js"></script>
<script type="text/javascript" src="<?=$site_host?>/js/sub.js"></script>
</head>

<body>
<!--[if lt IE 7]>
<p class="cm-alert-ie">현재 웹브라우저에서는 사이트가 정상적으로 표시되지 않을 수 있습니다. <strong><a href="http://browsehappy.com/" target="_blank">여기를 클릭</a></strong>하여 웹브라우저를 업그레이드 하세요.</p>
<![endif]-->
<!-- accessibility -->
<div class="cm-accessibility">
	<a href="#container">본문바로가기</a>
</div>
<!-- //accessibility -->

<!-- code -->
<div id="wrap">
	<!-- header -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/header.php"; ?>
	<!-- //header -->
	<!-- container -->
	<div id="container">
		<?if($page_section != "search" ){?>
		<!-- visual -->
		<section id="visual" class="sub-visual-<?=$page_section?>">
			<div class="visual-img-con" style="background:#eee url(<?=$site_host?>/images/layout/sub_visual_<?=$page_section?>.jpg) no-repeat 50% 0%"></div>
			<div class="area visual-txt-con">
				<div class="table-cell-layout">
					<div class="visual-txt-container">
						<h2 class="visual-tit trans400">
							<?=$page_info?>
						</h2>
						<p class="visual-sub-txt"><?=$page_section?> / 서브텍스트가 들어갑니다.</p>
						<a href="#" class="sub-page-controls-btn sub-prev-page-btn"><span><i class="material-icons">&#xE15B;</i></span><strong class="sub-page-name"></strong></a>
						<a href="#" class="sub-page-controls-btn sub-next-page-btn"><strong class="sub-page-name"></strong><span><i class="material-icons">&#xE15B;</i></span></a>	
					</div>
				</div>
			</div>
		</section>
		<!-- //visual -->
		<?}?>
		
		<?if($page_section != "search" ){?>
		<!-- 서브메뉴1 -->
		<aside id="topMenu01" class=""><!--  서브메뉴가 fixed될때 fixed-sub-menu 추가 -->
			<div class="side-menu-inner">
				<div class="area">
					<ul class="snb sub-menu-<?=$page_section?> clearfix">
						<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_".$page_section.".php"; ?>
					</ul>
				</div>
			</div>
		</aside>
		<!-- // -->
		<!-- 서브메뉴 2 -->
		<aside id="topMenu02" class=""><!--  서브메뉴가 fixed될때 fixed-sub-menu 추가 -->
			<div class="side-menu-inner">
				<div class="area">
					<ul class="snb sub-menu-<?=$page_section?> clearfix">
						<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_".$page_section.".php"; ?>
					</ul>
				</div>
			</div>
		</aside>
		<!-- // -->
		<!-- 서브메뉴 3 -->
		<aside id="topMenu03" class=""><!--  서브메뉴가 fixed될때 fixed-sub-menu 추가 -->
			<div class="side-menu-inner">
				<div class="area">
					<ul class="snb sub-menu-<?=$page_section?>">
						<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_".$page_section.".php"; ?>
					</ul>
				</div>
			</div>
		</aside>
		<!-- // -->
		<!-- 서브메뉴 3(PC,모바일 모두사용가능) -->
		<aside id="topMenu04" class=""><!--  서브메뉴가 fixed될때 fixed-sub-menu 추가 -->
			<div class="side-menu-inner">
				<div class="cm-top-menu area clearfix">
					<a href="<?=$site_url?>/" class="location-to-home-btn" title="메인으로"><i class="material-icons">&#xE88A;</i></a>
					<div class="menu-location location1">
						<a href="javascript:;" class="cur-location">
							<span><?=$page_info?></span>
							<i class="material-icons arrow">&#xE313;</i>
						</a>
						<ul class="location-menu-con">
							<li><a href="<?=$site_url?>/">대메뉴1</a></li>
							<li><a href="<?=$site_url?>/">대메뉴2</a></li>
							<li><a href="<?=$site_url?>/">대메뉴3</a></li>
						</ul>
					</div>
					<div class="menu-location location2">
						<a href="javascript:;" class="cur-location">
							<span><?=$sub_info?></span>
							<i class="material-icons arrow">&#xE313;</i>
						</a>
						<ul class="location-menu-con">
							<?  include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_".$page_section.".php"; ?>
						</ul>
					</div>
				</div>
			</div>
		</aside>
		<!-- // -->
		<?}?>
		<!-- middleArea -->
		<div id="middleArea" class="area clearfix">
			<aside id="sideMenu">
				<div class="side-menu-tit"><h3><?=$page_info?></h3></div>
				<ul class="snb sub-menu-<?=$page_section?>">
					<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_".$page_section.".php"; ?>
				</ul>
			</aside>
			<!-- content -->
			<section id="content">
				<!-- 상단정보 (센터정렬) -->
				<aside id="contentInfoCon" class="content-info-style01">
					<h3 class="content-tit"><?if($sub_info){?><?=$sub_info?><?}else{?><?=$page_info?><?}?></h3>
					<p class="content-sub-tit">언제나 처음 시작하였던 다짐과 포부로 미래를 열어가겠습니다. </p>
				</aside>
				<!-- 상단정보 (왼쪽정렬) -->
				<aside id="contentInfoCon" class="content-info-style02">
					<h3 class="content-tit"><?if($sub_info){?><?=$sub_info?><?}else{?><?=$page_info?><?}?></h3>
					<p class="content-sub-tit">언제나 처음 시작하였던 다짐과 포부로 미래를 열어가겠습니다. </p>
				</aside>
				<!-- 상단정보 (왼쪽타이틀 +오른쪽 location) -->
				<aside id="contentInfoCon" class="content-info-style03 clearfix">
					<h3 class="content-tit"><?if($sub_info){?><?=$sub_info?><?}else{?><?=$page_info?><?}?></h3>
					<div class="location">
						<ul>
							<li><a href="<?=$site_url?>/index.php" title="HOME"><i class="material-icons">&#xE88A;</i></a></li>
							<li><?=$page_info?></li>
							<?if($sub_info){?><li><?=$sub_info?></li><?}?>
						</ul>
					</div>
				</aside>