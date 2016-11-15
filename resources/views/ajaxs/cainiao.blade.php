<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"> 
<title>菜鸟教程(runoob.com)</title> 
<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js">
</script>
<script>
// $(document).ready(function(){
// //   $("p").click(function(){
// //     alert('1111');
// //   });

//   $("p").live("click", function(){
// 	  alert('1111');
// 	  });
// });
// $(document).ajaxStop(function(){
// 	var value = $('#pp').text();
// 	alert(value);
//   });

function get()
{

	$.ajax({
		url:'getA',
		type:'get',
		async: false,
		dataType:'text',
		success:function(result){
			$('div').append(result);
// 			$('#zong').html(result);
			
			}
		});
	var value = $('#pp').text();
	alert(value);
// 	$('div').ajaxStop(function(){

// 		var value = $('#pp').text();
// 		alert(value);
// 		 });
	
}

function jinggao()
{
	alert('警告');
}

function test()
{
	
}
</script>
</head>
<body>
<div id='zong'>
<body onload="get()">
<p onclick="jinggao()">如果你点我，我就会消失。</p>
<p id='tt'>点我消失!</p>
<p>点我也消失!</p>
</body>
</div>
</body>
</html>
