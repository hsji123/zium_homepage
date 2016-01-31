<?php
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
</script>
</head>

<body>
<form action = "survey_menu.php" method = "post">
 <div id = "head_line">
   기본 정보를<br> 입력해 주세요
 </div>

 <div id="top_title"><a style="font-weight: bold; color : #EA5514;">|</a> 성별
  <table>
    <tr>
     <td></td>
     <td></td>
    </tr>
  </table>
 </div>

 <div id="top_title"><a style="font-weight: bold; color : #EA5514;">|</a> 연령대
 </div>

 <div id="top_title"><a style="font-weight: bold; color : #EA5514;">|</a> 방문빈도
 </div>
 <input type = "submit" value = "다음페이지" id = "star_button">
 </form>
</body>
</html>
