<html>
<head>
	<title>Customer List</title>
	<style>
	 .container{
	width: 520px;
	padding: 3% 3% 3%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position: relative;
	top: 60px;
	vertical-align: middle;
}


h1{
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
		//make connection
		mysql_connect('localhost', 'root', '');

		//select db
		mysql_select_db('banking');

		$sql = "SELECT * FROM customers";

		$records = mysql_query($sql);
	?>
	<body>

	<div class="container">		
		<h1>View All Customer</h1>
		<a href="index.php" >Click Here to Go Back.</a><br/>
		<table width = "550" border = "1" cellpadding = "1" cellspacing = "1">
		<tr>	
			<th>Id</th>
			<th>Name</th>
			<th>Age</th>
			<th>Mobile Number</th>
			<th>Email Id</th>
		<tr>
		<br/></br>
		<?php 
			while($customers = mysql_fetch_assoc($records)){
				echo "<tr>";
				echo "<td>".$customers{'id'}."</td>";
				echo "<td>".$customers{'username'}."</td>";
				echo "<td>".$customers{'age'}."</td>";
				echo "<td>".$customers{'mobile_no'}."</td>";
				echo "<td>".$customers{'email_id'}."</td>";
				echo "</tr>";
		
			}//end while

		 ?>



	</div>
	</table>
	</body>
	
</html>
