<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Learn Laravel 5</title>

    <link href="//cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js">/script>
    <script src="//cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
		function get()
		{
// 			alert('1111');
			$.ajax({
				url:'getA',
				type:'get',
				dataType:'text',
				success:function(result){
					$('p').append(result);
					}
				});
		}
		$(document).ready(function(){
		$('#b1').click(function(){

			alert('1111');
			});
		});
		function testclick()
		{
			alert('1111');
		}
		
    </script>
</head>

<body onload='get()'>
<p>
<!--  <button class="b" id="b1" onclick="testclick()">一号按钮</button>-->
<div class="b">点1</div>
@yield('content')
</p>
</body>