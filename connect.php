<?php
	
	if(!@mysql_connect('mysql.hostinger.in','u152358600_anoop','balaji1486')|| !@mysql_select_db('u152358600_resum'))
		{
		die('unable to connect');
	}

	if(isset($_POST['name']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$comments=$_POST['comments'];
		$sql="INSERT INTO name(name,email,subject,comments) VALUES ('$name','$email','$subject','$comments')";
	
		


	$result=@mysql_query($sql) or die("query failed");

if($result)
	header('location:index.php');
	}

?>