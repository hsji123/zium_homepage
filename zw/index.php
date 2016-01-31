<!DOCTYPE HTML>

<html>
 <head>
 <meta charset = "utf-8">
  <style>
  	body{
  		text-align:center;
  	}
  	td{
  		width:100px;
  	}


  </style>

   <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
   <script>
    $(function(){
    	$('#login').click(function(){
    		$.ajax({
    			type:"get",
    			crossDomain:true,
    			url:"http://54.68.202.182:3000/store",
          ///profile/1?password="+$('#login_password').val()+"&id="+$('#login_id').val(),
    			dataType :'json',

    			success :function(data){

    				console.log(data);
            $.each(data,function(index,obj){
              
              document.getElementById('store_name').value = obj.store_name;
              document.getElementById('id_store').value = obj.id_store;
              document.getElementById('address').value = obj.address;
              document.getElementById('phone').value = obj.phone;
              document.getElementById('email').value = obj.email;

              document.login_form.submit();
            })
    			},
    			error : function(request,status,error){
    				console.log(error);
        		  alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
        		}
    		});
    	});
    });
   </script>
 </head>
 <body>
 <form name = "login_form" id = "login_form" action = "main.php" method = "post">
 	<div>
 	<h1>고객의 소리</h1>
 	<table align="center">
 	 <tr>
 	  <td>
 	   ID
 	  </td>

 	  <td>
 	  	<input type = "text" placeholder="내용을 입력해주세요" id = "login_id">
 	  </td>
 	 </tr>

 	 <tr>
 	  <td>
 	   비밀번호
 	  </td>

 	  <td>
 	   <input type = "password" placeholder="내용을 입력해주세요" id = "login_password">
 	  </td>
 	 </tr>

 	 <tr>
 	  <td>
 	  	<input type = "button" value = "고객의 소리 소개" disabled>
 	  </td>
 	  <td>
 	  	<input type = "button" value = "로그인" id = "login">
 	  </td>
 	 </tr>

 	 <tr>
 	  <td>
 	  	<input type = "button" value = "회원가입" disabled>
 	  </td>
 	  <td>
 	  	<input type = "button" value = "비밀번호 찾기" disabled>
 	  </td>
 	 </tr>

 	</table>

  <input type = "hidden" id = "store_name" name = "store_name" value ="">
  <input type = "hidden" id = "id_store" name = "id_store" value = "">
  <input type = "hidden" id = "address" name = "address" value = "">
  <input type = "hidden" id = "phone" name = "phone" value = "">
  <input type = "hidden" id = "email" name = "email" value = "">
 </form>
 
 </body>
</html>