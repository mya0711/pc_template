# PC_template
PC Website Template

* Giantsoft Publisher Team
* Writer : Jang Mi Hwa
* UpDate :  2020-07-02
  

## 업데이트 내역

- #### 2020/07/02

  #### * php 파일
	<code> <b>1. /kr/include/dtd.php</b></code>
	* SEO개선을위해 타이틀 순서변경 -> 오류수정
	
	<code> <b>2. /kr/company/sample.php</b></code>
	* SEO 개선을 위해 상단변수추가

***************************

- #### 2020/06/25

  #### * php 파일
	<code> <b>1. /kr/include/dtd.php, /kr/lib/sub.php</b></code>
	* SEO개선을위해 타이틀 순서변경 
	* 게시판 뷰페이지 description 수정

***************************

- #### 2020/06/17

  #### * css 파일
	<code> <b>1. /css/layout.css </b></code>
	* modal 로딩모션 spin 애니메이션 익스에서 작동안하는 이슈로 수정

  #### * php 파일
	<code> <b>1. /kr/include/header.php</b></code>
	* logo 영역에 적절한 링크텍스트 추가

	<code> <b>2. /kr/include/footer.php</b></code>
	* 파트너사 로고에 alt 추가
	* Top버튼에 적절한 링크텍스트 추가
	* family site 다른계열사 홈페이지 이동할때 title="새창으로 열기" 추가

	<code> <b>4. /kr/index.php, /kr/index_fullpage.php</b></code>
	* 크로스브라우징기준 변경으로 ie9이하부터 팝업창뜨게 변경

	<code> <b>5. /kr/company/sample.php</b></code>
	* 웹접근성에 맞게 수정 (table scope속성)
	

  #### * js 파일
	<code> <b>1. /js/common.js</b></code>
	* (★) detectBrowser() 함수수정 -> ie 버전별 구분을 통합하여 ie로 변경
	* 사이트맵 toggle기능일때/ 아닐때 추가


***************************

- #### 2020/06/10

  #### * css 파일
	<code> <b>1. /css/default.css </b></code>

	* (★) input/select/textarea -> 기본스타일 수정 ( margin:0, padding:0 등 )
	* line-clamp3 수정 / line-clamp4 추가
	
	<code> <b>2. /css/layout.css </b></code>
	* 헤더 언어선택 button으로 변경
	* 탑버튼 아이콘변경
	* 푸터 familysite button으로 변경
	* 서브메뉴 a태그-> button수정

	<code> <b>3. /css/content.css</b></code>
	* 서브 탭 스타일 공통으로 수정

	<code> <b>4. /css/main.css</b></code>
	* 벤더프리픽스 -ms-,-o-,-moz- 삭제
	
	<code> <b>5. /css/common/ ~~.css </b></code>

	* 온라인문의 및 게시판 수정 / 스킨추가 등 전반적인수정

	<code> <b>6. /css/plugin/magnific-popup.css </b></code>

	* 모달뜰때 타이틀 font-size 수정
	
  #### * php 파일
	<code> <b>1. /kr/include/dtd.php</b></code>

	* <meta name="Author"> 삭제 
	* (★) SEO를 위한 <meta>태그 추가 
		```
		<meta name="NaverBot" content="All"/>
		<meta name="NaverBot" content="<?=$site_robots?>"/>
		<meta name="Yeti" content="All"/>
		<meta name="Yeti" content="<?=$site_robots?>"/>
		<meta name="Googlebot" content="All" />
		<meta name="Googlebot" content="<?=$site_robots?>" />
		<meta name="Robots" content="<?=$site_robots?>">
		```

	<code> <b>2. /kr/include/header.php</b></code>

	* 언어선택 오픈버튼 a태그 -> button태그
	* 사이트맵 커스텀버튼 사용안해서 삭제
	* (★) cm-drop-menu-box 에 data-drop-event 수정 ( click / hover )

	<code> <b>3. /kr/include/footer.php</b></code>
	* 패밀리사이트 오픈버튼 a태그 -> button태그로 변경
	* (★) 네이버웹마스터도구 링크관리 -> 링크 구조 개선필요 요망으로 떠 전체적으로 <a href="javascript:;" onclick="함수"></a> 사용을 지양함
	* 개인정보처리방침/이용약관 수정 
		```
		<a href="<?=$site_url?>/etc/privacy.php" class="cm-modal-open-btn">개인정보처리방침</a>
		```

	
	<code> <b>4. /kr/include/top.php</b></code>
	* 서브메뉴 2차메뉴 오픈버튼 a태그 -> button태그

	<code> <b>5. /kr/index.php</b></code>

	* Skip 네비게이션 링크 수정 ( #mainContainer -> #mainVisual )
	* 메인비주얼 배경이미지 경로 수정 

	<code> <b>6. /kr/index_fullpage.php</b></code>

	* Skip 네비게이션 링크 수정 ( #mainContainer -> #mainVisual )
	* AOS 예시 추가

	<code> <b>7. /kr/lib/config.php</b></code>

	* $site_author = $seo->author; 삭제


  #### * js 파일
	<code> <b>1. /js/common.js</b></code>

	* (★) detectOS() 함수추가 -> ios와 android 구분을 위해

	* (★) 탭 공통 js 일부수정
		

	<code> <b>2. /js/layer_popup.js</b></code>

	* (★) modal open 이벤트 추가

		```
		// Modal Open
		$(".cm-modal-open-btn").click(function  () {
			if ( $(this).data("url")) {
				var strUrl = $(this).data("url");	// button Tag
			}else {
				var strUrl = $(this).attr("href");	// a Tag
			}
			layerLoad(strUrl);

			return false;
		});
		```

	<code> <b>3. /js/main.js</b></code>

	* (★) Fullpage AOS 효과 추가

	<code> <b>4. /js/sub.js</b></code>

	* 메뉴 Fixed 탭 링크이동일때 추가

	<code> <b>5. /js/nav.js</b></code>
	* 서브메뉴 open 삭제 / 일부수정


***************************

- #### 2020/05/19

  #### * css 파일
	<code> <b>1. /css/layout.css </b></code>
	* 헤더 serchBox 높이값 빈공간생겨 변경
	* footer 메뉴 dot형태 오류 -> 변경
	* gnb 3차메뉴 숨김

	<code> <b>2. /css/main.css</b></code>
	* Slick dots 를 감싸주는 태그 생성 
	``` 
		$mainVisualItem.find(".slick-dots").wrap("<aside class='slick-dots-wrapper'><div class='area-box'></div></aside>");
	```
	* Pause, Play 버튼 생성
	
  #### * php 파일
	<code> <b>1. /kr/index.php, /kr/include/header.php, /kr/include/footer.php</b></code>
	* 개인정보처리방침, 사이트맵 등이 있는 service 폴더를 etc로 변경 => 그에따른 경로변경으로 인한 수정

  #### * js 파일
	<code> <b>1. /js/common.js</b></code>
	* objectFixed(클래스이름, 시작되는지점) 함수 추가 => 어느지점에서 object가 fixed될때 사용하는 함수 ( 윈10 익스11 스크롤 오류로 인한 변경 )
	* Header Fixed / Top button Fixed 수정

	<code> <b>2. /js/main.js</b></code>
	* Slick dots 를 감싸주는 기능 추가
	* Pause, Play 기능 추가
	* Rightbar Fixed 수정

	<code> <b>2. /js/sub.js</b></code>
	* SubMenu Fixed 수정
	* FixedMoveTab Fixed 수정

***************************

- #### 2020/04/22

  #### * css 파일
	<code> <b>1. /css/layout.css </b></code>
	* 서브비주얼 효과 ↑ => ↓ 로 변경 

	
  #### * php 파일
	<code> <b>1. /kr/include/dtd.php</b></code>
	* SEO 이슈로 상단에 들어간 구문 config.php로 이동
	* 벤더프리픽스 자동 삽입가능 플러그인 삭제 -> 파이어폭스에서 css로딩이 느려지는 이슈
	
	<code> <b>2. /kr/lib/config.php , /kr/lib/sub.php </b></code>
	*  SEO 이슈 수정 후 메타태그에 title이 제대로 삽입되지않는 오류 수정


  #### * js 파일
	<code> <b>1. /js/vendor/prefixfree.min.js</b></code>
	* 삭제

***************************

  #### * css 파일
	<code> <b>1. /css/main.css</b></code>
	* 메인 컨텐츠 타이틀영역 수정

	<code> <b>2. /css/common/cm_history.php</b></code>
	* history 3번 템플릿 추가

	<code> <b>3. /css/plugin/swiper.css</b></code>
	* 5.3.1 버전 => 5.3.7 버전으로 변경
	
	<code> <b>4. /css/default.css</b></code>
	* .line-clamp2 / .line-clamp3 => display:block 추가 ( 익스에서 display: -webkit-box; 적용되지않는 이슈 )
	
  #### * php 파일
	<code> <b>1. /kr/index.php </b></code>
	* 타이틀영역 수정

	<code> <b>1. /kr/service/sitemap.php, /kr/service/sitemap_html.php</b></code>
	* 사이트맵 자동으로 삽입되게 수정

  #### * js 파일
	<code> <b>1. /js/plugin/swiper.min.js</b></code>
	* 5.3.1 버전 => 5.3.7 버전으로 변경

***************************

- #### 2020/04/08

  #### * css 파일
	<code> <b>1. /css/layout.css</b></code>
	* gnb.open{height:350px; } 삭제

***************************

- #### 2020/04/07
    
  #### * php 파일
	<code> <b>1. /kr/include/dtd.php </b></code>
	* prefixfree.min.js 추가

	<code> <b>2. /kr/include/footer.php </b></code>
	* family site open 공통 js로 변경
	* 모달레이어팝업 주석처리 후 common.js로 이동

	<code> <b>3. /kr/include/header.php </b></code>
	* language open 공통 js로 변경

	<code> <b>4. /kr/company/sample.php </b></code>
	* 전체적으로 정리 및 샘플추가

	<code> <b>5. /kr/service/agreement.php, /kr/service/privacy.php, /kr/service/sitemap.php </b></code>
	* X버튼 네이버아이콘으로 수정

	<code> <b>6. /kr/service/ie8_popup.php </b></code>
	* css경로 reset.css => default.css로 수정
	* 제이쿼리 스크립트 경로 외부 => 서버 경로로 수정
	
	<code> <b>7. /kr/index_fullpage.php </b></code>
	* fullpage 샘플추가
	

  #### * css 파일
	<code> <b>1. /css/layout.css</b></code>
	* fullpage 예시페이지 추가에 따른 header fixed 추가
	* language open 공통 js로 변경에따른 css 수정
	* GNB 전체메뉴 오류 수정 -> visibility : visible 추가
	* 모달 스타일 수정 -> 배경색 삭제 및 버튼위치조정

	<code> <b>2. /css/main.css </b></code>
	* 메인비주얼 화살표 이미지->폰트로변경
	* Fullpage 추가에 따른 추가사항 수정(rightbar ...)
	
	<code> <b>3. /css/content.css </b></code>
	* 탭 샘플 추가에따른 css 추가

  #### * js 파일
	<code> <b>1. /js/common.js </b></code>
	* 브라우저 체크 함수 추가 (detectBrowser())
	* 순차적으로 active가 붙는 함수 추가 (rollingActive());
	* 브라우저 체크 및 기기체크 클래스 추가
	* 상단 언어 오픈 및 하단 패밀리사이트 js 삭제 => 드롭메뉴 공통 js 추가
	* 공통 tab js 모바일버튼 추가

	<code> <b>2. /js/main.js </b></code>
	* fullpage js 추가
	* 메인비주얼 화살표 추가

	<code> <b>3. /js/sub.js </b></code>
	* 리스트 높이값 맞추는 js 추가

	<code> <b>4. /js/vendor/prefixfree.min.js </b></code>
	* 벤더프리픽스 자동 삽입가능 플러그인 추가

***************************

- #### 2020/03/24
    
  #### * php 파일
	<code> <b>1. /kr/include/dtd.php </b></code>
	* SEO 이슈로 게시물 타이틀 들어갈 수 있게 수정

	<code> <b>2. /kr/lib/sub.php </b></code>
	* SEO이슈로 수정


  #### * css 파일
	<code> <b>1. /css/layout.css </b></code>
	* #header.over #headerInnerWrap{background-color:#fff } 제거
	* GNB Total Menu transition으로 over 되도록 수정
	

  #### * js 파일
	<code> <b>1. /js/common.js </b></code>
	* Top버튼 fullpage 사용할때 사용가능하게 수정

	<code> <b>2. /js/nav.js </b></code>
	* gnb_total_on() 수정


***************************
- #### 2020/03/18
    
  #### * php 파일
	<code> <b>1. /kr/include/dtd.php </b></code>
	* 제이쿼리소스 외부서버 가져오는방식 => 내부서버 가져오는방식으로 변경
	* 외부에서 가져오는 폰트 : 기존 http 에서 // 방식으로 변경 ( 생갹하고 지정해주면, 현재 문서의 프로토콜에따라 적합한 리소스 사용 )
	* aos 호출 => common.js로 이동


  #### * css 파일
	<code> <b>1. /css/default.css </b></code>
	* input / select / textarea margin:0, padding:0 추가
	
	<code> <b>2. /css/common/cm_history.css </b></code>
	* 연혁 수정

  #### * js 파일
	<code> <b>1. /js/common.js </b></code>
	* AOS 호출 추가


***************************

- #### 2020/02/28
    
  #### * php 파일
	<code> <b>1. /kr/include/header.php </b></code>
	* 검색버튼 구글아이콘에서 네이버아이콘으로 변경

	<code> <b>1. /kr/include/top.php </b></code>
	* 서브메뉴 display:table 스타일 추가( #topMenu03 )


  #### * css 파일
	<code> <b>1. /css/layout.css </b></code>
	* .header-util-box{right:30px} 변경
	* 검색창 디자인변경 및 탑메뉴03 추가
	* 사이트맵 table-cell로 변경
	
***************************

- #### 2020/02/27
    
  #### * php 파일
	<code> <b>1. /kr/index.php </b></code>
	* 외부 서버에서 가져오는 이미지 삭제 후 테스트이미지로 변경


  #### * css 파일
	<code> <b>1. /css/defulat.css </b></code>
	* 이미지 가운데정렬(.img-center) / 이미지 Cover채우기 (.img-cover) / position 모든방향 0px (.pos-full) 추가
	``` 
		.img-center{
			position:absolute;
			top:0px;
			left:0px;
			right:0px;
			bottom:0px;
			max-width:100%;
			max-height:100%;
			margin:auto;
		}
		.img-cover{
			position:absolute;
			top:0px;
			left:0px;
			width:100%;
			height:100%;
		}
		.pos-full{
			position:absolute; 
			top:0px; 
			left:0px; 
			bottom:0px; 
			right:0px;
		} 
	```

	<code> <b>2. /css/common/cm_faq.css </b></code>
	* .faq-list-con .faq-item dd padding값 조정

  #### * js 파일
	<code> <b>1. /js/common.js</b></code>
	* 파라미터받아온 후 원페이지에서 움직이는 함수추가 ( getParameter() )

***************************

- #### 2020/02/24
    
  #### * php 파일
	<code> <b>1. /kr/index.php </b></code>
	* 상단 조건부주석 변경
	
	<code> <b>2. /kr/company/sample.php</b></code>
	* magnific popup 예시추가
	
	<code> <b>3. /kr/include/dtd.php</b></code>
	* 기존 ie8.css => ie9.css 수정
	* 스크롤바커스텀, 인증서확대모달 등의 스크립트 삭제


  #### * css 파일
	<code> <b>1. /css/defulat.css </b></code>
	* line133  :  textarea 스타일초기화 추가 / input,select,textarea => box-sizing:border-box; 추가
	
	<code> <b>2. /css/ie8.css 삭제 후, /css/ie9.css 변경 </b></code>
	* ie9 이하부터 작동되는 CSS로 추가

	<code> <b>3. /css/common/cm_bbs_common.css </b></code>
	* paging 버튼 흰색배경 추가
	* 체크박스, 라디오박스 커스텀 추가
	* 공통 버튼 800,480사이즈에서 min-width추가 / width :auto 수정

	<code> <b>4. /css/common/cm_member.css </b></code>
	* 회원폼 레이아웃 수정(max-width:620 => 480px수정)
	* SNS 로그인버튼 Short 버전 
	* Join Step 01단계 CSS수정 및 체크박스 커스텀
	* Join Step 02단계 반응형 최적화작업

	<code> <b>5. /css/plugin/magnific-popup.css </b></code>
	* z-index 수정

	<code> <b>6. /css/plugin/aos.css 추가 </b></code>

	<code> <b>7. /css/plugin/jquery.fullPage.css 추가</b></code>

	<code> <b>8. /css/plugin/swiper.css 추가</b></code>


  #### * js 파일
	<code> <b>1. /js/common.js</b></code>
	* 전체적으로 많이사용하는부분은 함수화시킴(★) => 함수관련 사용법 숙지해야함
	* 서브에서 사용하는부분은 sub.js로 이동

	<code> <b>2. /js/main.js</b></code>
	* 메인비주얼 selector 변수화

	<code> <b>3. /js/nav.js</b></code>
	* 함수추가로 인한 수정

	<code> <b>4. /js/nav.js</b></code>
	* 함수추가로 인한 수정 및 common.js에서 이동해야할부분 이동(editor, table 등)

	<code> <b>5. /js/ie8_popup.js</b></code>
	* 파일갯수 줄이기위해 삭제 => index.php에 직접선언

	```winPopupOpen("<?=$site_url?>/service/ie8_popup.php","","width=800, height=600, left=0, top=0, resizable=no, scrollbars=no, status=no;");```

	
	<code> <b>6. /js/plugin/aos.js 추가 </b></code>

	<code> <b>7. /js/plugin/jquery.fullPage.js 추가</b></code>

	<code> <b>8. /js/plugin/scrolloverflow.min.js 추가</b></code>

	<code> <b>9. /js/plugin/swiper.min.js 추가</b></code>

	<code> <b>10. /js/plugin/TweenMax.min.js 추가</b></code>

	
 #### * image 파일
	<code> <b>1. /images/content/ci_bg.jpg</b></code>
	* CI 백그라운드(격자무늬) 추가

***************************

- #### 2020/02/10
    
  #### * php 파일
	<code> <b>1. /kr/index.php </b></code>
	* 비주얼영역 버튼 Company view -> Detail View로 수정
	
	<code> <b>2. /kr/include/footer.php</b></code>
	* Footer 주소 및 전화번호 부분 수정 + 스타일 2번추가

  #### * css 파일
	<code> <b>1. /css/defulat.css </b></code>
	* line150  :  editor 기본셋팅 폰트크기 및 색상변경

	<code> <b>2. /css/layout.css</b></code>
	* Footer 주소 및 전화번호 부분 수정 + 스타일 2번추가 에 따른 css추가

	<code> <b>3. /css/main.css </b></code>
	* 메인비주얼 active-item 관련된 효과 transition->animation으로 수정(★)

	<code> <b>4. /css/common/cm_history.css </b></code>
	* 연혁2번스타일 라인 일부수정

  #### * js 파일
	<code> <b>1. /js/main.js</b></code>
	* 메인비주얼 active-item Slick관련 / 기존 AfterChange -> BeforeChange로 변경(★)

***************************

- #### 2020/01/21
    
  #### * php 파일
	<code> <b>1. /kr/index.php </b></code>
	* 메인비주얼 2번까지만 사용(3번이미지 삭제)
	* 스크롤이미지 삭제
	
	<code> <b>2. /kr/company/ceo.php => sample.php로 변경 </b></code>

	<code> <b>3. /kr/include/header.php, /kr/include/menu_company.php </b></code>
	* 링크변경

	<code> <b>4. /kr/include/fooer.php </b></code>
	* 하단 SNS 아이콘으로 변경

  #### * css 파일
	<code> <b>1. /css/defulat.css </b></code>
	* line587  : over-bg클래스 추가(마우스오버시 bg커지는 효과)

	<code> <b>2. /css/main.css</b></code>
	* 일부분삭제(1번섹션이미지사용, 7번섹션중복코드 삭제)

	<code> <b>3. /css/layout.css</b></code>
	* 푸터 SNS 아이콘변경으로 인한 css수정

  #### * images 파일
	<code> <b>1. /images/content/~ </b></code>
	* 이미지 경로 정리 및 삭제 / 준비중이미지 변경

***************************
- #### 2020/01/20
    
  #### * php 파일
	<code> <b>1. /kr/company/ceo.php </b></code>
	* 국문이미지파일 샘플삽입
  #### * images 파일
	<code> <b>1. /kr/images/content/ 폴더생성 </b></code>


***************************

- #### 2019/12/26
    
  #### * php 파일
	<code> <b>1. /kr/include/footer.php </b></code>
	* 하단 파트너사 롤링영역 추가
	* 푸터로고 위치 이동

	<code> <b>2. /kr/company/ceo.php </b></code>
	* 상단에붙고 누르면 영역이동하는 moveTab 추가

  #### * js 파일
	<code> <b>1. common.js</b></code>
	* 하단 파트너사 롤링 추가
	
	<code> <b>2. sub.js</b></code>
	* 상단에붙고 누르면 영역이동하는 moveTab 추가

  #### * css 파일
	<code> <b>1. /css/layout.css</b></code>
	* 하단 파트너사 css 추가
	* 푸터 로고 왼쪽, 오른쪽 모두 추가

	<code> <b>3. /css/content.css</b></code>
	* 상단에붙고 누르면 영역이동하는 moveTab css 추가
	
	<code> <b>4. /css/common/cm_bbs_common.css</b></code>
	* 게시판 뷰페이지 수정(border, margin 등)

	<code> <b>5. /css/common/cm_online.css</b></code>
	* 온라인문의3번폼 css수정
	


***************************


- #### 2019/12/02
    
  #### * js 파일
	<code> <b>1. main.js</b></code>
	* fullheight 계산 함수  변경 ( if문 제거 )

  #### * css 파일
	<code> <b>1. /css/default.css</b></code>
	* input스타일초기화로 checkbox, radio 스타일 없어지는 문제점 보완

	<code> <b>2. /css/layout.css</b></code>
	* 상단메뉴에 3차메뉴 표시되는부분 변경
	* 상단메뉴 fixed될때 미디어쿼리 삭제
	
	<code> <b>3. /css/common/cm_gallery.css</b></code>
	* 10번갤러리 border영역추가

	<code> <b>4. /css/common/cm_member.css</b></code>
	* SNS로그인 추가 및 css일부수정


***************************

- #### 2019/11/21
    
  #### * php 파일
	<code> <b>1. /kr/lib/config.php </b></code>
	* 주석해제(DB셋팅이 안되어있을경우는 맨위 2줄 주석처리해야합니다)

  #### * js 파일
	<code> <b>1. main.js</b></code>
	* fullheight 계산 함수처리

  #### * images 파일
	<code> <b>1. /images/test/</b></code>
	* 테스트이미지(거인로고) 추가 	

***************************
- #### 2019/11/19
    
  #### * php 파일
	<code> <b>1. /kr/include/dtd.php </b></code>
	* css선언 경로 변경

  #### * css 파일

	<code> <b>1. common폴더생성후 cm_~ 관련된 css 이동 및 추가</b></code>

	<code> <b>2. member.css 삭제 </b></code>

  #### * js 파일

	<code> <b>1. common폴더생성후 cm_~ 관련된  js 추가</b></code>


***************************

- #### 2019/11/15
    
  #### * php 파일
	<code> <b>1. /kr/company/bbs_basic.php </b></code>
	* 기본게시판 소스 추가 ( 추후 설명예정 )
	
	<code> <b>2. /kr/include/dtd.php </b></code>
	* css선언 파일명 변경

	<code> <b>3. /kr/include/menu_company.php </b></code>
	* ceo_ver2.php 링크이동 삭제

	<code> <b>4. /kr/include/top.php </b></code>
	* 서브비주얼 영역 감싸는 태그 생성

	<code> <b>5. /kr/lib/config.php </b></code>
	* 관리자연동소스 상단2줄 주석처리
	
  #### * css 파일

	<code> <b>1. css 삭제</b></code>
	* board.css  삭제
	* member.css  삭제
	* reset.css / editor.css / font.css / common.css 삭제 => 통합

	<code> <b>2. /css/default.css 생성</b></code>
	*  reset.css / editor.css / font.css / common.css 삭제 => 통합
	* reset : a:hover{color:#333; } 삭제, input 스타일초기화, table-layout:fixed 삭제
	* editor : iframe 반응형 css추가
	* layout공통클래스 : default로 이동
	* kakao map border, padding 이슈 초기화
	
	<code> <b>3. /css/cm_bbs_common.css, /css/cm_board.css 생성</b></code>
	* cm_bbs_common.css : 검색, paging, 버튼 등 게시판에 공통적으로 쓰이는 css
	* cm_board.css : 일반게시판 skin

	<code> <b>4. /css/layout.css </b></code>
	* z-index변경(헤더,서브메뉴)

	
  #### * js 폴더
	<code> <b>1. /js/common.js</b></code>
	*에디터 영역에 iframe으로 유투브를 삽입하였을때 태그추가
	

***************************


- #### 2019/10/23
    
  #### * php 파일
	<code> <b>1. /kr/lib/config.php</b></code>
	* 관리자연동소스로 변경
	
	<code> <b>2. /kr/include/header.php </b></code>
	* 언어선택링크 -> ch대신 cn으로
	
	<code> <b>3. /kr/include/dtd.php </b></code>
	* 네이버폰트 추가 ( https://xpressengine.github.io/XEIcon/library-2.3.3.html )
	* 인증서 script 수정
	
  #### * css 파일
	<code> <b>1. /css/plugin/magnific-popup.css</b></code>
	* X버튼크게변경 / zoom효과 추가
	
	

***************************

- #### 2019/09/27
    
  #### * php 파일
	<code> <b>1. /kr/include/dtd.php</b></code>
	* SEO최적화로 <link rel="canonical" href="<?=$site_host?>"> 추가

***************************

- #### 2019/09/26
	<code>반응형 템플릿 기반으로 만든 PC템플릿</code>
