<?
$page_num = "01";
$sub_num = "01";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "company";
$sub_section = "ceo";
$page_info = "회사소개";
$sub_info = "CEO인사말";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
#content{width:none;}
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

				<!-- 관리자 셋팅 준비중 -->
				<p style="line-height:30px; font-size:16px; color:#222; padding:10px; background-color:#f2f2f2; border:1px solid #aaa; margin:30px auto 15px" class=""><i class="xi-message-o" style="font-size:20px; position:relative; top:3px; margin-right:5px; color:red;"></i>관리자 연동이 안된 상태에서 검수요청할때 사용바랍니다.</p>
				<img src="<?=$site_url?>/images/content/board_ready_img.png" alt="프로그램 개발중입니다." style="display:block; margin:0 auto; max-width:100%;" />
				<!-- // 준비중 -->

				<div class="company-inner">
					<p style="line-height:30px; font-size:16px; color:#222; padding:10px; background-color:#f2f2f2; border:1px solid #aaa; margin:30px auto 15px"><i class="xi-message-o" style="font-size:20px; position:relative; top:3px; margin-right:5px; color:red;"></i>국문이미지는 $site_url 사용 부탁드립니다!</p>
					<img src="<?=$site_url?>/images/content/temp_img.jpg" alt="" style="display:block; margin:0 auto; max-width:100%;" />
				</div>

				<!-- Wide Section -->
				<section class="company-wrapper" style="background-color:#eee;">
					<div class="company-inner">
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
										<th scope="col">1</th>
										<th scope="col">2</th>
										<th scope="col">3</th>
										<th scope="col">4</th>
										<th scope="col">5</th>
										<th scope="col">6</th>
										<th scope="col">7</th>
										<th scope="col">8</th>
										<th scope="col">9</th>
										<th scope="col">10</th>
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

				<!-- PC는 탭 / 모바일은 Select -->
				<article class="">
					<p style="line-height:30px; font-size:16px; color:#222; padding:10px; background-color:#f2f2f2; border:1px solid #aaa; margin:30px auto 15px">
						<i class="xi-message-o" style="font-size:20px; position:relative; top:3px; margin-right:5px; color:red;"></i><b>기본 탭</b>
					</p>

					<!-- 기본탭 -->
					<section class="cm-tab-container">
						<aside class="sub-cm-tab-wrapper">
							<div class="sub-tab-cm-style cm-tab-list">
								<ul class="clearfix">
									<li class="selected"><a href="#tabCon01"><em>기본탭1</em></a></li>
									<li><a href="#tabCon02"><em>기본탭2</em></a></li>
									<li><a href="#tabCon03"><em>기본탭3</em></a></li>
									<li><a href="#tabCon04"><em>기본탭4</em></a></li>
									<li><a href="#tabCon05"><em>기본탭5</em></a></li>
								</ul>
							</div>
						</aside>
						<article class="sub-cm-content-wrapper cm-tab-content-wrapper">
							<div class="sub-cm-tab-con cm-tab-con" id="tabCon01">
								탭1
							</div>
							<div class="sub-cm-tab-con cm-tab-con" id="tabCon02">
								탭2
							</div>
							<div class="sub-cm-tab-con cm-tab-con" id="tabCon03">
								탭3
							</div>
							<div class="sub-cm-tab-con cm-tab-con" id="tabCon04">
								탭4
							</div>
							<div class="sub-cm-tab-con cm-tab-con" id="tabCon05">
								탭5
							</div>
						</article>
					</section>
					<!-- // -->
					
					<br><br>
					<p style="line-height:30px; font-size:16px; color:#222; padding:10px; background-color:#f2f2f2; border:1px solid #aaa; margin:30px auto 15px">
						<i class="xi-message-o" style="font-size:20px; position:relative; top:3px; margin-right:5px; color:red;"></i><b>PC는 탭 / 모바일은 드롭메뉴탭</b>으로 변경되는 탭 스타일입니다.
					</p>
					
					<!-- 기본탭 + 모바일드롭메뉴탭 -->
					<section class="cm-tab-container">
						<aside class="sub-cm-tab-wrapper">
							<div class="sub-tab-cm-style cm-drop-tab-list cm-tab-list">
								<a href="javascript:;" class="cm-tab-m-btn"><span></span><i class="xi-caret-down-min arrow"></i></a>
								<ul class="clearfix">
									<li class="selected"><a href="#tabConM01"><em>PC탭+모바일드롭탭 1</em></a></li>
									<li><a href="#tabConM02"><em>PC탭+모바일드롭탭 2</em></a></li>
									<li><a href="#tabConM03"><em>PC탭+모바일드롭탭 3</em></a></li>
									<li><a href="#tabConM04"><em>PC탭+모바일드롭탭 4</em></a></li>
									<li><a href="#tabConM05"><em>PC탭+모바일드롭탭 5</em></a></li>
								</ul>
							</div>
						</aside>
						<article class="sub-cm-content-wrapper cm-tab-content-wrapper">
							<div class="sub-cm-tab-con cm-tab-con" id="tabConM01">
								PC탭+모바일드롭탭  1
							</div>
							<div class="sub-cm-tab-con cm-tab-con" id="tabConM02">
								PC탭+모바일드롭탭  2
							</div>
							<div class="sub-cm-tab-con cm-tab-con" id="tabConM03">
								PC탭+모바일드롭탭  3
							</div>
							<div class="sub-cm-tab-con cm-tab-con" id="tabConM04">
								PC탭+모바일드롭탭  4
							</div>
							<div class="sub-cm-tab-con cm-tab-con" id="tabConM05">
								PC탭+모바일드롭탭  5
							</div>
						</article>
					</section>
					<br><br>
					<p style="line-height:30px; font-size:16px; color:#222; padding:10px; background-color:#f2f2f2; border:1px solid #aaa; margin:30px auto 15px">
						<i class="xi-message-o" style="font-size:20px; position:relative; top:3px; margin-right:5px; color:red;"></i><b>PC는 탭(링크이동) / 모바일은 드롭메뉴탭(링크이동)</b>으로 변경되는 탭 스타일입니다.
					</p>
					<!-- 기본탭 + 모바일 드롭메뉴(링크이동) -->					
					<aside class="sub-cm-tab-wrapper">
						<div class="sub-tab-cm-style cm-drop-tab-list cm-drop-menu-box" data-drop-width="800" data-drop-event="click">
						<!-- 
							data-drop-width: drop이 시작되어야하는 가로값 / 없을시 삭제 
							data-drop-event : click / hover 선택
						-->
							<a href="javascript:;" class="cm-tab-m-btn cm-drop-open-btn"><span>링크이동 1</span><i class="xi-caret-down-min arrow"></i></a>
							<ul class="clearfix cm-drop-list">
								<li class="selected"><a href="<?=$site_url?>/company/sample.php"><em>링크이동 1</em></a></li>
								<li><a href="<?=$site_url?>/company/sample.php"><em>링크이동 2</em></a></li>
								<li><a href="<?=$site_url?>/company/sample.php"><em>링크이동 3</em></a></li>
								<li><a href="<?=$site_url?>/company/sample.php"><em>링크이동 4</em></a></li>
								<li><a href="<?=$site_url?>/company/sample.php"><em>링크이동 5</em></a></li>
							</ul>
						</div>
					</aside>
					<!-- // -->
					<br><br>
					<p style="line-height:30px; font-size:16px; color:#222; padding:10px; background-color:#f2f2f2; border:1px solid #aaa; margin:30px auto 15px"><i class="xi-message-o" style="font-size:20px; position:relative; top:3px; margin-right:5px; color:red;"></i>메뉴가 fixed되고 누르면 <b>해당영역</b>으로 가는 샘플입니다.</p>
					<!-- Start -->
					<article class="cm-fixed-tab-container">
						<aside class="sub-cm-tab-wrapper cm-fixed-move-tab-wrapper"><!-- 링크이동일때  cm-fixed-link-tab-wrapper 추가 -->
							<div class="sub-tab-cm-style cm-fixed-move-tab-list">
								<div class="">
									<ul class="clearfix">
										<li class="selected"><a href="#fixedContent1"><em>Fixed Move 1</em></a></li>
										<li><a href="#fixedContent2"><em>Fixed Move 내용2</em></a></li>
										<li><a href="#fixedContent3"><em>Fixed Move 내용3</em></a></li>
										<li><a href="#fixedContent4"><em>Fixed Move 내용4</em></a></li>
										<li><a href="#fixedContent5"><em>Fixed Move 내용5</em></a></li>
									</ul>
								</div>
							</div>
						</aside>
						<div class="sub-cm-content-wrapper cm-fixed-move-content-wrapper">
							<div class="sub-cm-tab-con cm-fixed-tab-content" id="fixedContent1">
								내용1
							</div>
							<div class="sub-cm-tab-con cm-fixed-tab-content" id="fixedContent2">
								내용2
							</div>
							<div class="sub-cm-tab-con cm-fixed-tab-content" id="fixedContent3">
								내용3
							</div>
							<div class="sub-cm-tab-con cm-fixed-tab-content" id="fixedContent4">
								내용4
							</div>
							<div class="sub-cm-tab-con cm-fixed-tab-content" id="fixedContent5">
								내용5
							</div>
						</div>
					</article>
					<!-- // -->
				</article>

				
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
					<ul class="sample-list-con rolling-active-list-con auto-height-list-con clearfix" data-rolling-time="2000" data-reset-width="800"><!-- 높이를 해제하는구간 -->
						<li class="auto-height-item">
							<div class="inner-box">
								<div class="inner">
									<p>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
									  안녕하세요 안녕하세요<br>
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
