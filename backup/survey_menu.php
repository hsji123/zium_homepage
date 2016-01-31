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
              conflict(this).css("color","#FD7E13"); // 글씨색 변화
              conflict('#menu_div_full #menu_div_top',this).css('background-color','#FD7E13'); // 위에 줄 색 변화
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
            conflict("#menu_scroll tr td").css('background-color','black')
            conflict(this).css('background-color','#FD7E13');
            conflict('input:checkbox[name="menu_name"]',this).attr("checked",true); // 메뉴 clcik 하면 클릭한 라인의 값에 체크가 됨
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
	<div id="head_line">드신 메뉴를<br>평가해주세요</div>
	<div id="top_progress_ex">※ 중복 선택 가능</div>
	<br>
	<br>

	<form id="menu" action="survey_howto.php" method="post">
		<table id="menu_category" align="center">
			
		</table>
		<br>
		<div id="menu_select" >
		</div>
    <input type = "submit" value = "다음페이지" id = "star_button">
	</form>
</body>
</html>