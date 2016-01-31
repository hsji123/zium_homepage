<?php
  session_start();
  if(isset($_POST['category'])) $_SESSION['category'] = $_POST['category'];
  // 메뉴 이름 가져오면 세션에 메뉴 값 저장
  // 두개 이상일 경우 필요
  if(isset($_POST['menu_name'])) $_SESSION['menu_name'] = $_POST['menu_name'];
  if(isset($_POST['point'])) $_SESSION['point'] = $_POST['point'];
  if(isset($_POST['menu-disc'])) $_SESSION['menu_comment'] = $_POST['menu-disc'];
	//14,15,16,17 다음페이지 X
    //require "_banner.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content ="width=device-width, initial-scale = 1.0 user-scalable = no"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script type = "text/javascript">
		console.log(<?php echo $_SESSION['category']?>);
		console.log("<?php echo $_SESSION['menu_name']?>"); // string
		console.log(<?php echo $_SESSION['point']?>);
		console.log("<?php echo $_SESSION['menu_comment']?>"); // string
		// 카테고리 - 메뉴 - 점수 - 점수 내용
	</script>
  
	</head>
<body>
<div id = "head_line">
  별점을 매겨 주세요~!<br>( 2 / 4 )
 </div>
 <br>
<form id = "service" action = "survey_revisit.php" method = "post" >
<div style="text-align: left;">
<table id="star_table">
   			<tr>
   			 <td>맛</td><td><div id = "kindness" onclick = "check_value();"></div></td>
   			</tr>
   			<tr>
   			 <td>서비스</td><td><div id = "freshness" onclick = "check_value();"></div></td>
   			</tr>
   	</table>
   	<br>
   </table>
</div>
<br>
<input type = "submit" value = "다음페이지" id = "star_button">
</form>
</body>
<script src="raty-master/demo/javascripts/jquery.js"></script>
<script src="raty-master/lib/jquery.raty.js"></script>
<script src="raty-master/demo/javascripts/labs.js" type="text/javascript"></script>
<script>
 //var rate = $.noConflict();
 $.fn.raty.defaults.path = 'raty-master/lib/images';
 var wid = $('#service div').width();
 $('#kindness').raty({
 	half : true,
 	width:wid,
 	scoreName : 'kindness'
 });
 $('#freshness').raty({
 	half : true,
 	width:wid,
 	scoreName : 'freshness'
 });
	function check_value(){
 		console.log($('input[name=kindness]').val());
 		console.log($('input[name=freshness]').val());
    	if($('input[name=kindness]').val() && $('input[name=freshness]').val() )
    		document.getElementById('star_button').disabled = false;  
	}
</script>
</html>
