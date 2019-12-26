<?
$page_num = "01";
$sub_num = "03";
$page_section = "company";
$sub_section = "ceo";
$page_info = "회사소개";
$sub_info = "CEO인사말";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
/* css */

</style>
<script>
/* js */

</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
				<!-- 컨텐츠 내용 -->
				<img src="/images/content/content_ready_img.jpg" alt="현재 페이지는 준비중입니다." style="display:block; margin:0 auto; max-width:100%;" />
				<!-- //컨텐츠 내용 -->
				<article class="">
					<!-- 해당영역으로 영역움직이기 -->
					<br><br>
					<p style="line-height:30px; font-size:16px; color:#222;">메뉴가 fixed되고 누르면 해당영역으로 가는 샘플입니다.</p>
					<article class="fixed-tab-container">
						<aside class="fixed-move-tab-list-wrapper">
							<div class="fixed-move-tab-list">
								<div class="fixed-move-tab-inner">
									<ul class="clearfix">
										<li class="selected"><a href="#fixedContent1">내용1</a></li>
										<li><a href="#fixedContent2">내용2</a></li>
										<li><a href="#fixedContent3">내용3</a></li>
									</ul>
								</div>
							</div>
						</aside>
						<div class="fixed-move-content-wrapper">
							<div class="fixed-tab-content" id="fixedContent1">
								내용1
							</div>
							<div class="fixed-tab-content" id="fixedContent2">
								내용2
							</div>
							<div class="fixed-tab-content" id="fixedContent3">
								내용3
							</div>
						</div>
					</article>
				</article>		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
