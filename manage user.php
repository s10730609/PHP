<?php
    header("Content-Type:text/html; charset=utf-8");
    //建立資料庫的連結
    $servername = "localhost";
	$username = "root";
	$password =""; 
	$dbname="manage sys";
	$time= date("Y-m-d ",time());
	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);
	mysqli_set_charset($conn,"utf8");

	// Check connection
	if ($conn->connect_error) {
	   die("Connection failed: " . $conn->connect_error);
	}
	//----------------------------------------------------------------
	//(1) 查詢
	
	$sql ="SELECT * FROM `member` ORDER by `time` DESC limit 0,1";
	
	$S = $conn->query($sql);  //$S:查詢到的結果 
	
	// (2) 將查詢到的結果置於 $R, $R[$i]: 第$i筆資料 \" \"
	
	$count=0;  $R="";
	if ($S->num_rows > 0){   //$S->num_rows: 查詢到幾筆資料
		while($row = $S->fetch_assoc()){ // $S->fetch_assoc() 
			$R[$count]= $row; $count++;
			//print_r($row); echo "<br>";  //
		}
	}
	
	$u="";  
	for($r=0;$r<count($R);$r++)  //$R.length
	{
	   $u= $u.sprintf("
	   登入使用者：%s
	   ",$R[$r]['user']);	
	}
	
?>	