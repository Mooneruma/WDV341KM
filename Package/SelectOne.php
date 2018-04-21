<?php
	
	include 'connectPDO.php';			//connects to the database

	$stmt = $conn->prepare("SELECT event_id, event_name, event_description, event_presenter, event_date, event_time FROM wdv341_event WHERE event_presenter = 'moon'");
	$stmt->execute();
?>
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