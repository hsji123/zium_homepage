<?session_start();?>
<!doctype html>

<html>

  <link rel="stylesheet" type="text/css" href="css/style.css" />
 <head>
 <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
 <script>
  $(document).ready(function(){
    $('#log_out').click(function(){
      parent.location.href = "log_out.php";
    })
    $('#my_page').click(function(){
      parent.document.getElementById('Right').src = "my_inform.php";
    })
    $('#result').click(function(){
      parent.document.getElementById('Right').src = "menu.php";
    })
    $('#search').click(function(){
      parent.document.getElementById('Right').src = "detail.php";
    })
    $('#scrap').click(function(){
      parent.document.getElementById('Right').src = "scrap.php";
    })
    $('#mail_box').click(function(){
      parent.document.getElementById('Right').src = "mail_box.php";
    })
  })
 </script>
 </head>
 <style>
 :-webkit-scrollbar { 
    display: none; 
}
 </style>
 <body>
  <table id = "side_left">
  	<tr>
  	 <td colspan="2" id = "title"><h1>고객의 소리</h1><h3>바른치킨 건대점</h3>
  	 </td>
  	</tr>

  	<tr id = "login">
  	 <td id = "log_out">로그아웃</td><td id = "my_page">마이페이지</td>
  	</tr>

  	<tr>
  	 <td colspan="2" id = "result">결과보기</td>
  	</tr>

  	<tr>
  	 <td colspan="2" id = "search">상세검색</td>
  	</tr>

  	<tr>
  	 <td colspan="2" id = "scrap">스크랩 보기</td>
  	</tr>

  	<tr>
  	 <td colspan="2" id = "mail_box">메일함</td>
  	</tr>

  	<tr>
  	 <td colspan="2">이용방법</td>
  	</tr>

  	<tr>
  	 <td colspan="2">신청하기</td>
  	</tr>
  </table>
 </body>
</html>