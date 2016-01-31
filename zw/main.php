<?session_start();?>
<!doctype html>

 	<?
 		$_SESSION['store_name'] = $_POST['store_name'];
 		$_SESSION['id_store'] = $_POST['id_store'];
 		$_SESSION['address'] = $_POST['address'];
 		$_SESSION['phone'] = $_POST['phone'];
 		$_SESSION['email'] = $_POST['email'];
 	?>
<html>
 <head>
  <meta charset = "utf-8">
   <link rel="stylesheet" type="text/css" href="css/style.css" />
 
  <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
  <script>
  	$(document).ready(function(){
  		$('#Left').css("height",$(window).height());
  		$('#Right').css("height",$(window).height());
  		$('#Right').css("width",$(window).width() - ( $('#Left').width() * 1.08));
  	})
  </script>
 </head>
 <body>
 	<iframe id = "Left" src = "_side_left.php" frameborder = "no"></iframe>
 	<iframe id = "Right" src = "my_inform.php" frameborder = "no"></iframe>
 </body>

</html>