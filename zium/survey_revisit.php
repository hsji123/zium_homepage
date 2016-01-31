<?php
  session_start();
  if(isset($_POST['kindness'])) $_SESSION['kind_point'] = $_POST['kindness'];
  if(isset($_POST['freshness'])) $_SESSION['clean_point'] = $_POST['freshness'];
  if(isset($_POST['star_disc'])) $_SESSION['service_comment'] = $_POST['star_disc'];
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
        if(document.getElementsByName('revisit')[i].checked)
          document.getElementById('pass_button').disabled = false;
      }
    }
    console.log(<?php echo $_SESSION['kind_point']?>);
    console.log(<?php echo $_SESSION['clean_point']?>);
    console.log("<?php echo $_SESSION['service_comment']?>"); // string
  </script>
</head>
 <body>
  <?
    //20,21
    require "_banner.php";
  ?>
  <div id = "top_progress">
  재방문 하실 의향이 있나요? (4/4)
 </div>
 <div id = "top_progress_ex">
  ※하나만 선택해주세요
 </div>

 <form action = "survey_reward.php" method = "post">
 <div onclick = "javascript:check();">
    <div id="check_radio_button">
       <label>
          <input name="revisit" type="radio" value="1"><span>매우 긍정적이다</span>
       </label>
    </div>

    <div id="check_radio_button">
       <label>
          <input name="revisit" type="radio" value="2"><span>대체로 긍정적이다</span>
       </label>
    </div>

    <div id="check_radio_button">
       <label>
          <input name="revisit" type="radio" value="3"><span>보통이다</span>
       </label>
    </div>

    <div id="check_radio_button">
       <label>
          <input name="revisit" type="radio" value="4"><span>대체로 부정적이다</span>
       </label>
    </div>

    <div id="check_radio_button">
       <label>
          <input name="revisit" type="radio" value="5"><span>매우 부정적이다</span>
       </label>
    </div>
</div>

	<input type = "submit" id = "pass_button" value = "다음 페이지" disabled>
 </form>
 </body>
</html>