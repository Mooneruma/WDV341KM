<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV341 Intro PHP - Form Validation Example</title>
<style>

#orderArea	{
	width:600px;
	background-color:#CF9;
}

.error	{
	color:red;
	font-style:italic;	
}
</style>

<?php 

	session_start();
	
	$inName = "";
	$inEmail = "";
	$RadioGroup1 = "";
	$Clicked = false;
	$WarnOne = "";
	$WarnTwo = "";
	$WarnThree = "";
	
			if(isset($_POST["submit"]))
	{	

	$inName = $_POST['inName'];
	$inEmail = $_POST['inEmail'];

	$Clicked = true;
	
	
	if(isset($_POST['radio']))
	{
		
	}else
	{
		$WarnOne = "your must Select An option"; 
	}

	if(preg_match( '/^([0-9]{3}[-]*[0-9]{2}[-]*[0-9]{4})*$/', $inEmail))
	{
		
	}else{
		
		$WarnTwo = "your Social Security is entered incorrectly.";
		
	}
	
	if($WarnTwo == "")
		{
			$WarnTwo = "Please enter your Social Security";
		}
	
	if($inName == ""){
		$WarnThree = "Please select an option";	
	}else{
		
	}
	
	}

	
	
?>

</head>

<body>
<h1>WDV341 Intro PHP</h1>
<h2>Form Validation Assignment


</h2>
<div id="orderArea">
  <form id="form1" name="form1" method="post" action=" <?php echo htmlentities($_SERVER['PHP_SELF']); ?> ">
  <h3>Customer Registration Form</h3>
  <table width="587" border="0">
    <tr>
      <td width="117">Name:</td>
      <td width="246"><input type="text" name="inName" id="inName" size="40" value = "<?php echo htmlspecialchars($inName); ?>" /></td>
      <td width="210" class="error"><?php echo $WarnOne; ?></td>
    </tr>
    <tr>
      <td>Social Security</td>
      <td><input type="text" name="inEmail" id="inEmail" size="40" value = "<?php echo htmlspecialchars($inEmail); ?>" /></td>
      <td class="error"><?php echo $WarnTwo; ?></td>
    </tr>
    <tr>
      <td>Choose a Response</td></span>
      <td><p>
        <label>
          <input type="radio" name="radio" id="RadioGroup1_0" value = "Phone">
          Phone</label>
        <br>
        <label>
          <input type="radio" name="radio" id="RadioGroup1_1" value = "Email">
          Email</label>
        <br>
        <label>
          <input type="radio" name="radio" id="RadioGroup1_2" value = "US Mail">
          US Mail</label>
        <br>
      </p></td>
      <td class="error"><?php echo $WarnThree; ?></td>
    </tr>
  </table>
  <p>
    <input type="submit" name="submit" id="submit" value="Register" />
    <input type="reset" name="button2" id="button2" value="Clear Form" />
  </p>
</form>


</div>

</body>
</html>