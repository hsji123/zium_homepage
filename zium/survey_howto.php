<?php
  session_start();
  if(isset($_POST['email_id'])) $_SESSION['email_id'] = $_POST['email_id']; // form action 으로 넘어온 값
  if(isset($_POST['domain'])) $_SESSION['domain'] = $_POST['domain'];

  if(isset($_POST['tab_value'])) $_SESSION['tab_value'] = $_POST['tab_value'];
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
    console.log("email : " + "<?php echo $_SESSION['email_id']?>"); // session 값 확인
    console.log("domain : " + "<?php echo $_SESSION['domain']?>");
    console.log("tab_value : " + "<?php echo $_SESSION['tab_value']?>");
	</script>
</head>
 <body>
 <div id = "top_progress">
 	어떻게 찾아오셨나요? ( 1 / 4 )
 </div>
 <div id = "top_progress_ex">
  ※하나만 선택해주세요
 </div>

 <form id = "check" method = "post" action = "survey_menu.php">
 <div onclick = "javascript:check();">
    <div id="check_radio_button">
       <label>
          <input name="howto" type="radio" value="1"><span>매장 외관을 보고</span>
       </label>
    </div>

    <div id="check_radio_button">
       <label>
          <input name="howto" type="radio" value="2"><span>블로그 검색</span>
       </label>
    </div>

    <div id="check_radio_button">
       <label>
          <input name="howto" type="radio" value="3"><span>전단지를 보고</span>
       </label>
    </div>

    <div id="check_radio_button">
       <label>
          <input name="howto" type="radio" value="4"><span>지인 추천</span>
       </label>
    </div>

    <div id="check_radio_button">
       <label>
          <input name="howto" type="radio" value="5"><span>이전 방문 경험</span>
       </label>
    </div>
</div>
	<input type = "submit" id = "pass_button" value = "다음 페이지" disabled>
 </form>
 </body>
</html>