<?php	$id=$_GET['id'];	$status=$_GET['status'];	$id = json_decode ($id);	$status = json_decode ($status);    $mysql_server_name="192.168.0.111:3306"; //数据库服务器名称    $mysql_username="root"; // 连接数据库用户名    $mysql_password="root"; // 连接数据库密码    $mysql_database="smart"; // 数据库的名字    // 连接到数据库   $conn = @mysql_connect($mysql_server_name,$mysql_username,$mysql_password);	if (!$conn){		die("连接数据库失败：" . mysql_error());	}	mysql_select_db($mysql_database, $conn);	mysql_query("set names 'gbk'");      // 从表中提取信息的sql语句    $strsql='update `home` set status='.$status.' where id='.$id;    // 执行sql查询	if(mysql_query( $strsql,$conn)){		$obj->status=$status; 	} else {		$obj->status='error :'. mysql_error(); 	}	echo json_encode($obj);       // 释放资源    //mysql_free_result($result);    // 关闭连接    mysql_close($conn);  		
?>
