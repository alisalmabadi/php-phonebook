<?php


	$server_name="localhost";
		$username="root";
		$password="";
		$dbname="uclearni_phonebook";
		$dsn="mysql:host=$server_name;dbname=$dbname";
	try{
	
		$connect=new PDO($dsn,$username,$password);
		$connect->exec("SET CHARACTER SET utf8");
		$connect->exec("set names utf8");
			return $connect;
		
	}catch(PDOException $error){
		
		echo "error in connection".$error->__toString();
		exit();
		
		
	}

	


?>

