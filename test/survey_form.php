<?php
  session_cache_limiter('no-cache, must-revalidate');
  session_start();
  $_SESSION['revisit'] = $_POST['revisit'];
    //require "_banner.php";
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
      location.href = "survey_revisit.php";
    }),
    $('#next_button').click(function(){
      goDetail();
    })
  })
  </script>
  <script>

  function wrapWindowByMask() {
    //화면의 높이와 너비를 구한다.
   var maskHeight = $(document).height(); 
    var maskWidth = $(window).width();

    //문서영역의 크기 
    console.log( "document 사이즈:"+ $(document).width() + "*" + $(document).height()); 
    //브라우저에서 문서가 보여지는 영역의 크기
    console.log( "window 사이즈:"+ $(window).width() + "*" + $(window).height());    

    //마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채운다.
    $('#mask').css({
      'width' : maskWidth,
      'height' : maskHeight
    });

    //애니메이션 효과
    //$('#mask').fadeIn(1000);      
    $('#mask').fadeTo("slow", 0.5);
  }

  function popupOpen() {
    $('.layerpop').css("position", "absolute");
    //영역 가운에데 레이어를 뛰우기 위해 위치 계산 
    $('.layerpop').css("top",'25%');
    $('.layerpop').css("left","1.5%");
    $('.layerpop').css("width","96%");
    $('#layerbox').show();
  }

  function popupClose() {
    $('#layerbox').hide();
    $('#mask').hide();
  }

  function goDetail() {

    /*팝업 오픈전 별도의 작업이 있을경우 구현*/ 

    popupOpen(); //레이어 팝업창 오픈 
    wrapWindowByMask(); //화면 마스크 효과 
  }
</script>
</head>
 <body>
 <div style = "float:left; font-size:14px; padding:5px;position:absolute; font-family:hanna">sponsored</div>
 <div id = "head_line" style = "padding:20px 0px 15px 0px; font-size:27px">
    
  전자제품을 살 때 가장<br>중요한 기준은 무엇입니까?
 </div><br>

 <form id = "check" method = "post" action = "survey_reward.php">
 <div onclick = "javascript:check();">
 <!--
 <table id = "howto_table" style = "margin-bottom:0px">
 <tr><td>
    <div id="check_radio_button">
      <img src = "image/tmon_5_1.png" id = "icon_img">
       <label>
          <input name="icon" type="radio" value="1"><span>스위티</span>
       </label>
    </div>
    </td><td>
    <div id="check_radio_button">
      <img src = "image/tmon_5_2.png" id = "icon_img">
       <label>
          <input name="icon" type="radio" value="2"><span>스마티</span>
       </label>
    </div>
    </td>
 </tr>
 <tr><td>
    <div id="check_radio_button">
      <img src = "image/tmon_5_3.png" id = "icon_img">
       <label>
          <input name="icon" type="radio" value="3"><span>위티</span>
       </label>
    </div>
    </td><td>
    <div id="check_radio_button">
      <img src = "image/tmon_5_4.png" id = "icon_img">
       <label>
          <input name="icon" type="radio" value="4"><span>트러스티</span>
       </label>
    </div>
    </td>
 </tr>
 </table>
 <table id = "temp_table">
 <tr><td>
    <img src = "image/tmon_5_5.png" id = "icon_img">
    <div id="check_radio_button" style = "width:60%; margin:0;">
       <label>
          <input name="icon" type="radio" value="5"><span>에너제티</span>
       </label>
    </div>
    </td>
  </tr>
    </table>
-->
<table id = "howto_table">
 <tr><td>
    <div id="check_radio_button">
       <label>
          <input name="sponsor_question" type="radio" value="1"><span>가성비</span>
       </label>
    </div>
    </td><td>
    <div id="check_radio_button">
       <label>
          <input name="sponsor_question" type="radio" value="2"><span>성능</span>
       </label>
    </div>
    </td>
 </tr>
 <tr><td>
    <div id="check_radio_button">
       <label>
          <input name="sponsor_question" type="radio" value="3"><span>가격</span>
       </label>
    </div>
    </td><td>
    <div id="check_radio_button">
       <label>
          <input name="sponsor_question" type="radio" value="4"><span>브랜드</span>
       </label>
    </div>
    </td>
 </tr>
 <tr><td colspan = "2">
    <div id="check_radio_button" style = "width:45%; margin: 0 auto 0 auto;">
       <label>
          <input name="sponsor_question" type="radio" value="5"><span>A/S</span>
       </label>
    </div>
    </td>
  </tr>
    </table>
</div>
  <img style = "width : 100%; height:280px" src = "image/tmon_5.png"><br>
  <input type = "button" class = "pass_button" id = "prev_button" value = "이전 페이지">
  <input type = "button" class = "pass_button" id = "next_button" value = "다음 페이지">

  <!-- 팝업뜰때 배경 -->
      <div id="mask"></div>

      <!--Popup Start -->
      <div id="layerbox" class="layerpop">
        <article class="layerpop_area" style="background: rgba(0,0,0,0);">
          <!-- div title 사용하면 제목 추가가 됨 -->
          <div class = "title">
          경품을 수령할 핸드폰 번호를<br>입력해 주세요
          <a href="javascript:popupClose();" class="layerpop_close"
            id="layerbox_close"></a>
          </div>
          <!-- exit 아이콘 넣으면 팝업 종료 아이콘-->
          <div class="content">
            <input type = "text" name = "phone_num" id = "phone_num" placeholder = "'-'생략하고 써주세요">
            <div id = "info_prov">
              <개인정보 수집 및 이용 동의><br>
              -개인정보 수집/이용 목적 : 이벤트 당첨 확인<br>및 경품 발송<br>
              -수집 항목 : 성별, 연령대, 방문횟수, 핸드폰 번호<br>
              <m style = "font-weight:bold">-보유 및 이용기간 : 당첨자 발표 및 경품배송<br>완료 시 까지</m>
            </div>
            <br>
            <input type = "submit" id = "start_button" value = "동의하고 평가마치기">
            <br><br>
          </div>
        </article>

      </div>
      <!--Popup End -->
 </form>
 </body>
</html>