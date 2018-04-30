<?php
$servername = "localhost";
$username = "mooneruma_final";
$password = "wdv341";
$dbname = "mooneruma_final";
session_start();

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$deleteEventId = $_GET['eventID'];
	
    // sql to delete a record
    $sql = "DELETE FROM final_event WHERE event_id = $deleteEventId";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
	header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>