<?php
  session_cache_limiter('no-cache, must-revalidate');
  session_start();
  $_SESSION['taste'] = $_POST['taste'];
  $_SESSION['service'] = $_POST['service'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content ="width=device-width, initial-scale = 1.0 user-scalable = no"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
  <script>
    console.log("<?php echo $_SESSION['taste']?>");
    console.log(<?php echo $_SESSION['service']?>);
    /*function check_length(){
    var strlen = document.getElementById('star_disc').value.length;
      if( 10 < strlen && strlen < 140){
        document.getElementById('next_button').disabled = false;
      }
      else
        document.getElementById('next_button').disabled = true;
  }*/
  </script>

  <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script>
  $(function(){
    $('#prev_button').click(function(){
      location.href = "survey_eval.php";
    }),
    $('#next_button').click(function(){
      document.comment_form.submit();
    })
  })
  </script>
  
	</head>
<body>
<div id = "head_line">
  한 줄 평가를 남겨주세요<br><pg>( 3 / 4 )</pg>
 </div>
 <br>
<form id = "comment" name = "comment_form" action = "survey_revisit.php" method = "post" >
<textarea name = "star_disc" id="star_disc" placeholder="저희 매장에 대한 칭찬, 불만, 조언 등을 적어주세요"></textarea>
<br>
<div id = "disc_comment">
여러분의 솔직한 한마디가<br>
소상공인에게는 큰 도움이 됩니다.
</div>
 <img style = "width : 100%; height:280px" src = "image/tmon_3.png"><br>
  <input type = "button" class = "pass_button" id = "prev_button" value = "이전 페이지">
  <input type = "button" class = "pass_button" id = "next_button" value = "다음 페이지">
</form>

</body>
</html>
