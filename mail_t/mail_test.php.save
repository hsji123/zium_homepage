<?php
 $toName = "박정훈"; //받는이 이름
 $toMail = "jhp9297@naver.com"; //받는이 메일
 $mail_content = "테스트입니다";   //메일 내용
 $mail_content .= "<img src = http:";
 $mail_content .= "/" . "/" . "54.68.202.182/zium/image/store_img/test2.jpg>";
 $subject = "테스트";  //메일 제목
 $fromName = "박정훈";  //보내는이 이름
 $fromMail = "jhp9297@naver.com";  //보내는이 메일

 $headers = "Return-Path: <".$fromMail.">\n";
 $headers .= "From: ".$fromName." <".$fromMail.">\n";
 $headers .= "X-Sender: <".$fromMail.">\n";
 $headers .= "X-Mailer: PHP\n";
 $headers .= "Reply-To: ".$fromName." <".$fromMail.">\n";
 $headers .= "MIME-Version: 1.0\n";
 $headers .= "Content-Type: text/html;charset=utf-8\n";
/*
$headers .= "To: ".  $tomail_name  ." <".  $mail_addr  .">\r\n";
$headers .= "Reply-To: ".$se_name." <".$se_email.">\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-MSMail-Priority: High\r\n";
$headers .= "X-Mailer: Just My Server";
*/

 $rs = mail($toMail,$subject,$mail_content,$headers);
	if($rs)
		echo "<script>alert(1)</script>";
	else
		echo "test";
?>
