<?php
  session_cache_limiter('no-cache, must-revalidate');
  session_start();
    //require "_banner.php";
  $_SESSION['category'] = $_POST['category'];
  $_SESSION['menu_name'] = $_POST['menu_name'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content ="width=device-width, initial-scale = 1.0 user-scalable = no"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script type = "text/javascript">
		function check(){
			for(i=0;i<5;i++){
				if(document.getElementsByName('howto')[i].checked){
          document.getElementById('next_button').disabled = false;
        }
			}
		}
	</script>

  <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script>
  $(function(){
    $('#prev_button').click(function(){
      location.href = "survey_menu.php";
    }),
    $('#next_button').click(function(){
      document.howto_form.submit();
    })
  })
    
  </script>
</head>
 <body>
 <div id = "head_line">
 	어떻게 찾아 오셨나요?<br><pg>( 1 / 4 )</pg>
 </div><br>

 <form id = "check" name = "howto_form" method = "post" action = "survey_eval.php">
 <div onclick = "javascript:check();">
 <table id = "howto_table">
 <tr><td>
    <div id="check_radio_button">
       <label>
          <input name="howto" type="radio" value="1"><span>매장 외관을 보고</span>
       </label>
    </div>
    </td><td>
    <div id="check_radio_button">
       <label>
          <input name="howto" type="radio" value="2"><span>블로그 검색</span>
       </label>
    </div>
    </td>
 </tr>
 <tr><td>
    <div id="check_radio_button">
       <label>
          <input name="howto" type="radio" value="3"><span>전단지를 보고</span>
       </label>
    </div>
    </td><td>
    <div id="check_radio_button">
       <label>
          <input name="howto" type="radio" value="4"><span>지인 추천</span>
       </label>
    </div>
    </td>
 </tr>
 <tr><td colspan = "2">
    <div id="check_radio_button" style = "width:45%; margin: 0 auto 0 auto;">
       <label>
          <input name="howto" type="radio" value="5"><span>이전 방문 경험</span>
       </label>
    </div>
    </td>
  </tr>
    </table>
      
</div>
  <img style = "width : 100%;height:280px" src = "image/tmon.png"><br>
  <input type = "button" class = "pass_button" id = "prev_button" value = "이전 페이지">
	<input type = "button" class = "pass_button" id = "next_button" value = "다음 페이지" disabled>
 </form>
 </body>
</html>