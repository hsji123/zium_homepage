<?php
  session_start();
  $_SESSION['store_name'] = $_POST['store_name'];
?>
<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale = 1.0 user-scalable = no" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="css/jquery/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#menu_tabs" ).tabs({
      active : 0
    });
  });
  </script>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<!--드래그 할수 있는 기능을 사용하기 위해서 draggable();-->

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
    $('.layerpop').css("top","0");
    $('.layerpop').css("height","90%");
    $('.layerpop').css("left","2.5%");
    $('.layerpop_close').css("display","block");
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
  // 첫번쨰 팝업 끝//
  //+++++++++++++++++++++++++++++++++++++++++++++++++//

  function wrapWindowByMask_email() {
    //화면의 높이와 너비를 구한다.
    var maskHeight = $(document).height(); 
    var maskWidth = $(window).width();

    //문서영역의 크기 
    console.log( "document 사이즈:"+ $(document).width() + "*" + $(document).height()); 
    //브라우저에서 문서가 보여지는 영역의 크기
    console.log( "window 사이즈:"+ $(window).width() + "*" + $(window).height());    

    //마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채운다.
     $('#mask_email').css({
       'width' : maskWidth,
       'height' : maskHeight
     });

//     //애니메이션 효과
//     //$('#mask').fadeIn(1000);      
	   $('#mask_email').fadeTo("slow", 0.8);

    $('#mask_email').css({
        'width' : maskWidth,
        'height' : maskHeight
      });
    

    $('#mask_email').fadeTo("slow", 0.8);
      
  }

  function popupOpen_email() {
    $('.layerpop_email').css("position", "absolute");
    //영역 가운에데 레이어를 뛰우기 위해 위치 계산 
    $('.layerpop_email').css("top","25%");
    $('.layerpop_email').css("height","60%");
    $('.layerpop_email').css("left","1.5%");
    $('.layerpop_email').css("center",(($(window).width() - $('.layerpop').outerWidth()) / 2) + $(window).scrollLeft());
    $('#layerbox_email').show();
  }

  function popupClose_email() {
    $('#layerbox_email').hide();
    $('#mask_email').hide();
  }

  function goDetail_email() {
    /*팝업 오픈전 별도의 작업이 있을경우 구현*/ 
    popupOpen_email(); //레이어 팝업창 오픈 
    wrapWindowByMask_email(); //화면 마스크 효과 
  }



  function check_email_id(){
    var email_check = $('#email_id').val();
    var check_korean = /[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]{2,16}/;

    if(check_korean.test(email_check)){
      alert('한글');
    } 
    else {
      if(!document.getElementById('email_id').value)
        alert("이메일을 입력해주세요!");
      else if(document.getElementById('email_list').value == "default" || document.getElementById('email_list').value == "")
        alert("도메인을 선택/입력 해주세요!");
      else
        document.getElementById('submit_email').submit();
    }
  }

    function email_inp(){
      if($('#email_list').val() == "email_input"){
        $('#email_list').remove();
        var direct = '';
        direct += '<input type = text name = domain id = email_list class = content_box placeholder = 직접입력>';
        $('.content_email').append(direct);
      }
    }


    function menu_detail(index){
      $('#layerbox .layerpop_area .content').empty();
      if(index == 0){
        var detail = '<Br><h1 id="pop-title" >롤린스 기모 맨투맨</h1>';
        detail += '<img id="benefit_tab_img_detail" src="image/store_img/shopping_1_detail.jpg" style="height: 200px;">';
        detail += '<div id="benefit_tab_detail">베이직한 디테일 라인으로 다양한 코디에<br>활용해주기 좋은 맨투맨입니다~<br>7가지 색상이 준비되어 있습니다.</div>';
        detail += '<br>※쿠폰은 이메일로 전송됩니다.<br><br>';
        detail += '<input  type="button" value="쿠폰 선택하기" id="star_button"  onclick="javascript:goDetail_email();" style="font-size: 9pt;"> <br>';
        detail += '<br>  <br>';
        $('#layerbox .layerpop_area .content').append(detail);
        $('input:hidden[name="tab_value"]').attr("value","shopping");
        goDetail();
      }
      if(index == 1){
        var detail = '<Br><h1 id="pop-title" >피치 기모 스키니 팬츠</h1>';
        detail += '<img id="benefit_tab_img_detail" src="image/store_img/shopping_2_detail.jpg" style="height: 200px;">';
        detail += '<div id="benefit_tab_detail">입어도 절대 뚱뚱해 보이지 않는,<br>따~뜻한 기모 팬츠입니다^^<br>7가지 색상이 준비되어 있습니다.</div>';
        detail += '<br>※쿠폰은 이메일로 전송됩니다.<br><br>';
        detail += '<input  type="button" value="쿠폰 선택하기" id="star_button"  onclick="javascript:goDetail_email();" style="font-size: 9pt;"> <br>';
        detail += '<br>  <br>';
        $('#layerbox .layerpop_area .content').append(detail);
        $('input:hidden[name="tab_value"]').attr("value","shopping");
        goDetail();
      }
      if(index == 2){
        var detail = '<Br><h1 id="pop-title" >페론 반바지 기모 레깅스</h1>';
        detail += '<img id="benefit_tab_img_detail" src="image/store_img/shopping_3_detail.jpg" style="height: 200px;">';
        detail += '<div id="benefit_tab_detail">다양한 포인트를 준 팬츠에,베이직한<br>레깅스라인으로 다양하게 코디하세요^^<br>2가지 색상이 준비되어 있습니다.</div>';
        detail += '<br>※쿠폰은 이메일로 전송됩니다.<br><br>';
        detail += '<input  type="button" value="쿠폰 선택하기" id="star_button"  onclick="javascript:goDetail_email();" style="font-size: 9pt;"> <br>';
        detail += '<br>  <br>';
        $('#layerbox .layerpop_area .content').append(detail);
        $('input:hidden[name="tab_value"]').attr("value","shopping");
        goDetail();
      }
      if(index == 3){
        var detail = '<Br><h1 id="pop-title" >띵킹 커피</h1>';
        detail += '<img id="benefit_tab_img_detail" src="image/store_img/coffee_1_detail.jpg" style="height: 200px;">';
        detail += '<div id="benefit_tab_detail">대표 메뉴<br>스모그치즈빙수 10,000<br>치즈케이크라떼 5,000<br>아메리카노 3,800</div>';
        detail += '<br>※<t style = "color:red;">쿠폰</t>과 <t style = "color:red;">찾아가는 길</t>은 <t style = "color:red;">이메일</t>로 발송됩니다.<br><br>';
        detail += '<input  type="button" value="쿠폰 선택하기" id="star_button"  onclick="javascript:goDetail_email();" style="font-size: 9pt;"> <br>';
        detail += '<br>  <br>';
        $('#layerbox .layerpop_area .content').append(detail);
        $('input:hidden[name="tab_value"]').attr("value","coffee");
        goDetail();
      }
      if(index == 4){
        var detail = '<Br><h1 id="pop-title" >춤추는 돌고래</h1>';
        detail += '<img id="benefit_tab_img_detail" src="image/store_img/sing_1_detail.jpg" style="height: 200px;">';
        detail += '<div id="benefit_tab_detail">최신식 노래 시설을 갖춘 노래방입니다!<br>넓고 쾌적한 환경을 제공해드립니다.</div>';
        detail += '<br>※<t style = "color:red;">쿠폰</t>과 <t style = "color:red;">찾아가는 길</t>은 <t style = "color:red;">이메일</t>로 발송됩니다.<br><br>';
        detail += '<input  type="button" value="쿠폰 선택하기" id="star_button"  onclick="javascript:goDetail_email();" style="font-size: 9pt;"> <br>';
        detail += '<br>  <br>';
        $('#layerbox .layerpop_area .content').append(detail);
        $('input:hidden[name="tab_value"]').attr("value","sing");
        goDetail();
      }
    }

    /*******************************************************************/
    /*******************************************************************/
      function wrapWindowByMask_prov() {
    //화면의 높이와 너비를 구한다.
    var maskHeight = $(document).height(); 
    var maskWidth = $(window).width();

    //문서영역의 크기 
    console.log( "document 사이즈:"+ $(document).width() + "*" + $(document).height()); 
    //브라우저에서 문서가 보여지는 영역의 크기
    console.log( "window 사이즈:"+ $(window).width() + "*" + $(window).height());    

    //마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채운다.
     $('#mask_prov').css({
       'width' : maskWidth,
       'height' : maskHeight
     });

//     //애니메이션 효과
//     //$('#mask').fadeIn(1000);      
     $('#mask_prov').fadeTo("slow", 0.8);

    $('#mask_prov').css({
        'width' : maskWidth,
        'height' : maskHeight
      });
    

    $('#mask_prov').fadeTo("slow", 0.8);
      
  }

  function popupOpen_prov() {
    $('.layerpop_prov').css("position", "absolute");
    //영역 가운에데 레이어를 뛰우기 위해 위치 계산 
    $('.layerpop_prov').css("top","25%");
    $('.layerpop_prov').css("height","60%");
    $('.layerpop_prov').css("left","1.5%");
    $('.layerpop_prov').css("center",(($(window).width() - $('.layerpop').outerWidth()) / 2) + $(window).scrollLeft());
    $('#layerbox_prov').show();
  }

  function popupClose_prov() {
    $('#layerbox_prov').hide();
    $('#mask_prov').hide();
  }

  function goDetail_prov() {
    /*팝업 오픈전 별도의 작업이 있을경우 구현*/ 
    popupOpen_prov(); //레이어 팝업창 오픈 
    wrapWindowByMask_prov(); //화면 마스크 효과 
  }
</script>

<script src = "http://code.jquery.com/jquery-latest.min.js"></script> 
<script>
  var shop = $.noConflict();
  shop(document).ready(function(){
    
    shop.ajax({ // category에 쇼핑몰 내용 하나 추가
                // 눌렀을때 내용 추가는 아직 안함
      type : "get",
      crossDomain : true,
      url : "http://54.68.202.182:3000/store/shopping",
      dataType : 'json',
      success : function(data){
        console.log(data);
        /*shop.each(data,function(index,obj){
          var coupon_list_table = '<table><tr><td><img id = benefit_tab_img ';
          coupon_list_table += 'src = ' + obj.imgName + '></td>';
          coupon_list_table += '<td id = menu_benefit_contents><a id = titles>';
          coupon_list_table += obj.shopping_name + '</a><br>';
          coupon_list_table += obj.benefit + '</td></tr></table>';
          shop('#menu_tabs-2').append(coupon_list_table);
        })*/
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
	<div id="menu_tabs" algin="center">

		<ul >
			<li style="padding-top: 2%;" ><a href="#menu_tabs-1" style="text-align: center;">커피숍</a></li>
			<li style="padding-top: 2%;" ><a href="#menu_tabs-2" style="text-align: center;">쇼핑몰</a></li>
			<li style="padding-top: 2%;" ><a href="#menu_tabs-3" style="text-align: center;">노래방</a></li>
		</ul>

		<div id="menu_tabs-1">
    <hr id="top_line">
		  <div id="top_title"><a style="font-weight: bold; color : #EA5514;">|</a> 원하시는 쿠폰을 선택하세요</div>
      <div id="menu_benefit" onclick = "menu_detail(3);">
        <table>
          <tr>
            <td><img id="benefit_tab_img" src="image/store_img/coffee_1.jpg"></td>
            <td id="menu_benefit_contents"><input type="button" value="띵킹커피" style="background-color: black;color: white;border: 3px outset #385D8A;">
            <br><a id="titles" >전 메뉴 <t style = "color:orange;">20%</t> 할인</a><br>도보 1분 거리
            </td>
          </tr>
        </table>
      </div>
      <div id="top_title"><a style="font-weight: bold; color : #EA5514;">|</a>추천 이벤트</div>
      <a href = "http://www.danilove.co.kr"><img src = "image/store_img/dani_event.jpg" id = "dani"></a>
  	</div>

		<div id="menu_tabs-2">
			<hr id="top_line">
      <div id="top_title"><a style="font-weight: bold; color : #EA5514;">|</a> 원하시는 쿠폰을 선택하세요</div>
      <div id="menu_benefit" onclick = "menu_detail(0);">
        <table>
          <tr>
            <td><img id="benefit_tab_img" src="image/store_img/shopping_1.jpg"></td>
            <td id="menu_benefit_contents"><input type="button" value="4000원 할인" style="background-color: black;color: white;border: 3px outset #385D8A;">
            <br><a id="titles" >롤린스 기모 맨투맨</a><br>18900 → 14900
            </td>
          </tr>
        </table>
      </div>

      <div id="menu_benefit" onclick = "menu_detail(1);">
        <table>
          <tr>
            <td><img id="benefit_tab_img" src="image/store_img/shopping_2.jpg"></td>
            <td id="menu_benefit_contents"><input type="button" value="3000원 할인" style="background-color: black;color: white;border: 3px outset #385D8A;">
            <br><a id="titles" >피치 기모 스키니팬츠</a><br>17900 → 14900
            </td>
          </tr>
        </table>
      </div>

      <div id="menu_benefit" onclick = "menu_detail(2);">
        <table>
          <tr>
            <td><img id="benefit_tab_img" src="image/store_img/shopping_3.jpg"></td>
            <td id="menu_benefit_contents"><input type="button" value="3000원 할인" style="background-color: black;color: white;border: 3px outset #385D8A;">
            <br><a id="titles" >페론 기모 반바지 레깅스</a><br>17900 → 14900
            </td>
          </tr>
        </table>
      </div>      
		</div>

		<div id="menu_tabs-3">
      <hr id="top_line">
      <div id="top_title"><a style="font-weight: bold; color : #EA5514;">|</a> 원하시는 쿠폰을 선택하세요</div>
      <div id="menu_benefit" onclick = "menu_detail(4);">
        <table>
          <tr>
            <td><img id="benefit_tab_img" src="image/store_img/sing_1.jpg"></td>
            <td id="menu_benefit_contents"><input type="button" value="춤추는 돌고래" style="background-color: black;color: white;border: 3px outset #385D8A;">
            <br><a id="titles" ><t style = "color:orange;">20%</t>할인(주말은<t style = "color:orange;">10%</t>)</a><br>도보 2분 거리
            </td>
          </tr>
        </table>
      </div>
      <div id="top_title"><a style="font-weight: bold; color : #EA5514;">|</a>추천 이벤트</div>
      <a href = "https://play.google.com/store/apps/details?id=kr.co.smartskin.danilove"><img src ="image/store_img/dani_app.jpg" id = "dani"></a>
		</div>
	</div>




  <!-- 메뉴 탭 끝 ***********************************************************-->
      <!-- 팝업뜰때 배경 -->
      <div id="mask"></div>

      <!--Popup Start -->
      <div id="layerbox" class="layerpop">
        <article class="layerpop_area" style="background: rgba(0,0,0,0);">
          <!-- div title 사용하면 제목 추가가 됨 -->
          <a href="javascript:popupClose();" class="layerpop_close"
            id="layerbox_close"></a>

          <!-- exit 아이콘 넣으면 팝업 종료 아이콘-->

          <br>
          <div class="content"></div>
        </article>

      </div>
      <!--Popup End -->
      <div id="mask_email"></div>

  <!--Popup Start -->
  <div id="layerbox_email" class="layerpop_email">
    <article class="layerpop_area_email">
    <!-- div title 사용하면 제목 추가가 됨 -->
   <a href="javascript:popupClose_email();" class="layerpop_close_email" id="layerbox_close_email"></a>
      <!-- exit 아이콘 넣으면 팝업 종료 아이콘-->
    
      <br>
    <div class="content">
      <form action = "survey_howto.php" id = "submit_email" method = "post">
      <h1 style="font-size: 15pt; text-align: left">&nbsp;&nbsp; 쿠폰을 수령할 이메일을 적어주세요.</h1>
      <div class="content_email">
        <input type = "text" name = "email_id" id = "email_id" class = "content_box" value = "" placeholder="ID">@
        <select class = "content_box" name = "domain" id = "email_list"   style="color: white;" onchange = "email_inp();">
          <option value = "default">선택해주세요</option>
          <option value = "naver.com">naver.com</option>
          <option value = "gmail.com">gmail.com</option>
          <option value = "daum.net">daum.net</option>
          <option value = "email_input">직접입력</option>
        </select>

        <input type = "hidden" name = "tab_value" value = "">
      </div>
     <ul class="mail_ul">
                <li>개인정보 수집 및 활용 <input type="button" value="약관보기" id="id_btn" onclick = "goDetail_prov();"></li>
                <li>우수 평가에 대한 쿠폰 발송 및 이벤트<br>공지 발송을 위한 이메일 수신동의
              </ul>
      <input type = "button" value = "모두 동의하고 평가 시작" id = "star_button" style="font-size: 10pt; color: white;" onclick = "check_email_id();">
    </form>
    </div>
    
    </article>
  </div>
  <!--Popup End -->

    <!-- 팝업뜰때 배경 -->
      <div id="mask_prov"></div>

      <!--Popup Start -->
      <div id="layerbox_prov" class="layerpop_prov">
        <article class="layerpop_area_prov" style="background: rgba(0,0,0,0);">
          <!-- div title 사용하면 제목 추가가 됨 -->
          <a href="javascript:popupClose_prov();" class="layerpop_close_prov"
            id="layerbox_close_prov"></a>

          <!-- exit 아이콘 넣으면 팝업 종료 아이콘-->

          <br>
          <div class="content_prov">
            <textarea>'지음(知音)'은 (이하 '회사'는) 회원님의 개인정보를 안전하게 보호하기 위하여 최선의 노력을 다하고 있으며, "정보통신망 이용촉진 및 정보보호 등에 관한 법률”과 “개인정보 보호법” 등 개인정보와 관련된 법령 상의 규정들과 방송통신위원회 및 미래창조과학부, 안전행정부 등의 유관기관이 제정한 가이드라인을 준수하고 있습니다. 회사는 개인정보취급방침을 통하여 회원님께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다. 개인정보 취급방침은 정부의 법령이나 지침의 변경이나, 보다 나은 서비스의 제공을 위하여 그 내용이 변경될 수 있습니다. 이 경우 회사는 웹 사이트에서 공지사항에 이를 올리거나 이메일을 통해서 공지하고 있습니다. 회원님께서는 개인정보 취급방침이 홈페이지 첫 화면의 맨 아래에 표시되어 있으니, 수시로 확인해 주실 것을 부탁 드립니다. 

1. 수집하는 개인정보의 항목 및 수집방법 

가. 수집하는 개인정보의 항목 

첫째, 회사는 회원가입, 상담, 서비스 신청 등등을 위해 아래와 같은 최소한의 개인정보를 필수항목으로 수집합니다. 
 - 이메일주소, 성별, 나이 

둘째, 회원이 부가 서비스 및 맞춤식 서비스 등 이용하는 과정에서 해당 서비스의 이용자에 한해서만 추가 정보들이 수집될 수 있습니다. 
- 개인정보 추가 수집에 대해 동의를 받는 경우 

셋째, 서비스 이용과정이나 사업처리 과정에서 아래의 정보가 자동으로 생성되어 수집될 수 있습니다. 
- 서비스 이용 기록, 접속 로그, 결제 기록, 기기 고유번호(디바이스 아이디 또는 IMEI) 

단, 이 밖에 설문조사의 집단적인 통계분석을 위해서나 이벤트 경품발송을 위한 목적으로 이용자의 개인정보를 추가 수집하는 경우 반드시 사전에 이용자에게 해당 사실을 알리고 동의를 거치겠습니다. 더불어 이때 기입하신 정보는 해당 서비스의 제공이나 회원님께 사전에 밝히 목적 이외의 다른 어떠한 목적으로도 사용되지 않습니다. 

나. 개인정보 수집방법 
회사는 다음과 같은 방법으로 개인정보를 수집합니다. 
- 홈페이지 
- 스마트폰 어플리케이션 
- 제휴사로부터의 제공 
- 생성정보 수집 툴을 통한 수집 

2. 개인정보의 수집 및 이용목적 
회사가 개인정보를 수집하는 목적은 이용자의 신분과 서비스 이용 의사를 확인하여 최적화되고 맞춤화된 서비스를 제공하기 위함입니다. 회사는 최초 회원가입 시 서비스 제공을 원활하게 하기 위해 필요한 최소한의 정보만을 수집하고 있으며 회사44032; 제공하는 서비스 이용에 따른 요금 정산, 회원 관리, 마케팅 및 환불 등에 필요한 정보를 추가로 수집할 수 있습니다. 회사는 개인정보를 수집, 이용 목적 이외에 다른 용도로 이를 이용하거나 이용자의 동의 없이 제3자에게 이를 제공하지 않습니다. 

회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다. 

가. 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산 
통계학적 특성에 따른 설문조사 정보제공, 맞춤 서비스 제공, 본인인증, 포인트 지급
 
나. 회원 관리 회원제 서비스 이용에 따른 본인 확인, 개인 식별 및 차등화된 서비스 제공, 불량 회원의 부정 이용 방지와 비인가 사용 방지, 가입 의사 확인, 연령 확인 및 맞춤 서비스 제공 

다. 마케팅 및 광고에 활용 
신규 서비스 개발 및 맞춤 서비스 제공, 통계학적 특성에 따른 서비스 제공 및 광고 게재, 서비스의 유효성 확인, 이벤트 및 광고성 정보 제공 및 참여기회 제공, 접속빈도 파악, 회원의 서비스이용에 대한 통계 

3. 개인정보의 보유 및 이용 기간 

가. 원칙적으로 개인정보는 회사가 회원에게 서비스를 제공하는 기간 동안에 한하여 보유 및 이용됩니다. 따라서 회원 탈퇴 시 회사가 보유한 개인 정보가 삭제되는 것을 원칙으로 합니다. 단 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다./h4> 
- 회원의 이름, 이메일주소 및 전화번호 (회원 탈퇴 후 30일간 재가입 방지 목적): 30일 
- 회원의 부정 이용에 대한 조치이력 (회원의 악의적 이용의 재발 방지를 위한 목적): 6개월 

나. 관계 법령의 규정에 의해 보존할 필요성이 있는 경우 회사는 관계법령에서 정한 기간 이상 이용자의 개인정보를 보관할 수 있습니다. 이 경우 회사는 보관하는 정보를 그 보관의 목적으로만 이용하며, "보존 근거"에서 명시한 근거에 따라 "보존 기간" 동한 보존한 후 파기합니다. 
- 방문에 관한 기록 : 3개월(통신비밀보호법) 

4. 개인정보의 파기절차 및 방법 
회사는 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다. 파기절차 및 방법은 다음과 같습니다. 

가. 파기절차 
회원님이 회원가입 등을 위해 입력하신 정보는 목적이 달성된 후 별도의 DB로 옮겨져(종이의 경우 별도의 서류함) 내부 방침 및 기타 관련 법령에 의한 정보보호 사유에 따라(보유 및 이용기간 참조) 일정 기간 저장된 후 파기되어 집니다. 별도 DB로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 보유되는 이외의 다른 목적으로 이용되지 않습니다. 

나. 파기방법 
- 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다. 

5. 개인정보 제공 회사는 이용자의 개인정보를 개인정보취급방침의 “개인정보의 수집 및 이용 목적”에서 고지한 범위 또는 서비스 이용약관에 명시한 범위 내에서만 허용하며, 동 범위를 넘어 이용하거나 제3자에게 제공하지 않습니다. 단, 다음의 경우 주의를 기울여 개인정보를 이용하거나 제 3자에게 제공할 수 있습니다. 

가. 이용자들이 사전에 동의한 경우 정보 수집 및 제공을 위하여 이용자가 자발적으로 자신의 개인정보를 제 3자에게 제공하는 것에 동의한 경우를 뜻하며, 이러한 경우에도 회사는 이용자에게 (1) 개인정보를 제공받는 자, (2) 그의 이용목적, (3) 제공되는 개인정보의 항목, (4) 개인정보의 보유 및 이용기간을 사전에 고지하고 이에 대해 명시적·개별적으로 동의를 얻습니다. 이와 같은 모든 과정에 있어서 회사는 이용자의 의사에 반하여 추가적인 정보를 수집하거나, 동의의 범위를 벗어난 정보를 제3자와 공유하지 않습니다. 

나. 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우 

6. 이용자 및 법정대리인의 권리와 그 행사방법 
- 이용자 본인 및 법정대리인은 언제든지 등록되어 있는 자신의 개인정보를 조회하거나 수정할 수 있으며 가입해지를 요청할 수도 있습니다. 
- 본 서비스는 만 14세 미만인 아동의 회원가입이 불가합니다. 이용자의 개인정보 조회 및 수정을 위해서는 ‘개인정보변경’(또는 ‘회원정보수정’ 등)을, 가입 해지(동의철회)를 위해서는 “회원탈퇴”를 클릭하여 본인 확인 절차를 거치신 후 직접 열람, 정정 또는 탈퇴가 가능합니다. 혹은 개인정보관리책임자에게 서면, 전화 또는 이메일로 연락하시면 지체 없이 조치하겠습니다. - 귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다. 또한 잘못된 개인정보를 제3자에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체 없이 통지해 정정이 이루어지도록 하겠습니다. 
- 회사는 이용자 혹은 법정 대리인의 요청에 의해 해지 또는 삭제된 개인정보는 “회사가 수집하는 개인정보의 보유 및 이용기간”에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다. 

7. 개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항 
회사는 귀하의 정보를 수시로 저장하고 찾아내는 ‘쿠키(cookie)’ 등을 운용합니다. 쿠키란 웹사이트를 운영하는데 이용되는 서버가 귀하의 브라우저에 보내는 아주 작은 텍스트 파일로서 귀하의 컴퓨터 하드디스크에 저장됩니다. 회사는 다음과 같은 목적을 위해 쿠키를 사용합니다.

가. 쿠키 등 사용 목적 - 회원과 비회원의 접속 빈도나 방문 시간 등을 분석, 이용자의 취향과 관심분야를 파악 및 자취 추적, 각종 이벤트 참여 정도 및 방문 회수 파악 등을 통한 타겟 마케팅 및 개인 맞춤 서비스 제공 귀하는 쿠키 설치에 대한 선택권을 가지고 있습니다. 따라서 귀하는 웹 브라우저에서 옵션을 설정함으로써 모든 쿠키를 허용하거나 쿠키가 저장될 때마다 확인을 거치거나 아니면 모든 쿠키의 저장을 거부할 수도 있습니다. 

나. 쿠키 설정 거부 방법 

예: 쿠키 설정을 거부하는 방법은 회원님이 사용하시는 웹 브라우저의 옵션을 선택함으로써 모든 쿠키를 허용하거나 쿠키를 저장할 때마다 확인을 거치거나, 모든 쿠키의 저장을 거부할 수 있습니다. 

설정방법 예(인터넷 익스플로어의 경우) : 웹 브라우저 상단의 도구 >인터넷 옵션 >개인정보 

단 귀하께서 쿠키 설치를 거부하였을 경우 서비스 제공에 어려움이 있을 수 있습니다. 

8. 개인정보의 기술적/관리적 보호 대책 
회사는 이용자들의 개인정보를 취급함에 있어 개인정보가 분실, 도난, 누출, 변조 또는 훼손되지 않도록 안전성 확보를 위하여 다음과 같은 기술적/관리적 대책을 강구하고 있습니다. 

가. 비밀번호 암호화 
아이디(ID)의 비밀번호는 암호화되어 저장 및 관리되고 있어 본인만이 알고 있으며 개인정보의 확인 및 변경도 비밀번호를 알고 있는 본인에 의해서만 가능합니다. 

나. 해킹 등에 대비한 대책 
회사는 해킹이나 컴퓨터 바이러스 등에 의해 회원의 개인정보가 유출되거나 훼손되는 것을 막기 위해 최선을 다하고 있습니다. 개인정보의 훼손에 대비해서 자료를 수시로 백업하고 있고 최신 백신프로그램을 이용하여 이용자들의 개인정보나 자료가 누출되거나 손상되지 않도록 방지하고 있으며 암호화 통신 등을 통하여 네트워크상에서 개인정보를 안전하게 전송할 수 있도록 하고 있습니다. 그리고 침입차단 시스템을 이용하여 외부로부터의 무단 접속을 통제하고 있으며 기타 시스템적으로 보안성을 확보하기 위한 가능한 모든 기술적 장치를 갖추려 노력하고 있습니다. 

다. 취급 직원의 최소화 및 교육 
회사의 개인정보관련 취급 직원은 담당자에 한정시키고 있고 이를 위한 별도의 비밀번호를 부여하여 정기적으로 갱신하고 있으며 담당자에 대한 수시 교육을 통하여 개인정보취급방침의 준수를 항상 강조하고 있습니다. 

9. 개인정보에 관한 민원서비스 
회사는 회원의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보관리책임자를 지정하고 있습니다. 
[개인정보관리책임자] 
- 성명 : 나창현 
- 소속/직위 : 기획 / 대표 
- 전화번호 : 02-3445-8293 - 이메일 : nach3012@naver.com 

귀하께서는 회사의 서비스를 이용하시며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다. 회사는 이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다. 

기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 개인정보위탁업체 NICE 신용평가정보나 아래 기관에 문의하시기 바랍니다. 
- NICE 신용평가정보 (www.nicecredit.com/02-2122-4000) 
- 개인정보침해신고센터 (www.1336.or.kr/국번없이 118) 
- 정보보호마크인증위원회 (www.eprivacy.or.kr/02-580-0533~4) 
- 대검찰청 인터넷범죄수사센터 (icic.sppo.go.kr/02-3480-3600) 
- 경찰청 사이버테러대응센터 (www.ctrc.go.kr/02-392-0330) 

10. 정책변경에 따른 공지 

가. 본 개인정보취급방침은 홈페이지 첫 화면에 공개함으로써 회원님께서 언제나 용이하게 보실 수 있도록 조치하고 있습니다. 

나. 법령 정책 또는 보안기술의 변경에 따라 내용의 추가 삭제 및 수정이 있을 시에는 변경되는 개인정보취급방침을 시행하기 전에 홈페이지를 통해 변경이유 및 내용 등을 공지하도록 하겠습니다. 

다. 본 개인정보취급방침의 내용은 수시로 변경될 수 있으므로 사이트를 방문하실 때마다, 이를 확인하시기 바랍니다. 

- 공고일자: 2015년 12월 1일 
- 시행일자: 2015년 12월 1일
</textarea>
          </div>
        </article>

      </div>
      <!--Popup End -->
</body>
</html>
