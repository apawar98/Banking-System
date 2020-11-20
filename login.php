<html>
	<head>
	<title>Banking System</title>
<style>
.container{
	width: 350px;
	padding: 5% 5% 5%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position: relative;
	top: 72px;
	vertical-align: middle;
}

form{
	align-content: center;
	padding: 5px;
	margin-top: 15px;
}
input
{
	margin : 5px;
}

a{
	color: #f00f53;
	text-decoration: none;
	align-content: right;
}

.button{
	width :150px;
	margin :10px;
	padding:5px;
	font-weight: bold;
	background-color: #04ae3a;
	text-align: center;
	position: relative;
	right:-100px;
	color: white;
}

.button:hover {
  background: #90EE90;
}


body{
	background-color: PaleGreen;
}
    body
    {
    background-color : PaleGreen ;
    </style>
	</head>
	<body>

	<div class="container">
		<h1>Login as Customer</h1>
		<a href="index.php" >Click Here to Go Back.</a><br/>
		<form action="checklogin.php" method="POST">
			<h4>Enter Username : <input type="text" name="username" required="required"/><br/></h4>
			<h4>Enter Password : <input type="password" name="password" required="required"/><br/></h4>
			<input type="submit" value="Login" class="button"/>
			</form>	
	</div>
	</body>
	
</html>
