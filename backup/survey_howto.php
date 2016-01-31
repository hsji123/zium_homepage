<?php
  session_start();
    //require "_banner.php";
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
				if(document.getElementsByName('howto')[i].checked)
					document.getElementById('pass_button').disabled = false;
			}
		}
	</script>
</head>
 <body>
 <div id = "head_line">
 	어떻게 바른치킨에<br>
  찾아 오셨나요? ( 1 / 4 )
 </div><br>

 <form id = "check" method = "post" action = "survey_service.php">
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
    <div id="check_radio_button">
       <label>
          <input name="howto" type="radio" value="5"><span>이전 방문 경험</span>
       </label>
    </div>
    </td>
  </tr>
    </table>
</div>
  <img style = "width : 100%"src = "image/tmon.png">
  <input type = "submit" id = "pass_button" value = "이전 페이지">
	<input type = "submit" id = "pass_button" value = "다음 페이지">
 </form>
 </body>
</html>