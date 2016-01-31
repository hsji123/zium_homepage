<?php
	session_start();
	if(isset($_POST['revisit'])) $_SESSION['revisit'] = $_POST['revisit'];
?>
<html>
	<head>
	 <meta charset="UTF-8">
	 <meta name = "viewport" content ="width=device-width, initial-scale = 1.0 user-scalable = no"/>
	 <link rel="stylesheet" type="text/css" href="css/style.css" />
	 <script>
	 	
	 	console.log("email : " + "<?=$_SESSION['email_id']?>"); // session 값 확인
    	console.log("domain : " + "<?=$_SESSION['domain']?>");
    	console.log("howto : " + <?=$_SESSION['howto']?>);
    	console.log("category : " + "<?=$_SESSION['category']?>");
		console.log("menu_name : " + "<?=$_SESSION['menu_name']?>"); // string
		console.log("score : " + <?=$_SESSION['point']?>);
		console.log("menu_comment : " + "<?=$_SESSION['menu_comment']?>"); // string
		console.log("kind_point : " + <?=$_SESSION['kind_point']?>);
    	console.log("clean_point : " + <?=$_SESSION['clean_point']?>);
    	console.log("service_comment : " + "<?=$_SESSION['service_comment']?>"); // string
	 	console.log("revisit : " + <?=$_SESSION['revisit']?>);
	 	*/
	 </script>

	 <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
	 <script>
	 	$(document).ready(function(){
	 		var data = $('form').serializeArray();
	 		// console.log(data);
	 		// 데이터 직렬화 한거 확인 

	 		var data_list = '{';
	 		$.each(data,function(index,obj){
	 			data_list += ' "' + obj.name + '"' + ' : ' + '"' + obj.value;
	 			if(index == 10)
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
	 	})
	 	
	 </script>
	</head>

	<body>
	 <hr id = "reward">
	 <h1 id = "reward_comment">설문이 완료되었습니다!</h1>
	 <div style = "font-size : 14pt"><br>입력하신 메일로 쿠폰이 발송되었습니다!<br>
	 	<div style = "font-size : 10pt">(인원이 몰릴 경우 메일 발송이 지연될수 있습니다)<br><br></div>
	 </div>
	 <br><br>
	 <div>
	  <img id = "reward_img" src = "image/store_img/2_reward.jpg">
	 </div><br>
	 <div style = "font-weight:bold">방문해주셔서 감사합니다! 또오세요 ^^</div>

	 <form>
	 	<input type = "hidden" name = "email_id" value = "<?php echo $_SESSION['email_id']?>">
	 	<input type = "hidden" name = "domain" value = "<?php echo $_SESSION['domain']?>">
	 	<input type = "hidden" name = "howto" value = "<?php echo $_SESSION['howto']?>">
	 	<input type = "hidden" name = "category" value = "<?php echo $_SESSION['category']?>">
	 	<input type = "hidden" name = "menu_name" value = "<?php echo $_SESSION['menu_name']?>">
	 	<input type = "hidden" name = "point" value = "<?php echo $_SESSION['point']?>">
	 	<input type = "hidden" name = "menu_comment" value = "<?php echo $_SESSION['menu_comment']?>">
	 	<input type = "hidden" name = "kind_point" value = "<?php echo $_SESSION['kind_point']?>">
	 	<input type = "hidden" name = "clean_point" value = "<?php echo $_SESSION['clean_point']?>">
	 	<input type = "hidden" name = "service_comment" value = "<?php echo $_SESSION['service_comment']?>">
	 	<input type = "hidden" name = "revisit" value = "<?php echo $_SESSION['revisit']?>">
	 </form>
	</body>
</html>
<?php
	$toName = "";
    $toMail = $_SESSION['email_id'] . "@" . $_SESSION['domain'];
    $mail_content = "";
    if($_SESSION['tab_value'] == "shopping"){
    	$mail_content .= "<img src = http://110.10.129.65/Test/image/coupon_img/shopping_1.png>";
    	$mail_content .= "<img src = http://110.10.129.65/Test/image/coupon_img/shopping_2.png>";
   		$mail_content .= "<a href = http://www.danilove.co.kr><img src = http://110.10.129.65/Test/image/coupon_img/shopping_3.png></a>";
    }
    else if($_SESSION['tab_value'] == "coffee"){
    	$mail_content .= "<img src = http://110.10.129.65/Test/image/coupon_img/coffee_1.png>";
    	$mail_content .= "<img src = http://110.10.129.65/Test/image/coupon_img/coffee_2.png>";
   		$mail_content .= "<img src = http://110.10.129.65/Test/image/coupon_img/coffee_3.png>";
    }
    else if($_SESSION['tab_value'] == "sing"){
    	$mail_content .= "<img src = http://110.10.129.65/Test/image/coupon_img/sing_1.png>";
    	$mail_content .= "<img src = http://110.10.129.65/Test/image/coupon_img/sing_2.png>";
   		$mail_content .= "<img src = http://110.10.129.65/Test/image/coupon_img/sing_3.png>";
    }
    $subject = "바른치킨 건대점에서 선택하신 쿠폰을 보내드립니다!";
    $fromName = "바른치킨 건대점";
    $fromMail = "zium_voc@naver.com";

    $headers = "Return-Path: <".$fromMail.">\n";
    $headers .= "From: ".$fromName." <".$fromMail.">\n";
    $headers .= "X-Sender: <".$fromMail.">\n";
    $headers .= "X-Mailer: PHP\n";
    $headers .= "Reply-To: ".$fromName." <".$fromMail.">\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-Type: text/html;charset=utf-8\n";


    $rs = mail($toMail,$subject,$mail_content,$headers);

?>
