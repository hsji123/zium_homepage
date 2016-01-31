<?php
  session_start();
  $_SESSION['id_store'] = $_GET['id_store'];
?>
<!doctype html>
<html>

 <head>
  <meta name = "viewport" content ="width=device-width, initial-scale = 1.0 user-scalable = no"/>
  <meta charset = "utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script src = "http://code.jquery.com/jquery-latest.min.js" ></script>
  <script>
    $(document).ready(function(){
      $.ajax({
        type : "get",
        crossDomain : true,
        dataType : 'json',
        url : "http://54.68.202.182:3000/store/<?php echo $_GET['id_store']?>",

        success : function(data){
           console.log(data); // 번호에 맞게 가져온 데이터 확인
          $('#head_line').append(data[0].store_name);
          $('#head_line #store_name').attr("value",data[0].store_name);
          $('#coupon_img').attr("src",data[0].imgName);
        },
        error : function(request,status,error){
          console.log(error);
          alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
        }
      })
    })
  </script>
 </head>
 <body>
 <br>
  <p1>고객의 소리</p1><br>
  <p2>매장을 다녀간 고객의 솔직한 평가</p2>
  <br><br><br>
<form action = "coupon_list.php" method = "post">
  <div id = "head_line"> <!-- 가게 이름이 나오는 부분 -->
  <input type = "hidden" value = "" id = "store_name" name = "store_name">
  </div><br><br>

  <img id = "coupon_img" src = ""> <!-- 가게 번호에 따른 img 폴더의 이미지 파일-->
  <br>
  
  	<input type = "submit" value = "시작하기" id = "star_button">
  </form>

 </body>
</html>
