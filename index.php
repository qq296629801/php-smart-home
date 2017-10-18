<!DOCTYPE HTML><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>night owl</title>
<style>
body{
    background: url(http://wandoufilm.com/contact/bg.gif);
    background-repeat: no-repeat;
	    background-color: #cecece;
		    margin: 0px;
			background-size: 100% 100%;
}
#top{
	height: 150px; 
}


#top p{
text-align:center;
color:white;
    font-size: 26px;
        text-shadow: 1px 1px 1px #1b1b1b;
		
}
p{
	text-align:center;
	text-shadow: 1px 1px 1px #333;
	color: white;
}#top input{    text-align: center;    color: white;    font-size: 26px;    text-shadow: 1px 1px 1px #1b1b1b;    border: 0px;    background: #ecebec;    width: 348px;	}

#btn{
	background: #ececec;
    width: 80px;
    height: 40px;
    box-shadow: 1px 1px 1px 1px #6d6c6c;
    border: 0px;
    border-radius: 5px;
    font-size: 16px;
    color: #948c8c;
}
#btn2{
	background: #ececec;
    width: 80px;
    height: 40px;
    box-shadow: 1px 1px 1px 1px #6d6c6c;
    border: 0px;
    border-radius: 5px;
    font-size: 16px;
    color: #948c8c;
}
</style>
<script src="./jquery-3.0.0.js"></script>
</head>

<body>
<script>
var flag;
var test;
 $(function(){	 $.get("http://192.168.0.111/db.php",function(result){
			flag=result;
			if(flag==1){
				$("#btn").text("开");
			}else{
				$("#btn").text("关");
			}		
	});
	
	$("#btn").click(function(){
		if(flag==0){					flag=1;			
			$.get("test.php",{status:flag,id:1},function(date){		
							$("#console").text(date);			});
		}else{			flag=0;								$.get("test.php",{status:flag,id:1},function(date){
							$("#console").text(date);			});
		}
		if($("#btn").text()=="开"){
			$("#btn").text("关");
		}else{
			$("#btn").text("开");
		}
	});
});	
</script>
<div id="top"> 
	<p id="stext">控制界面</p>	<p id="console">调试信息...</p>
</div>
<p>led&nbsp;<button id="btn"></button></p>
</body>
</html>
