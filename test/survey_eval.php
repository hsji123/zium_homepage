<?php
  session_cache_limiter('no-cache, must-revalidate');
  session_start();
  $_SESSION['howto'] = $_POST['howto'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content ="width=device-width, initial-scale = 1.0 user-scalable = no"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" />


  <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script>
  $(function(){
    $('#prev_button').click(function(){
      location.href = "survey_howto.php";
    }),
    $('#next_button').click(function(){
      document.eval_form.submit();
    })
  })
  </script>
  
	</head>
<body>
<div id = "head_line">
  별점을 드래그 해주세요<br><pg>( 2 / 4 )</pg>
 </div>
 <br>
<form id = "eval" name = "eval_form" action = "survey_comment.php" method = "post" >
<div style="text-align: left;">
<table id="star_table">
   			<tr>
   			 <td style = "width:25%;background-color: #E5E5E5;border-radius: 10px;">맛</td><td><div id = "kindness" onclick = "check_value();"></div></td>
   			</tr>
   			<tr>
   			 <td style = "width:25%;background-color: #E5E5E5;border-radius: 10px;">서비스</td><td><div id = "freshness" onclick = "check_value();"></div></td>
   			</tr>
   	</table>
</div>
 <img style = "width : 100%; height:280px" src = "image/tmon_2.png"><br>
  <input type = "button" class = "pass_button" id = "prev_button" value = "이전 페이지">
  <input type = "button" class = "pass_button" id = "next_button" value = "다음 페이지" disabled>
</form>

</body>
<script src="raty-master/demo/javascripts/jquery.js"></script>
<script src="raty-master/lib/jquery.raty.js"></script>
<script src="raty-master/demo/javascripts/labs.js" type="text/javascript"></script>
<script>
 //var rate = $.noConflict();
 $.fn.raty.defaults.path = 'raty-master/lib/images';
 var wid = $('#eval div').width();
 $('#kindness').raty({
 	half : true,
 	width:200,
 	scoreName : 'taste'
 });
 $('#freshness').raty({
 	half : true,
 	width:200,
 	scoreName : 'service'
 });
	function check_value(){
 		console.log($('input[name=taste]').val());
 		console.log($('input[name=service]').val());
    	if($('input[name=taste]').val() && $('input[name=service]').val() ){
        document.getElementById('next_button').disabled = false;
      }
	}
</script>
</html>
