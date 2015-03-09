<html>
<head>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/myorder.js"></script>
	<script type="text/javascript" src="../js/websocketinmyorder.js"></script>
	
	<script src="../js-webshim/minified/polyfiller.js"></script>
    <link rel="stylesheet" href="../css/myorder.css">
    <link rel="stylesheet" href="../css/css1/bootstrap.min.css">    
<title>My Orders</title>

<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script>

</head>

<body>
<?php session_start();?>
<div id="transparent">
    <div id="Header">
    	<img width="50px" height="50px" src="<?php echo $_SESSION['picture']; ?>">
    	<p><?php echo $_SESSION['username']; ?></p>		
  		<a href="orders.php">Home</a>		
		<a href="out.php">Log out</a>
	    <img src="../img/finallogosmall.png">
	</div>
<div id="content" class="wrapper">
<center><h1>Orders</h1>	
	 
  		<label>Date From :</label>
  		<input type="date" id="from" name="from"> 		
  		<label>Date to :</label>
  		<input type="date" id="to" name="to">
		<div id="mydiv">
			
		</div>
</div>
</center>
<input type="hidden" id="UserId" value="<?php echo $_SESSION['UserId']?>">
<input type="hidden" id="UserType" value="<?php echo $_SESSION['Type']?>">
<input type="hidden" id="user" value="<?php echo $_SESSION['username'];?>">
<input type="hidden" id="picture" value="<?php echo $_SESSION['picture'];?>">
</div>
</body>
</html>
