<?php 
	session_start();
	if($_SESSION['user']){
		$user=$_SESSION['user'];
	}
	else{
		header("location:index.php");
	}
		
	mysql_connect("localhost", "root","") or die(mysql_error()); 
	mysql_select_db("BANKING") or die("Cannot connect to database"); 

	$balance=0.00;
	$query=mysql_query("SELECT * from Transfers WHERE user='$user'");
	while($row=mysql_fetch_array($query))
		{
			$balance= $balance + $row['amount'];
		}

	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		date_default_timezone_set("Africa/Kampala");
		$amount=mysql_real_escape_string($_POST['amount']);

		
		if($amount>$balance)
		{
			
			Print '<script>alert("You do not have sufficient Funds.");
			window.location.assign("balance.php")</script>';
			exit("You have insufficient funds!");
			//header("location: balance.php");
			
		}
		$amount=(-$amount);
		$money_taker=mysql_real_escape_string($_POST['money_taker']);
		$time = strftime("%T");
		$date = strftime("%B %d, %Y");

		mysql_query("INSERT INTO Transfers (amount,date_transaction,money_taker,user) VALUES ('$amount','$date','$money_taker','$user')");
		Print '<script>alert("Successful Transfer Money.");window.location.assign("balance.php");</script>';
		
	}
	else
	{
		header("location:home.php");
	}


 ?>
