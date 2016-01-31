<?php
	session_cache_limiter('no-cache, must-revalidate');
	session_start();
	$_SESSION['sponsor_question'] = $_POST['sponsor_question'];
	$_SESSION['phone_num'] = $_POST['phone_num'];
?>
<html>
	<head>
	 <meta charset="UTF-8">
	 <meta name = "viewport" content ="width=device-width, initial-scale = 1.0 user-scalable = no"/>
	 <link rel="stylesheet" type="text/css" href="css/style.css" />
	 <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
	 <script>
	 	$(document).ready(function(){
	 		var data = $('form').serializeArray();
	 		// console.log(data);
	 		// 데이터 직렬화 한거 확인 

	 		var data_list = '{';
	 		$.each(data,function(index,obj){
	 			data_list += ' "' + obj.name + '"' + ' : ' + '"' + obj.value;
	 			if(index == data.length - 1 )
	 				data_list += '"';
	 			else
	 				data_list += '",'; 
	 		})
	 		data_list += '}';
	 		console.log(data_list);
	 		// 직렬화한 데이터 사용해서 string 만들기
	 		var data_res = JSON.parse(data_list);
	 		console.log(data_res);
	 		// 만든 string을 JSON 형식으로 파싱

	 		/*$.ajax({
	 			type : "post",
	 			crossDomain : true,
	 			url : "http://54.68.202.182:3000/survey/2",
	 			dataType : 'json',
	 			data : data_res,

	 			success : function(data){
	 				console.log(data);
	 				alert('설문 완료!');
	 			},
	 			error : function(request,status,error){
    				console.log(error);
        		  	alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
        		}
	 		})*/

	 		$('#start_button').click(function(){
	 			location.href = "http://imuz.com/product/pro_wtablet.php?ptype=view&prdcode=1508090001&catcode=100000&page=1&catcode=100000&searchopt=&searchkey";
	 		});
	 	})
	 	
	 </script>
	</head>

	<body>
	 
	 <div id = "head_line" style = "padding:24px 0px 8px 0px">
  		평가가 완료 되었습니다!
 	</div>
 	<div id = "reward_comment">
 		고객님의 소중한 의견 감사합니다^^
 	</div>
 	<div id ="information">
 		당첨되신 분꼐는 MMS로<br>
 		경품을 보내드리겠습니다.
 	</div>
 	<br>
 	<img src = "image/reward.png" style = "width:100%; height:280px">
 	<br><br>
 	<input type = "button" value = "더 자세히 알아 보기" id = "start_button">
	 <form>
	 	<input type = "hidden" name = "sex" value = "<?php echo $_SESSION['sex']?>">			
	 	<input type = "hidden" name = "age" value = "<?php echo $_SESSION['age']?>">
	 	<input type = "hidden" name = "frequency" value = "<?php echo $_SESSION['frequency']?>">
	 	<input type = "hidden" name = "category" value = "<?php echo $_SESSION['category']?>">
	 	<input type = "hidden" name = "menu_name" value = "<?php echo $_SESSION['menu_name']?>">
	 	<input type = "hidden" name = "howto" value = "<?php echo $_SESSION['howto']?>">
	 	<input type = "hidden" name = "taste" value = "<?php echo $_SESSION['taste']?>">
	 	<input type = "hidden" name = "service" value = "<?php echo $_SESSION['service']?>">
	 	<input type = "hidden" name = "comment" value = "<?php echo $_SESSION['comment']?>">
	 	<input type = "hidden" name = "revisit" value = "<?php echo $_SESSION['revisit']?>">
	 	<input type = "hidden" name = "sponsor_question" value = "<?php echo $_SESSION['sponsor_question']?>">
	 	<input type = "hidden" name = "phone_num" value = "<?php echo $_SESSION['phone_num']?>">
	 </form>
	</body>
</html>