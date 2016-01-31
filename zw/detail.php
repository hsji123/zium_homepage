<!doctype html>
<html>
 <head>
  <meta charset = "utf-8">
  <script type="text/javascript" src="datetime/js/jquery-1.7.1.js"></script>
    <script type="text/javascript" src="datetime/js/jquery.ui.core.js"></script>
    <script type="text/javascript" src="datetime/js/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="datetime/js/jquery.ui.datepicker.js"></script>
    <script type="text/javascript" src="datetime/jsDateTimePickerV1/DateTimePicker.js"></script>
	
	<link type="text/css" href="datetime/css/jquery.ui.theme.css" rel="stylesheet" />
    <link type="text/css" href="datetime/css/jquery.ui.datepicker.css" rel="stylesheet" />
    <link type="text/css" href="datetime/css/demos.css" rel="stylesheet" />
  <style>
   body{
   	text-align : center;
   }
  </style>

  <script type="text/javascript">

    	$(function () {
    		$("#datetime_1").datepicker({ showOn: "button", buttonImage: "datetime/css/images/calendar.gif", buttonImageOnly: true });
    		$("#datetime_2").datepicker({ showOn: "button", buttonImage: "datetime/css/images/calendar.gif", buttonImageOnly: true });
    	});

    </script>
 </head>

 <body>
  <table border = "1" width = "100%">
   <tr>
    <td>
     메뉴 / 서비스
    </td>

    <td colspan = "3">
    	메뉴
    </td>
    <td colspan = "3">
    	서비스
    </td>
   </tr>

   <tr>
    <td>
     평점
    </td>
    <td colspan = "6">
     평점스크롤바
    </td>
   </tr>

   <tr>
   <td>
     유입경로
   </td>
    <td colspan = "6">
     블로그 검색
     전단지
     외관
     지인추천
     재방문
    </td>
   </tr>

   <tr>
   <td>
     재방문의사
   </td>
    <td colspan = "6">
     매우 긍정적
     대체로 긍정적
     보통
     대체로 부정적
     매우 부정적
    </td>
   </tr>

   <tr>
    <td>
     날짜 선택
    </td>
    <td colspan = "6">
     <input type = "text" id = "datetime_1"> ~ <input type = "text" id = "datetime_2">
    </td>
   </tr>

   <tr>
    <td colspan = "7">
     <input type = "button" id = "detail_search" value = "검색하기">
    </td>
   </tr>
  </table>

  <div id = "detail_display">
  	<table border="1">
   		  <tr>
   		   <td>카테고리 1</td>
   		   <td>소분류 1</td>
   		   <td>소분류 2</td>
   		   <td>소분류 3</td>
   		   <td>소분류 4</td>
   		   <td>소분류 5</td>
   		  </tr>

   		  <tr>
   		   <td>카테고리 1</td>
   		   <td>소분류 1</td>
   		   <td>소분류 2</td>
   		   <td>소분류 3</td>
   		   <td>소분류 4</td>
   		   <td>소분류 5</td>
   		  </tr>

   		  <tr>
   		   <td>카테고리 1</td>
   		   <td>소분류 1</td>
   		   <td>소분류 2</td>
   		   <td>소분류 3</td>
   		   <td>소분류 4</td>
   		   <td>소분류 5</td>
   		  </tr>
   		 </table>
  </div>
 </body>
</html>