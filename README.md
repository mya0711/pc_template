# PC_template
PC Website Template

* Giantsoft Publisher Team
* Writer : Jang Mi Hwa
* UpDate : 2019-11-15


  

## 업데이트 내역

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
