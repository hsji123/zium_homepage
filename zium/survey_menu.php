<?php
  session_start();
	if(isset($_POST['howto'])) $_SESSION['howto'] = $_POST['howto'];
?>

<!doctype html>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<meta name="viewport"
	content="width=device-width, initial-scale = 1.0, user-scalable = no" />
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<!--드래그 할수 있는 기능을 사용하기 위해서 draggable();-->

<script>
console.log("howto : " + <?php echo $_SESSION['howto']?>);
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

    $('#mask').css({
        'width' : maskWidth,
        'height' : maskHeight
      });
    

    $('#mask').fadeTo("slow", 0.8);
      
  }

  function popupOpen_email() {
    $('.layerpop_email').css("position", "absolute");
    //영역 가운에데 레이어를 뛰우기 위해 위치 계산 
    $('.layerpop_email').css("top","25%");
    $('.layerpop_email').css("height","55%");
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
  </script>
<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script>
  var conflict = $.noConflict(); // 제이쿼리 충돌 방지
  conflict(document).ready(function(){

     //category 가져오는 api
    conflict.ajax({ // load 되었을때 category값 가져오기
      type : "get",
      crossDomain : true,
      url : "http://54.68.202.182:3000/store/<?php echo $_SESSION['id_store']?>/category_list",
      dataType : 'json',

      success : function(data){
        console.log(data);
        var category_table = '';
        conflict.each(data,function(index,obj){
          var idx = index % 3;
          if(idx == 0)
           category_table += '<tr>'; 
          category_table += '<td><div id = menu_div_full>'; 
          category_table += '<div id = menu_div_top></div>'; 
          category_table += '<input type = radio name = category class = category value = "'; 
          category_table += obj.category + '">'; 
          category_table += '<div id = menu-name>' + obj.category + '</div>'; 
          category_table += '</div></td>'; 
          if( idx == 2)
           category_table += '</tr>'; 
        })
        conflict('#menu_category').append(category_table);


        conflict("#menu_category td").click(function(){
          conflict("#menu_category td").removeClass();
          conflict(this).addClass("test");
          conflict("#menu_category td").each(function(index,obj){
            if(conflict(obj).attr('class') == "test"){
              conflict(this).css("color","#dd551a"); // 글씨색 변화
              conflict('#menu_div_full #menu_div_top',this).css('background-color','#dd551a'); // 위에 줄 색 변화
              document.getElementsByName("category")[index].checked = "true";

              //change_radio(index);
            }
            else{
              conflict(this).css("color","black"); // 글씨색 변화
              conflict('#menu_div_full #menu_div_top',this).css('background-color','#b4b4b5'); // 위에 줄 색 변화
            }
          })

      /* category 클릭하면 그에 맞는 menu_list 가져오는 api
      */
      conflict.ajax({
        type : "get",
        crossDomain : true,
        url : "http://54.68.202.182:3000/store/<?php echo $_SESSION['id_store']?>/menu_list/?category=" + conflict('input:radio[name="category"]',this).val(),
        dataType : 'json',

        success : function(data){
          console.log(data);
          conflict('#menu_select').empty();
          var menu_list = '<table id=menu_scroll align=center name=sel_menu>';
          conflict.each(data,function(index,obj){
            menu_list += '<tr><td><a id=menu_name>' + obj.menu_name + '</a>';
            menu_list += '<input type=checkbox name=menu_name value="' + obj.menu_name + '">';
            menu_list += '<a id=menu_price>' + obj.price + '</a></td></tr>';
          })
          menu_list += '</table>';
          conflict('#menu_select').append(menu_list);
          conflict('input:checkbox[name="menu_name"]').addClass("category");
    
          conflict("#menu_scroll tr td").click(function(){
            conflict('input:checkbox[name="menu_name"]',this).attr("checked",true); // 메뉴 clcik 하면 클릭한 라인의 값에 체크가 됨
            conflict('#sub-title').empty();
            conflict('#sub-title').append($('input:checkbox[name="menu_name"]',this).val()); // sub-title의 내용이 바뀜
            goDetail_email();
          })
        },

        error : function(request,status,error){
          console.log(error);
          alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
        }
      })
    })

      },
      error : function(request,status,error){
          console.log(error);
          alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
      }
    })
  })
  </script>

<style>
td {
	width: 100px;
	height: 50px;
}
</style>
</head>

<body>
	<div id="top_progress">드신 메뉴를 평가해주세요 ( 2 / 4 )</div>
	<div id="top_progress_ex">※ 중복 선택 가능</div>
	<br>
	<br>

	<form id="menu" action="survey_service.php" method="post">
		<table id="menu_category" align="center">
			
		</table>
		<br>
		<div id="menu_select" >
		</div>
		
		<div id="another_menu"></div>

		<!-- 팝업뜰때 배경 -->
		<div id="mask_email"></div>

		<!--Popup Start -->
		<div id="layerbox_email" class="layerpop_email">
			<article class="layerpop_area_email">
				<a href="javascript:popupClose_email();"
					class="layerpop_close_email" id="layerbox_close_email"></a>
				<!-- exit 아이콘 넣으면 팝업 종료 아이콘-->

				<br>
				<!-- div title 사용하면 제목 추가가 됨 -->

				<div class="content">
					<form id="menu" action="survey_howto.php" method="post">

						<div id="sub-title"></div>
						<div style="float: left;">을 평가해 주세요</div>
						<br>
						<ul style="list-style: none; margin: 0px; padding: 0px;">
							<li id="sub-title-con">: <a>별점</a>을 드래그 해주세요</li>
							<li><div id="menu_raty" onclick="check_value();"></div></li>
							<li id="sub-title-con" style = "margin-bottom : 0px">: <a>한 줄 평가</a>를 적어주세요</li>
						</ul>
					</form>
				</div>
				<table id="menu_table">
					<tr>
						<td colspan="2"><textarea name="menu-disc" id="menu-disc"
								onkeyup="check_value();" placeholder=" 5자 이상 적어주세요 ㅠ.ㅠ"></textarea></td>
					</tr>
					<tr>
						<td><input type="button" id = "" value="목록으로"></td>
						<td><input type="button" id="complete_survey" value="다음으로"
							disabled onclick="check_length();"></td>
					</tr>
				</table>
			</article>
		</div>

		<!--Popup End -->
	</form>
	<script src="raty-master/demo/javascripts/jquery.js"></script>
	<script src="raty-master/lib/jquery.raty.js"></script>
	<script src="raty-master/demo/javascripts/labs.js"
		type="text/javascript"></script>
	<script>
    var rate = $.noConflict();
    rate.fn.raty.defaults.path = 'raty-master/lib/images';
    var wid = ( (rate('.content').width() - 4) * $(document).width()) / 100;
    rate('#menu_raty').raty({
      half : true,
      width : wid,
      scoreName : 'point'
    })

    function check_value(){
    	if(document.getElementById('menu-disc').value && rate('input[name=point]').val())
    		document.getElementById('complete_survey').disabled = false;  
	}

	function check_length(){
		var strlen = document.getElementById('menu-disc').value.length;
    	if(strlen < 5)
    		alert("평가를 5자 이상 적어주세요!");
    	else if(strlen > 140)
    		alert("평가를 140자 이하로 적어주세요!");
    	else
    		document.getElementById('menu').submit();
	}
  </script>
</body>
</html>