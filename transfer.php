<html>
	<head>
	<title>Customer Money in Bank</title>
<style>
.container{
	width: 520px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position:relative;
	top: 85px;
	vertical-align: middle;
}

form{
	
	align-content: right;
}
input{
	align-content: right;
	margin:5px;
}

<!-- h3{
	color: #1f00a8;
	font-family: helvetica;
} -->

h2{
	color: #8B008B;
	font-family: helvetica;
}

a{
	color:#f00f53;
	text-decoration: none;
	align-content: right;
}

.button{
	margin : 10px;
	padding: 5px;
	font-weight: bold;
	background-color: #DAA520;
	text-align: center;
	color: white;
}



.button:hover {
  background: #FFDEAD;
}


body{
	background-color: Khaki;
}
    body
    {
    background-color : Khaki;
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
		<h1>Transfer Money</h1>
		<h2><?php Print "$user" ?></h2>
		<a href="home.php" >Click Here to Go Back.</a><br/>
		<br/><br/>
		<form action="minus.php" method="POST">
			How much would you like to transfer : <input type="number" name="amount" required="required" /><br/>
			Receiver's name : <input type="text" name="money_taker"/><br/>
			<input type="submit" class="button" value="Transfer Money"/>
		</form>
		<br/>


	</div>
	</body>
	
</html>
