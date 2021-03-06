	
	<header id="header" class="">
		<div class="gnb-overlay-bg"></div>
		<div id="headerInnerWrap">
			<!-- ****************** 헤더상단 ********************** -->
			<div id="headerInner" class="clearfix area">
				<h1 class="logo"><a href="<?=$site_url?>/"><em class="blind">메인으로</em><img src="<?=$site_host?>/images/common/logo.png" alt="<?=$site_head_title?>" /></a></h1>
				<div class="header-util-box">
					<!-- 통합검색 -->
					<div class="header-search-box">
						<button class="header-search-open-btn" title="검색창열기"><i class="xi-search"></i></button>
						<div class="header-search-inner">
							<!-- <form action=""> -->
								<div class="header-search-inner-box">
									<label for="headerSearch" class="blind">검색</label>
									<input type="text" class="header-search-word" id="headerSearch" placeholder="검색어를 입력하세요" />
									<button class="header-search-btn" type="submit" title="검색" onclick="location.href='<?=$site_url?>/search/'"><i class="xi-search"></i></button>
								</div>
							<!-- </form> -->
							<button class="header-search-close-btn" title="검색창닫기"><i class="xi-close-min"></i></button>
						</div>
					</div>
					<!-- 외국어선택 -->
					<div class="header-lang cm-drop-menu-box" data-drop-event="click">
						<button class="lang-open-btn cm-drop-open-btn"><i class="xi-globus"></i><strong>LANGUAGE</strong><span class="arrow"><i class="material-icons">&#xE313;</i></span></button>
						<ul id="headerLangList" class="cm-drop-list">
							<li><a href="<?=$site_host?>/en/">ENGLISH</a></li>
							<li><a href="<?=$site_host?>/jp/">JAPANESE</a></li>
							<li><a href="<?=$site_host?>/cn/">CHINESE</a></li>
						</ul>
					</div>
					<!-- 사이트맵 버튼 ( 기본 라인 三 ) -->
					<a href="<?=$site_url?>/etc/sitemap.php" class="sitemap-line-btn cm-modal-open-btn" title="사이트맵 열기">
						<em class="blind">사이트맵</em>
						<span class="line line1"></span><span class="line line2"></span><span class="line line3"></span><!-- <span class="line line4"></span> -->
					</a>
				</div>
			</div>
			<!-- ****************** GNB ********************** -->
			<!-- GNB PC  -->
			<nav id="gnb" class="each-menu">
				<h2 class="blind">주메뉴</h2>
				<!-- 
					- 전체메뉴 : class="total-menu"
					- 각각메뉴 : class="each-menu" + <div id="gnbBg"></div> 삭제
				-->
				<!-- <div id="gnbBg"></div> -->
				<ul class="clearfix area">
					<li class="gnb1">
						<a href="<?=$site_url?>/company/sample.php">Menu1</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</div>
					</li>
					<li class="gnb2">
						<a href="">Menu2</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</div>
					</li>
					<li class="gnb3">
						<a href="">Menu3</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</div>
					</li>
					<li class="gnb4">
						<a href="">Menu4</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</div>
					</li>
					<li class="gnb5">
						<a href="">Menu5</a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</div>
	</header>