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
<div id = "top_progress">
  서비스를 평가해주세요 ( 3 / 4 )
 </div>
 <div id = "top_progress_ex">
  ※ 중복 선택 가능
 </div>
 <br><br>
<form id = "service" action = "survey_revisit.php" method = "post" >
<div style="text-align: left;"> <a style="font-size: 1pt">■</a> <a style="font-size : 15pt; color : #EA5514; font-weight : bold">별점</a>을 드래그 해주세요<br>
	<table id="star_table">
   			<tr>
   			 <td><div id="ontop"></div></div><div id="menu_div_tops"><a style="color:#EA5514"> &nbsp; &nbsp;  직원친절도</a>를 평가해 주세요</div><div id = "kindness" onclick = "check_value();"></div></td>
   			</tr>
   			<tr>
   			 <td><div id="ontop"></div><div id="menu_div_tops"><a style="color:#EA5514">&nbsp; &nbsp;가게위생</a>을 평가해 주세요</div><div id = "freshness" onclick = "check_value();"></div></td>
   			</tr>
   	</table>
   	<br>
   	<a style="font-size: 1pt">■</a> <a style="font-size : 15pt; color : #EA5514; font-weight : bold">한 줄 평가</a>를 적어주세요<br>
   	<table id="star_table">
   	<tr><td>	<textarea name = "star_disc" id="star_disc" placeholder="5자 이상 부탁드려요 ㅠ.ㅠ" onkeyup = "check_value();"></textarea></td></tr>
   </table>
</div>
<br>
<input type = "button" value = "다음페이지" id = "star_button" disabled onclick = "check_length();">
</form>
</body>
<script src="raty-master/demo/javascripts/jquery.js"></script>
<script src="raty-master/lib/jquery.raty.js"></script>
<script src="raty-master/demo/javascripts/labs.js" type="text/javascript"></script>
<script>
 //var rate = $.noConflict();
 $.fn.raty.defaults.path = 'raty-master/lib/images';
 var wid = $('#menu_div_tops').width();
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
 		console.log(document.getElementById('star_disc').value);
 		console.log($('input[name=kindness]').val());
 		console.log($('input[name=freshness]').val());
    	if(document.getElementById('star_disc').value && $('input[name=kindness]').val() && $('input[name=freshness]').val() )
    		document.getElementById('star_button').disabled = false;  
	}

	function check_length(){
		var strlen = document.getElementById('star_disc').value.length;
    	if(strlen < 5)
    		alert("5자 이상 적어주세요 제발 please....");
    	else if(strlen > 140)
    		alert("평가를 140자 이하로 적어주세요!");
    	else
    		document.getElementById('service').submit();
	}
 

</script>
</html>
