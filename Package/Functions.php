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
	
	$Fdate = "";
	$FirstEntry = "";
	$Sdate = "";
	$SecondEntry = "";
	$Entry = "";
	$REntry = "";
	$NumForm = "";
	$ReForm = "";
	$Currency = "";
	
	
	
	if(isset($_POST["submit"]))	
	{
		
	$Fdate = $_POST['Fdate'];	
	$Sdate = $_POST['Sdate'];
	$Entry = $_POST['Entry'];
	$NumForm = $_POST['NumForm'];
	$Money = $_POST['Money'];
	
	
	Function FirstDate($Firstdata)
	{
		global $FirstEntry;
			
			if(preg_match("^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$^",$Firstdata))
				{
			$Firstdata = date_create($Firstdata);
			$FirstEntry =  date_format($Firstdata, 'm/d/Y');
				}
		else if($Firstdata != "")
		{
			$FirstEntry =  "Invalid entry";
		}
		else{$FirstEntry =  "";}
		
	}

		Function SecondDate($Seconddata)
	{
		global $SecondEntry;
			
			if(preg_match("^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$^",$Seconddata))
				{
			$Seconddata = date_create($Seconddata);
			$SecondEntry =  date_format($Seconddata, 'd/m/Y');
				}
		else if($Seconddata != "")
		{
			$SecondEntry =  "Invalid entry";
		}
		else{$SecondEntry =  "";}
		
	}
	
			Function EntryStr($Entrydata)
	{
		global $REntry;
			
		$Entrydata = trim($Entrydata);
		$Entrydata = strtolower($Entrydata);
		$REntry = strlen($Entrydata);
		
		if (strpos($Entrydata, 'dmacc') !== false) {
			$REntry .= " true dmacc is in this word";
		}
	}

			Function NumberFormat($NumIn)
	{
		global $ReForm;
		$ReForm = number_format($NumIn)."<br>";;
	}

			Function CurrencyFor($CurIn)
	{
		global $Currency;
		
		 $Currency = number_format($CurIn, 2,'.', ',');
		 $Currency = "$" . $Currency;
	}
	
	FirstDate($Fdate);
	SecondDate($Sdate);
	EntryStr($Entry);
	NumberFormat($NumForm);
	CurrencyFor($Money);
	}
	
 ?>		

		<div id = "wrapper">		

 
 		<header>
			<h1>wdv341 Homework Page</h1>
		</header>

				<content id = "sidebar">
				
					
				
				</content>

				<content id = "main">
				
				<form id="BasicFunctions" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
					
				Enter date: Will format to mm/dd/yyyy <input type="date" name="Fdate" id = "Fdate" value = "<?php echo htmlspecialchars($Fdate); ?>" ><?php echo $FirstEntry; ?><br>
				Enter date: Will format to dd/mm/yyyy <input type="date" name="Sdate" id = "Sdate" value = "<?php echo htmlspecialchars($Sdate); ?>"><?php echo $SecondEntry; ?><br>
				Enter Your String: <input type="string" name="Entry" id = "Entry" value = "<?php echo htmlspecialchars($Entry); ?>"><?php echo $REntry; ?><br>
				Enter A number: <input type="number" step="any" name="NumForm" id = "NumForm" value = "<?php echo htmlspecialchars($NumForm); ?>"><?php echo $ReForm; ?><br>
				Enter A number: <input type="number" step="any" name="Money" id = "Money" value = "<?php echo htmlspecialchars($Money); ?>"><?php echo $Currency; ?>
				
				<br><input type="submit" id="submit" name="submit" value="submit" /><br>
					
				</form>
				
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