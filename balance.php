<html>
	<head>
	<title>Customer Money in Bank</title>
	<style>
	 .container{
	width: 520px;
	padding: 3% 3% 3%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position: relative;
	top: 160px;
	vertical-align: middle;
}


h2{
	color:#8B008B;
	font-family: helvetica;
}

a{
	color: #f00f53;
	text-decoration: none;
	align-content: right;
}

button{
	width: 380px;
	margin : 10px;
	padding: 5px;
	font-weight: bold;
	background-color: #ff474a;
	text-align: center;
	color: white;
}


button:hover {
  background: #a30003;
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
		<h1 >Balance Available in Account</h1>
		<h2><?php Print "$user" ?></h2>
		<a href="home.php" >Click Here to Go Back.</a><br/>
		<br/></br>
		<?php 
			mysql_connect("localhost","root","") or die(mysql_error());
			mysql_select_db("BANKING") or die("Cannot connect to database");
			$balance=0.00;
			$query=mysql_query("SELECT * from transfers WHERE user='$user'");
			while($row=mysql_fetch_array($query))
			{
				$balance= $balance + $row['amount'];
			}
			Print "Your Balance is :   " . $balance;

		 ?>



	</div>
	</body>
	
</html>
