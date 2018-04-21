<?php
	
	include 'connectPDO.php';
	session_start();
	if($_SESSION["User"] == "valid"){
	//connects to the database

	$stmt = $conn->prepare("SELECT event_id, event_name, event_description, event_presenter, event_date, event_time FROM wdv341_event");
	$stmt->execute();
?>
<h1>Admin Page</h1>
<h2>
<a href = "Logout.php">Logout</a>
</h2>
<table border='1'>
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Description</td>
		<td>Presenter</td>
		<td>Date</td>
		<td>Time</td>
		<td>UPDATE</td>
		<td>DELETE</td>
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
			echo "<td><a href='updateEvent.php?eventID=" . $row['event_id'] . "'>Update</a></td>"; 
			echo "<td><a href='deleteEvent.php?eventID=" . $row['event_id'] . "'>Delete</a></td>"; 		
		echo "</tr>";
	}
	?> 
	</table>
	
	<h3>
		<a href = "FormPage.php">Add to database</a>
	</h3>
	<?php
	}else{
		echo("you are not a valid user. Please return to login page");
		?> <a href = "login.php">Login Page</a> <?php
	}
		
?>
</table>