<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WDV341 Intro PHP  - Display Events Example</title>
    <style>
		.eventBlock{
			width:500px;
			margin-left:auto;
			margin-right:auto;
			background-color:#CCC;	
		}
		
		.displayEvent{
			text_align:left;
			font-size:18px;	
		}
		
		.displayDescription {
			margin-left:100px;
		}
	</style>
</head>

<body>
    <h1>WDV341 Intro PHP</h1>
    <h2>Example Code - Display Events as formatted output blocks</h2>   

<?php
	include 'ConnectAsgn.php';
	$query = $conn->prepare("SELECT event_id, event_name, event_description, event_presenter, event_day, event_time FROM wdv341_events");
	$query->execute();
	//Display each row as formatted output
	while( $row = $query->fetch() )		
	//Turn each row of the result into an associative array 
  	{
		//For each row you have in the array create a block of formatted text
?>

	<p>
        <div class="eventBlock">	
            <div>
            	<span class="displayEvent">Event:<?php echo $row['event_name'];?></span>
            	<span class="displayDescription">Description:<?php echo$row['event_description'];?></span>
            </div>
            <div>
            	Presenter:
            </div>
            <div>
            	<span class="displayTime">Time<?php echo $row['event_time'];?>:</span>
            </div>
            <div>
            	<span class="displayDate">Date:<?php 
				if($row['event_day'] == "0000-00-00"){
				echo "00-00-0000";
				}else{
					echo date( "m-d-Y", strtotime($row['event_day']));
				}
					?></span>	
				
            </div>
        </div>
    </p>

<?php
  	}//close while loop
?>
</div>	
</body>
</html>