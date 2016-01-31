<?php
  session_cache_limiter('no-cache, must-revalidate');
  session_start();
  $_SESSION['comment'] = $_POST['star_disc'];
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
        if(document.getElementsByName('revisit')[i].checked){
          document.getElementById('next_button').disabled = false;
        }
      }
    }
  </script>

  <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script>
  $(function(){
    $('#prev_button').click(function(){
      location.href = "survey_comment.php";
    }),
    $('#next_button').click(function(){
      document.revisit_form.submit();
    })
  })
    
  </script>
</head>
 <body>
 <div id = "head_line">
  재방문 의사가 있으신가요?<br><pg>( 4 / 4 )</pg>
 </div><br>

 <form id = "check" name = "revisit_form" method = "post" action = "survey_form.php">
 <div onclick = "javascript:check();">
 <table id = "howto_table">
 <tr><td>
    <div id="check_radio_button">
       <label>
          <input name="revisit" type="radio" value="1"><span>매우 그렇다</span>
       </label>
    </div>
    </td><td>
    <div id="check_radio_button">
       <label>
          <input name="revisit" type="radio" value="2"><span>대체로 그렇다</span>
       </label>
    </div>
    </td>
 </tr>
 <tr><td>
    <div id="check_radio_button">
       <label>
          <input name="revisit" type="radio" value="3"><span>보통이다</span>
       </label>
    </div>
    </td><td>
    <div id="check_radio_button">
       <label>
          <input name="revisit" type="radio" value="4"><span>대체로 부정적이다</span>
       </label>
    </div>
    </td>
 </tr>
 <tr><td colspan = "2">
    <div id="check_radio_button" style = "width:45%; margin: 0 auto 0 auto;">
       <label>
          <input name="revisit" type="radio" value="5"><span>절대 오지 않는다</span>
       </label>
    </div>
    </td>
  </tr>
    </table>
</div>
  <img style = "width : 100%; height:280px" src = "image/tmon_4.png"><br>
  <input type = "button" class = "pass_button" id = "prev_button" value = "이전 페이지">
  <input type = "button" class = "pass_button" id = "next_button" value = "다음 페이지" disabled>
 </form>
 </body>
</html>