# PC_template
PC Website Template

* Giantsoft Publisher Team
* Writer : Jang Mi Hwa
* UpDate : 2020-01-20
  


## 업데이트 내역

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
