<!doctype html>

<html>
<head>
  <meta charset="utf-8">
  <title>jQuery UI Tabs - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  var tab = $.noConflict();
  tab(function() {
    tab( "#tabs" ).tabs();
  });
  </script>


  <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
  <script>
  $(document).ready(function(){
    document.getElementById('adjust').value = "수정완료";
  })
    
  </script>
</head>
<body>
 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">회원정보</a></li>
    <!--<li><a href="#tabs-2">메뉴편집</a></li>
    <li><a href="#tabs-3">결제정보</a></li>-->
  </ul>
  <div id="tabs-1">
  	<font size = "16pt">프로필</font>
  	<font color = "gray"> 고객에게 보내는 메일에서 보여지는 부분입니다.</font>
  	<input type = "button" id = "adjust" value = "수정하기"><br>

  <img src = "a.png">
  <textarea readonly>가게 소개 및 정보 text</textarea>

  <hr>
  <h1>개인정보</h1>
  	<table>
  	 <tr>
  	  <td>
  	   사업자 등록 번호
  	  </td>
  	  <td>
  	   <input type = "text">
  	  </td>
  	 </tr>

  	 <tr>
  	  <td>
  	   상호명
  	  </td>
  	  <td>
  	   <input type = "text">
  	  </td>
  	 </tr>

  	 <tr>
  	  <td>
  	   비밀번호
  	  </td>
  	  <td>
  	   <input type = "password">
  	  </td>
  	 </tr>

  	 <tr>
  	  <td>
  	   비밀번호 확인
  	  </td>
  	  <td>
  	   <input type = "password">
  	  </td>
  	 </tr>

  	 <tr>
  	  <td>
  	   매장 주소
  	  </td>
  	  <td>
  	   <input type = "text">-<input type = "text"><br>
  	   <input type = "text"><br>
  	   <input type = "text">
  	  </td>
  	 </tr>

  	 <tr>
  	  <td>
  	   매장 전화번호
  	  </td>
  	  <td>
  	   <input type = "text">
  	  </td>
  	 </tr>

  	 <tr>
  	  <td>
  	   대표이메일
  	  </td>
  	  <td>
  	   <input type = "text"> @ <input type = "text">
  	  </td>
  	 </tr>

  	</table>
    <input type = "button" id = "personal_adjust" value = "수정완료">
  </div>

  <div id="tabs-2">
  </div>
  <div id="tabs-3">
  </div>
</div>
 
 
</body>
</html>