<?header("Access-Control-Allow-Origin: *");?>
<!doctype html>
<html>
 <head>
  <meta charset = "utf-8">
  <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script>
  var all = '{ "email_id" : "pjh9297","domain" : "naver.com","howto":"1","category":"한식","menu_name":"백반","point":"5","menu_comment":"존맛 개맛","clean_point":"4","kind_point":"3","service_comment":"개굳","revisit":"3"}';
    var allData = JSON.parse(all);
    console.log(allData);

    var jsonStr = '{ "hello" : ["world","wow"],  "places": ["Africa", "America", "Asia"] }';
	var jsonObj = JSON.parse(jsonStr);
	console.log(jsonObj);
   	$(function(){
    	$('button').click(function(){
    		$.ajax({
    			type:"post",
    			crossDomain:true,
    			url:"http://54.68.202.182:3000/survey/1",
    			dataType :'json',
    			data : allData,

    			success :function(data){

    				console.log(data);
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
 <button>테스트고고</button>
 </body>
</html>