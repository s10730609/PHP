<!-- <?php include "manage user.php"?> -->
<!DOCTYPE html>
<html>
<title>倉庫儲位管理</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><style>
body {font-family: "Roboto", sans-serif}
.w3-bar-block .w3-bar-item{padding:16px;font-weight:bold}
</style>
<body>

<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="#"><img src="sungarden.jpg" style="width:80%;"></a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
<!--   <a class="w3-bar-item w3-button " href=""><?php echo $u;?></a> -->
  <a class="w3-bar-item w3-button" href="manage home.php">建立品項</a>
  <a class="w3-bar-item w3-button" href="manage creat.php">進貨</a>
  <a class="w3-bar-item w3-button" href="manage out.php">出貨</a>
 
  <div>
    <a class="w3-bar-item w3-button" onclick="myAccordion('demo')" href="javascript:void(0)">異動紀錄 <i class="fa fa-caret-down"></i></a>
    <div id="demo" class="w3-hide">
      <a class="w3-bar-item w3-button w3-teal" href="manage record.php">總異動紀錄</a>
      <a class="w3-bar-item w3-button w3-teal" href="manage showinf.php">進貨紀錄</a>
	  <a class="w3-bar-item w3-button w3-teal" href="manage showoutf.php">出貨紀錄</a>
    
    </div>
  </div>
   <a class="w3-bar-item w3-button" href="manage showf.php">庫存查詢</a>
   <a class="w3-bar-item w3-button" href="ececl2.php">下載EXCEL檔</a>
   <hr>
	
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-container w3-top w3-theme w3-large">
  <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide"></span></p>
</div>

<header class="w3-container w3-theme" style="padding:64px 32px">
  
</header>

<div class="w3-container" style="padding:32px">

<h2></h2>



<hr>
<h2>建立品項</h2>




<div class="w3-panel w3-light-grey w3-padding-16 w3-card">
<h3 class="w3-center"></h3>

<form action="manage%20bulid.php" method="POST">
  
	<p>
	<label>使用者：</label><input type="text" name="CREATOR" value="<?php echo $R[0]['user'];?>"></p>
	<p>
	<label>日期：</label><input type="text" name="CREATE_DATE" value="<?php echo $time;?>"></p>
	<p>
	<label>品號：</label><input type="text" name="MB001" value="" ></p>
	<p>
	<label>品名：</label><input type="text" name="MB002" value="" ></p>
	<p>
	<label>規格：</label><input type="text" name="MB003" value="" ></p>
	<p>
	<label>庫存單位:</label><input type="text" name="MB004" value="" ></p>
	<p>
	<label>標準途程品號：</label><input type="text" name="MB010" value="" ></p>
	<p>
	<label>主要庫別：</label><input type="text" name="MB017" value="" ></p> 
	<p>	
	<label>目前庫存數量：</label><input type="text" name="MB064" value="" ></p>

  <!---<input type="text" name="year" value="Enter YEAR"><br><br>---> 
  <br>
  <input type="submit" value="建立">
  <input type="reset">
</form>

</div>
</div>
</div>



<footer class="w3-container w3-theme" style="padding:32px">
  <p></p>
</footer>
     
</div>

<script>
// Open and close the sidebar on medium and small screens
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Change style of top container on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("myTop").classList.add("w3-card-4", "w3-animate-opacity");
        document.getElementById("myIntro").classList.add("w3-show-inline-block");
    } else {
        document.getElementById("myIntro").classList.remove("w3-show-inline-block");
        document.getElementById("myTop").classList.remove("w3-card-4", "w3-animate-opacity");
    }
}

// Accordions
function myAccordion(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme", "");
    }
}
</script>
     
</body>
</html> 

