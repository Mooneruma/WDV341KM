<!doctype html>
<html>

	<head>
	<meta charset="utf-8">
		<title>home</title>
	</head>
	
	<body>
	
		<style>
	
		*{	
			margin: auto;
		}
	
		header{
			padding-top: 1em;
			background-color: black;
			color: white;
		}
	
		body{
			background-image: url("../image/fractal-1224853_1280.jpg");
			text-align: center;
		}

		#sidebar{
			margin-top: 0.2em;
			padding-top: 2.5em;
			text-align: center;
			background-color: white;
			float: left;
			width: 280px;

		}
	
		#sidebarOpen{
	
			margin-top: 0.5em;
			padding-top: 0.5em;
			text-align: left;
			float: left;
			width: 280px;
		}
	

		#main{
			text-align: left;
			width: 75%;
			float: right;
			padding-top: 2em;
			background-color: white;
	
		}
	
		#wrapper{
			background-color: white;
			width: 1200px;
			padding-bottom: 500px;
		}
		
		footer{
			width: 1200px;
			background-color: black;
			color: white;
			padding-top: 25px;
			text-align: left;
			text-indent: 50px;
		}
	
		#clearfloat{
			clear:both;	
		}
	
		Big{
			font-size: 2em;
		}

		</style>


		
 <?php 
	session_start();
	
	include 'Email.php';
	
	$contactEmail = new Email(""); 
	
	$contactEmail->setRecipient("redesignedMoon@gmail.com");
	
	$contactEmail->setSender("admin@kmoonpage.com");
	
	$contactEmail->setSubject("Homeowork");
	
	$contactEmail->setMessage("This is homework for my class. I'm making this emailer work i  really hope it does. Well I think i should make the text fairly large. I tried using ipsom but took it out because I was worried if i could be spotted as spam for some reason.");
	$emailStatus = $contactEmail->sendMail(); 
	
 ?>		

		<div id = "wrapper">		

 
 		<header>
			<h1>wdv341 Homework Page</h1>
		</header>

				<content id = "sidebar">
				
					
				
				</content>

				<content id = "main">
				
				
					<p><h2>Receiving Address:</h2> <?php echo $contactEmail->getRecipient(); ?></p>
					<p><h2>Senders Address:</h2> <?php echo $contactEmail->getSender(); ?></p>
					<p><h2>Subject Line:</h2> <?php echo $contactEmail->getSubject(); ?></p>
					<p><h2>Message Content:</h2> <?php echo $contactEmail->getMessage(); ?></p>
	
	
					<?php
						if ($emailStatus) {
					?>
						<h2>Email was successful</h2>
					<?php			
					}else{
					?>			
						<h2>Email has encountered a problem</h2>
					<?php			
					}
					?>
					
				
				</content>
		
	
				<content id = "sidebarOpen">
	
				</content>
			
			<div class = "clearfloat"></div>
		
		<footer>
			Designed and Coded By Kyle Moon
			<br><p><b>Thank you for viewing!</b></p>
		</footer>
	</body>
	




</html>