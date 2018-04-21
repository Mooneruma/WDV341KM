<!DOCTYPE html>
<html>
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
	include 'ConnectLogin.php';			//connects to the database

	$stmt = $conn->prepare("SELECT event_user_name, event_user_password FROM user_table WHERE event_user_id = 3");
	$stmt->execute();
?>

<table>
<?php 
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		echo "<tr>";
			$ServUser = $row['event_user_name'];	
			$ServPass = $row['event_user_password']; 		
		echo "</tr>";
	}

?>
</table>

<?php
session_start();
$inName = "";
$inDesc = "";
$_SESSION["User"] = "";

		if(isset($_POST["submit"]))
	{	

		$inName = $_POST['inName'];
		$inDesc = $_POST['inDesc'];
		
		if($inName == $ServUser && $inDesc == $ServPass){
			$_SESSION["User"] = "valid";
			header('Location: displayEvents.php'); 
		}else{
			$_SESSION["User"] = "Invalid";
		}
		
	}

?>

</head>

<body>

<div id="orderArea">
<form id="form1" name="form1" method="post" action=" <?php echo htmlentities($_SERVER['PHP_SELF']); ?> ">
  <h3>Login: <span class = "error"><?php if($_SESSION["User"] == "Invalid"){echo "login information incorrect.";}?></span></h3>

    <tr>
      <td>Enter User Name:<br> </td>
      <td><input type="text" name="inName" id="inName" size="50" value = "<?php echo htmlspecialchars($inName); ?>" /><br></td>
    </tr>
	
    <tr>
      <td>Enter Password:<br> </td>
      <td><input type="text" name="inDesc" id="inDesc" size="50" value = "<?php echo htmlspecialchars($inDesc); ?>" /><br></td>
    </tr>	
    <input type="submit" name="submit" id="submit" value="Login" />
    <input type="reset" name="button2" id="button2" value="Clear Form" />
</form>


</div>

</body>
</html>