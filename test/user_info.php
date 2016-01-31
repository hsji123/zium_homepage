<?php
  session_cache_limiter('no-cache, must-revalidate');
  session_start();
  $_SESSION['store_name'] = $_POST['store_name'];
?>
<!doctype html>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<meta name="viewport" content="width=device-width, initial-scale = 1.0 user-scalable = no" />

<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script>
  $(function(){
    console.log("<?php echo $_SESSION['store_name']?>");
    $('#sex_radio_button').scroll(function(){
      return 0;
    })
  })
</script>
</head>
<body>
<form action = "survey_menu.php" method = "post">
 <div id = "head_line" style = "padding:24px 0px 8px 0px">
   기본 정보를 선택해 주세요
 </div>

 <div id="top_title"><a>|</a> 성별
 </div>
 <table id = "sex_table">
 <tr><td>
  <div id="sex_radio_button">
       <label>
          <input name="sex" type="radio" value="man"><span>남</span>
       </label>
    </div>
  </td><td>
    <div id="sex_radio_button">
       <label>
          <input name="sex" type="radio" value="woman"><span>여</span>
       </label>
    </div>
 </td>
 </tr>
 </table>

 <div id="top_title"><a>|</a> 연령대
 </div>
 <table id = "user_table">
 <tr><td>
    <div id="user_radio_button">
       <label>
          <input name="age" type="radio" value="10"><span>10대</span>
       </label>
    </div>
    </td><td>
    <div id="user_radio_button">
       <label>
          <input name="age" type="radio" value="20"><span>20대</span>
       </label>
    </div>
    </td><td>
    <div id="user_radio_button">
       <label>
          <input name="age" type="radio" value="30"><span>30대</span>
       </label>
    </div>
    </td></tr>
  <tr><td>
    <div id="user_radio_button">
       <label>
          <input name="age" type="radio" value="40"><span>40대</span>
       </label>
    </div>
    </td><td>
    <div id="user_radio_button">
       <label>
          <input name="age" type="radio" value="50"><span>50대</span>
       </label>
    </div>
    </td><td>
    <div id="user_radio_button">
       <label>
          <input name="age" type="radio" value="60"><span>60대</span>
       </label>
    </div>
    </td>
  </tr>
    </table>

 <div id="top_title" style = "padding-bottom:0"><a>|</a> 방문빈도
 </div>
  <table id = "frequency_table">
 <tr><td>
  <div id="frequency_radio_button">
       <label>
          <input name="frequency" type="radio" value="no"><span>첫 방문<br>입니다</span>
       </label>
    </div>
  </td><td>
    <div id="frequency_radio_button">
       <label>
          <input name="frequency" type="radio" value="yes"><span>재 방문<br>입니다</span>
       </label>
    </div>
 </td>
 </tr>
 </table>
 <input type = "submit" value = "다음페이지" id = "start_button">
 </form>
</body>
</html>
