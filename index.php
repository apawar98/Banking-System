<html>
	<head>
<script language='JavaScript' type='text/JavaScript'>
 
</script>


	<title>Banking System</title>
	<style>
    .container{
	width: 360px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position: relative;
	top: 130px;
	vertical-align: middle;
}

p{
	font-family: sans-serif;
	font-weight: bold;
	font-size: 30px;
}

button{
	width : 230px;
	margin : 10px;
	padding: 12px;
	font-weight: bold;
	background-color: #428BCA;
	text-align: center;
	color: white;
	font-family: verdana;
	text-decoration: none;
}
button:hover {
  background: #B0E0E6;
}

body
    {
    background-color : PaleTurquoise;
}

    </style>
	</head>
	<body>
	<div class="container">
		<?php
			Print "<p><B> WELCOME TO BANK</B></p>";
		?>
		<button type="button" onclick="location.href='login.php'">Customer Login to Transfer Money</button><br/>
		
		<button type = "button" onclick="location.href='fetch.php'" >View All Customer</button><br/>
	</div>
	</body>

</html>

