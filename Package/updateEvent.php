<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV341 Intro PHP - Form Validation Example</title>
<style>

#orderArea	{
	width:900px;
	background-color:#CF9;
}

.error	{
	color:red;
	font-style:italic;	
}
</style>

<?php 

	session_start();
	
	$UpdateEventId = $_GET['eventID'];
	$inName = "";
	$inDesc = "";
	$inPres = "";
	$inDate = "";
	$inTime = "";
	$WarnOne = "";
	$WarnTwo = "";
	$WarnThree = "";
	$WarnFour = "";
	$WarnFive = "";
	$validForm = False;
	
		if(isset($_POST["submit"]))
	{	

		$inName = $_POST['inName'];
		$inDesc = $_POST['inDesc'];
		$inPres = $_POST['inPres'];
		$inDate = $_POST['inDate'];
		$inTime = $_POST['inTime'];

		$Clicked = true;
	
	
		function NameValidator($SetOne){
			
			global $validForm, $WarnOne;
			
			if(preg_match('/^[a-zA-Z0-9,.!? ]*$/', $SetOne)){
	
			}	
			else{
			
				$validForm = False;
				$WarnOne = "No numbers or special characters allowed";
			}
		}
	
		function DescValidator($SetTwo){
			
			global $validForm, $WarnTwo;
			
			if(preg_match('/^[a-zA-Z0-9,.!? ]*$/', $SetTwo)){
	
			}	
			else{
			
				$validForm = False;
				$WarnTwo = "No numbers or special characters allowed";
			}
		}
		
		function PresValidator($SetThree){
			
			global $validForm, $WarnThree;
			
			if(preg_match('/^[a-zA-Z0-9,.!? ]*$/', $SetThree)){
	
			}	
			else{
			
				$validForm = False;
				$WarnThree = "No numbers or special characters allowed";
			}
		}
		
		function DateValidator($SetFour){
			
			global $validForm, $WarnFour;
			
			
			
			if( strtotime(date("Y/m/d")) < strtotime($SetFour) ){
	
			}	
			else{
			
				$validForm = False;
				$WarnFour = "Please select a future date";
			}
		}
		
		function timeValidator($SetFive){
			
			global $validForm, $WarnFive;
			
			
			$CheckTime = strtotime($SetFive);
			
			if(date('H',$CheckTime) < 22 && date('H',$CheckTime) > 6){
	
			}	
			else{
			
				$validForm = False;
				$WarnFive = "No time after 10 PM or before 6 AM";
			}
		}
		
		$validForm = true;
		
		NameValidator($inName);
		DescValidator($inDesc);
		PresValidator($inPres);
		DateValidator($inDate);
		timeValidator($inTime);

		if($validForm == true){
			include("connectPDO.php");
			
			
			$stmt = $conn->prepare("UPDATE wdv341_event SET event_name = '$inName', 
				event_description = '$inDesc', event_presenter = '$inPres', 
				event_date = '$inDate', event_time = '$inTime' WHERE event_id = $UpdateEventId");
			
			$stmt->bindParam(':event_name', $event_name);
			$stmt->bindParam(':event_description', $event_description);
			$stmt->bindParam(':event_presenter', $event_presenter);
			$stmt->bindParam(':event_date', $event_date);
			$stmt->bindParam(':event_time', $event_time);
			
			$event_name = $inName;
			$event_description= $inDesc;
			$event_presenter= $inPres;
			$event_date= $inDate;
			$event_time= $inTime;
			
			$stmt->execute();
			echo "Your Event has been entered";
			
			
			$inName = "";
			$inDesc = "";
			$inPres = "";
			$inDate = "";
			$inTime = "";
			$WarnOne = "";
			$WarnTwo = "";
			$WarnThree = "";
			$WarnFour = "";
			$WarnFive = "";
		}
	}

	
	
?>

</head>

<body>

</h2>
	
	<?php
	
	include 'connectPDO.php';			//connects to the database
	
	$stmt = $conn->prepare("SELECT event_id, event_name, event_description, event_presenter, event_date, event_time FROM wdv341_event WHERE event_id = $UpdateEventId");
	$stmt->execute();
?>
<h2>Record to edit</h2>
<table border='1'>
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Description</td>
		<td>Presenter</td>
		<td>Date</td>
		<td>Time</td>
<?php 
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		echo "<tr>";
			echo "<td>" . $row['event_id'] . "</td>";
			echo "<td>" . $row['event_name'] . "</td>";	
			echo "<td>" . $row['event_description'] . "</td>";
			echo "<td>" . $row['event_presenter'] . "</td>";
			echo "<td>" . $row['event_date'] . "</td>";
			echo "<td>" . $row['event_time'] . "</td>";			
		echo "</tr>";
		
		$PresetName = $row['event_name'];
		$PresetDescription = $row['event_description'];
		$PresetPresenter = $row['event_presenter'];
		$PresetDate = $row['event_date'];
		$PresetTime = $row['event_time'];
	}
?>
</table>
	
<div id="orderArea">
  <form id="form1" name="form1" method="post" action=" <?php echo htmlentities($_SERVER['PHP_SELF']). "?eventID=" . $UpdateEventId; ?> ">
  <h3>Update Registration Form</h3>
  <table width="800" border="0">
    <tr>
      <td width="117">Event name: </td>
      <td width="246"><input type="text" name="inName" id="inName" size="50" value = "<?php echo $PresetName; ?>" /></td>
      <td width="210" class="error"><?php echo $WarnOne; ?></td>
    </tr>
    <tr>
      <td>Event Description: </td>
      <td><input type="text" name="inDesc" id="inDesc" size="50" value = "<?php echo $PresetDescription; ?>" /></td>
      <td class="error"><?php echo $WarnTwo; ?></td>
    </tr>
    <tr>
      <td>Event presenter: </td>
      <td><input type="text" name="inPres" id="inPres" size="50" value = "<?php echo $PresetPresenter; ?>" /></td>
      <td class="error"><?php echo $WarnThree; ?></td>
    </tr>
    <tr>
      <td>Event date: </td>
      <td><input type="date" name="inDate" id="inDate" value = "<?php echo $PresetDate; ?>" /></td>
      <td class="error"><?php echo $WarnFour; ?></td>
    </tr>
    <tr>
      <td>Event time: </td>
      <td><input type="time" name="inTime" id="inTime" size="50" value = "<?php echo $PresetTime; ?>" /></td>
      <td class="error"><?php echo $WarnFive; ?></td>
    </tr>
 </table>
  <p>
    <input type="submit" name="submit" id="submit" value="Register" />
    <input type="reset" name="button2" id="button2" value="Clear Form" />
  </p>
</form>

	<h3>
		<a href = "displayEvents.php">Return Admin Page</a>
	</h3>

</div>

</body>
</html>