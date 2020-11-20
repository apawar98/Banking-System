<html>
	<head>
	<title>Banking System</title>
	<style>
	 .container{
	width: 420px;
	padding: 3% 3% 3%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position: relative;
	top: 75px;
	vertical-align: middle;
}

h2{
	color:#4B0082;
	font-family: helvetica;
}

a{
	color:#f00f53;
	text-decoration: none;
	align-content: right;
}

button{
	width: 380px;
	margin : 5px;
	padding: 20px;
	font-weight: bold;
	background-color: #DB7093;
	text-align: center;
	color: white;
}


button:hover {
  background: #FF69B4;
}

body{
	background-color: Pink;
}
    body
    {
    background-color : Pink;
    </style>
	</head>
	<?php
		session_start();
		if($_SESSION['user'])
		{}
		else
		{
			header("location:index.php");
		}
		$user=$_SESSION['user'];
		?>
	<body>

	<div class="container">
		<h1>Home Page</h1>
		<h2> Welcome to Bank<br><?php Print "$user" ?></h2>
		<a href="logout.php" >Click Here to Logout as Customer</a><br/>
		
		<h2><button type = "button" onclick="location.href='transfer.php'" >Transfer Money</button></h2>


		<h2><button type = "button" onclick="location.href='balance.php'" >Check Balance</button></h2>

	</div>
	</body>
	
</html>
