<?
$page_num = "01";
$sub_num = "01";
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
#content{max-width:none;}
@media all and (max-width:1220px){
	#content{margin:0 -15px;}
}
</style>
<script>
/* js */

</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
				<!-- 준비중 -->
				<p style="line-height:30px; font-size:16px; color:#222; padding:10px; background-color:#f2f2f2; border:1px solid #aaa; margin:30px auto 15px" class=""><i class="xi-message-o" style="font-size:20px; position:relative; top:3px; margin-right:5px; color:red;"></i>컨텐츠 내용이 없을때는 페이지생성후 하단이미지 사용바랍니다.</p>
				<img src="<?=$site_url?>/images/content/content_ready_img.png" alt="서비스 준비중입니다." style="display:block; margin:0 auto; max-width:100%;" />
				<!-- // 준비중 -->

				<div class="company-inner">
					<p style="line-height:30px; font-size:16px; color:#222; padding:10px; background-color:#f2f2f2; border:1px solid #aaa; margin:30px auto 15px"><i class="xi-message-o" style="font-size:20px; position:relative; top:3px; margin-right:5px; color:red;"></i>국문이미지는 $site_url 사용 부탁드립니다!</p>
					<img src="<?=$site_url?>/images/content/temp_img.jpg" alt="" style="display:block; margin:0 auto; max-width:100%;" />
				</div>

				<!-- Wide Section -->
				<section class="company-wrapper" style="background-color:#eee;">
					<div class="company-inner ">
						<p style="line-height:30px; font-size:16px; color:#222; padding:10px; background-color:#f2f2f2; border:1px solid #aaa; margin:30px auto 15px"><i class="xi-message-o" style="font-size:20px; position:relative; top:3px; margin-right:5px; color:red;"></i>Wide컨텐츠가 들어갔을때는 #content{max-width:none; } 사용합니다</p>
						<img src="<?=$site_url?>/images/content/content_ready_img.png" alt="서비스 준비중입니다." style="display:block; margin:0 auto; max-width:100%;" />
					</div>
				</section>
				<!-- //Wide Section -->
				
				<!-- 테이블 스크롤 템플릿 -->
				<article class="">
					<p style="line-height:30px; font-size:16px; color:#222; padding:10px; background-color:#f2f2f2; border:1px solid #aaa; margin:30px auto 15px"><i class="xi-message-o" style="font-size:20px; position:relative; top:3px; margin-right:5px; color:red;"></i>테이블영역 or 이미지를 모바일로 줄었을때 스크롤붙는 샘플입니다</p>
					<div class="custom-scrollbar-wrapper">
						<div class="scroll-object-box">
							<table class="test-table scroll-object"><!-- 테이블 scroll-object -->
								<tbody>
									<colgroup>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
										<col style="width:10%;"/>
									</colgroup>
									<tr>
										<th>1</th>
										<th>2</th>
										<th>3</th>
										<th>4</th>
										<th>5</th>
										<th>6</th>
										<th>7</th>
										<th>8</th>
										<th>9</th>
										<th>10</th>
									</tr>
									<tr>
										<td>복잡한</td>
										<td>테이블</td>
										<td>모바일로 줄일때</td>
										<td>스크롤이 생기며</td>
										<td>터치로</td>
										<td>이동이</td>
										<td>가능</td>
										<td>합니다</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="custom-scrollbar-cover">
							<div class="scroll-cover-txt">
								<i class="material-icons">&#xe913;</i>
								<p>좌우로 드래그 해보세요</p>
							</div>
						</div>
					</div>
				</article>
				<!-- // -->

				
					
				<!-- MagnificPopup -->
				<article class="">
					<br><br>
					<p style="line-height:30px; font-size:16px; color:#222; padding:10px; background-color:#f2f2f2; border:1px solid #aaa; margin:30px auto 15px">MagnificPopup 플러그인 Sample입니다. 모달 팝업 필요시 사용부탁드립니다.</p>
					<div class="popup-gallery">
						MagnificPopup Sample<br><br>
						<a href="/images/main/main_visual_01.jpg"><img src="/images/main/main_visual_01.jpg" alt="" width="100" /></a>
						<a href="/images/main/main_visual_02.jpg"><img src="/images/main/main_visual_02.jpg" alt="" width="100" /></a>
						<a href="/images/main/main_visual_01.jpg"><img src="/images/main/main_visual_01.jpg" alt="" width="100" /></a>
						<a href="/images/main/main_visual_02.jpg"><img src="/images/main/main_visual_02.jpg" alt="" width="100" /></a>
					</div>
				</article>
				<!-- // -->

				<!-- 해당영역으로 영역움직이기 -->
				<article class="">
					<br><br>
					<p style="line-height:30px; font-size:16px; color:#222; padding:10px; background-color:#f2f2f2; border:1px solid #aaa; margin:30px auto 15px">
						<i class="xi-message-o" style="font-size:20px; position:relative; top:3px; margin-right:5px; color:red;"></i>PC 탭 샘플입니다.
					</p>
					<section id="" class="cm-tab-container">
						<aside class="sub-cm-tab-list cm-tab-list">
							<a href="javascript:;" class="cm-tab-m-btn"><span></span><i class="xi-caret-down-min arrow"></i></a>
							<ul class="clearfix">
								<li class="selected"><a href="#tabCon01"><em>탭1</em></a></li>
								<li><a href="#tabCon02"><em>탭2</em></a></li>
								<li><a href="#tabCon03"><em>탭3</em></a></li>
								<li><a href="#tabCon04"><em>탭4</em></a></li>
								<li><a href="#tabCon05"><em>탭5</em></a></li>
							</ul>
						</aside>
						<article id="" class="cm-tab-content-wrapper">
							<div class="cm-tab-con" id="tabCon01">
								탭1
							</div>
							<div class="cm-tab-con" id="tabCon02">
								탭2
							</div>
							<div class="cm-tab-con" id="tabCon03">
								탭3
							</div>
							<div class="cm-tab-con" id="tabCon04">
								탭4
							</div>
							<div class="cm-tab-con" id="tabCon05">
								탭5
							</div>
						</article>
					</section>
				</article>
				<!-- // -->

				<!-- 해당영역으로 영역움직이기 -->
				<article class="">
					<br><br>
					<p style="line-height:30px; font-size:16px; color:#222; padding:10px; background-color:#f2f2f2; border:1px solid #aaa; margin:30px auto 15px"><i class="xi-message-o" style="font-size:20px; position:relative; top:3px; margin-right:5px; color:red;"></i>메뉴가 fixed되고 누르면 해당영역으로 가는 샘플입니다.</p>
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
				<!-- // -->

				
				<!-- 순차적으로 Active 붙이기 -->
				<article class="">
					<p style="line-height:30px; font-size:16px; color:#222; padding:10px; background-color:#f2f2f2; border:1px solid #aaa; margin:30px auto 15px">
						<i class="xi-message-o" style="font-size:20px; position:relative; top:3px; margin-right:5px; color:red;"></i>순차적으로 Active 클래스가 붙는 예시입니다.
					</p>
					<ul class="sample-list-con rolling-active-list-con auto-height-list-con clearfix" data-rolling-time="2000" data-reset-width="800"><!-- 높이를 해제하는구간 -->
						<li class="auto-height-item">
							<div class="inner-box">
								<div class="inner">
									<p>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									</p>
								</div>
							</div>
						</li>
						<li class="auto-height-item">
							<div class="inner-box">
								<div class="inner">
									<p>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									</p>
								</div>
							</div>
						</li>
						<li class="auto-height-item">
							<div class="inner-box">
								<div class="inner">
									<p>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요  안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									</p>
								</div>
							</div>
						</li>
						<li class="auto-height-item">
							<div class="inner-box">
								<div class="inner">
									<p>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									</p>
								</div>
							</div>
						</li>
					</ul>
					<script type="text/javascript">
					$(document).ready(function  () {
						// 순차적으로 active ( sub.js로 이동 )
						rollingActive(".rolling-active-list-con");
					});
					</script>
				</article>
				<!-- // -->

				<!-- 높이값 맞추기 -->
				<article class="">
					<p style="line-height:30px; font-size:16px; color:#222; padding:10px; background-color:#f2f2f2; border:1px solid #aaa; margin:30px auto 15px">
						<i class="xi-message-o" style="font-size:20px; position:relative; top:3px; margin-right:5px; color:red;"></i>높이값 맞추는 예제입니다.
					</p>
					<ul class="sample-list-con auto-height-list-con clearfix" data-reset-width="800"><!-- 높이를 해제하는구간 -->
						<li class="auto-height-item">
							<div class="inner-box">
								<div class="inner">
									<p>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									</p>
								</div>
							</div>
						</li>
						<li class="auto-height-item">
							<div class="inner-box">
								<div class="inner">
									<p>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									</p>
								</div>
							</div>
						</li>
						<li class="auto-height-item">
							<div class="inner-box">
								<div class="inner">
									<p>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요  안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									</p>
								</div>
							</div>
						</li>
						<li class="auto-height-item">
							<div class="inner-box">
								<div class="inner">
									<p>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									</p>
								</div>
							</div>
						</li>
					</ul>
					<style type="text/css">
						.sample-list-con{margin:0 -1%;}
						.sample-list-con li{float:left; width:23%; margin:0 1%;   }
						.sample-list-con li .inner-box{ border:1px solid #ddd; }
						.sample-list-con li .inner{display:block; padding:30px; color:#222; font-size:15px; line-height:1.5;-webkit-box-sizing: border-box;
						-moz-box-sizing: border-box;
						 box-sizing: border-box; }
						.sample-list-con li.active .inner-box{background-color:red; border-color:#000; }
						@media all and ( max-width: 800px ){
						  .sample-list-con{margin:0 ;}
						  .sample-list-con li{float:none; width:auto; margin:0 0 3% 0;}
						  .sample-list-con li .inner-box{border-color:blue;  }
						}
					</style>

				</article>
					
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
