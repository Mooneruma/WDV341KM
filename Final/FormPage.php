

<!doctype html>
<html>

	<head>
	<meta charset="utf-8">
	<!-- head does not display-->
		<title>home</title>
	
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	</head>
	

	<style>
	
	*{
		margin: auto;
		padding: 0;
		
	}
	
	header{
		background-color: black;
		color: white;
		padding-top: 0.5em;
		padding-bottom: 1em;
		font-family: "Impact", Charcoal, sans-serif;
		font-size: 36px;
		text-align: center;
	}
	
	body{
		background-image: url("d417-lapis-blue.jpg");
		text-align: left;
		
	}

	#sidebar{
		background-color: white; 
		box-shadow:3px 3px 3px 2px #797979;
		height: 50px;
		width: 100px;
		padding: 5px;
		text-align: center;
		width: 23%;
		float: left;
		border: solid thick;
		margin-top: 2em;
	}

	#main{
		font-family: "Times New Roman", Times, serif;
		padding: 2em;
		font-size: 18px;
		text-align: center;
	}
	
	#wrapper{
		background-color: rgba(255, 255, 255, 0.99);
		width: 95%;
	}
	
	#wrapTight{
	width: 95%;
    box-shadow: 5px 10px 18px #888888;
	padding: 2%;
	}
	
	
	#footer{
		background-color: black;
		color: white;
		width: 100%; 
		padding: 0;
		float: right;
		padding-top: 2em;
	}
	
	#TShad{
		 text-shadow: #aaa 1.5px 1.5px 1.5px;
	}
	
	#BShad{
		background-color: #EEEEEE; 
		box-shadow:3px 3px 3px 2px #797979; 
		height: 100px;
		width: 100px; 
		padding: 5px;
	}
	
	#BRounded{
		border: 2px solid orange;
		border-radius : 25px;
		width: 100px;
		padding: 10px ;
		text-align:center;
	}
	
	#Seperators{
		height: 25px;
		width: 100%; 
	}
	#SeperatorsSlider{
		height: 350px;
		width: 100%; 
	}


	<!-- Slider CSS -->

	.slider {
  max-width: 300px;
  height: 200px;
  margin: 20px auto;
  position: relative;
}
.slide1,.slide2,.slide3,.slide4,.slide5 {
  position: absolute;
  width: 88.3%;
  height: 350px;;
}
.slide1 {
  background: url(pexels-photo-761543.jpeg)no-repeat center;
      background-size: cover;
    animation:fade 8s infinite;
-webkit-animation:fade 8s infinite;

} 
.slide2 {
  background: url(pexels-photo-518389.jpeg)no-repeat center;
      background-size: cover;
    animation:fade2 8s infinite;
-webkit-animation:fade2 8s infinite;
}
.slide3 {
    background: url(pexels-photo-164879.jpeg)no-repeat center;
      background-size: cover;
    animation:fade3 8s infinite;
-webkit-animation:fade3 8s infinite;
}
@keyframes fade
{
  0%   {opacity:1}
  33.333% { opacity: 0}
  66.666% { opacity: 0}
  100% { opacity: 1}
}
@keyframes fade2
{
  0%   {opacity:0}
  33.333% { opacity: 1}
  66.666% { opacity: 0 }
  100% { opacity: 0}
}
@keyframes fade3
{
  0%   {opacity:0}
  33.333% { opacity: 0}
  66.666% { opacity: 1}
  100% { opacity: 0}
}
	
	<!-- Return to top -->
	
	body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
	</style>
	<style>

#orderArea	{
	width: 80%;
	background-color:#CF9;
}

.error	{
	color:red;
	font-style:italic;	
}
</style>

<?php 

	session_start();
	if($_SESSION["User"] == "valid"){
	
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
		$inPrice = $_POST['inPrice'];

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
			
			$stmt = $conn->prepare("INSERT INTO final_event (event_name, event_description, event_presenter, event_date, event_time, event_price) 
			VALUES (:event_name, :event_description, :event_presenter, :event_date, :event_time, :event_price)");
			
			$stmt->bindParam(':event_name', $event_name);
			$stmt->bindParam(':event_description', $event_description);
			$stmt->bindParam(':event_presenter', $event_presenter);
			$stmt->bindParam(':event_date', $event_date);
			$stmt->bindParam(':event_time', $event_time);
			$stmt->bindParam(':event_price', $event_price);
			
			$event_name = $inName;
			$event_description= $inDesc;
			$event_presenter= $inPres;
			$event_date= $inDate;
			$event_time= $inTime;
			$event_price= $inPrice;
			
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
			$inPrice = "";
		}
	}

	
	
?>
	<body>
	
<div id = "wrapper">	
	<div id = "wrapTight">
		<header>
			<div class = "page-header">
				<h1 style="font-family:Bookman;"><u>Moonplex Venues</u></h1>
				<img src = "celso-405219-unsplash.jpg" height = 250 width = 60%  align = "center" style="opacity:0.6;filter:alpha(opacity=60); filter: contrast(300%);"/>
			</div>
		</header>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Explore our pages</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="Final.php">Home</a></li>
      <li><a href="ContactPage.php">Contact</a></li>
      <li><a href="ConcertPage.php">Concert Dates</a></li>
      <li class="active"><a href="#">Location</a></li>
	  <li><a href="Login.php">login</a></li>
    </ul>
  </div>
</nav>
		 <div id="Seperators"></div>
		 <div id="Seperators"></div>
		
		
		<content id = "main">	
		
<div id="orderArea">
  <form id="form1" name="form1" method="post" action=" <?php echo htmlentities($_SERVER['PHP_SELF']); ?> ">
  <h3>Event Registration Form</h3>
  <table width= 75% border="0">
    <tr>
      <td width="117">Event name: </td>
      <td width="246"><input type="text" name="inName" id="inName" size="50" value = "<?php echo htmlspecialchars($inName); ?>" /></td>
      <td width="210" class="error"><?php echo $WarnOne; ?></td>
    </tr>
    <tr>
      <td>Event Description: </td>
      <td><input type="text" name="inDesc" id="inDesc" size="50" value = "<?php echo htmlspecialchars($inDesc); ?>" /></td>
      <td class="error"><?php echo $WarnTwo; ?></td>
    </tr>
    <tr>
      <td>Picture Name including extension: </td>
      <td><input type="text" name="inPres" id="inPres" size="50" value = "<?php echo htmlspecialchars($inPres); ?>" /></td>
      <td class="error"><?php echo $WarnThree; ?></td>
    </tr>
    <tr>
      <td>Event date: </td>
      <td><input type="date" name="inDate" id="inDate" value = "<?php echo htmlspecialchars($inDate); ?>" /></td>
      <td class="error"><?php echo $WarnFour; ?></td>
    </tr>
    <tr>
      <td>Event time: </td>
      <td><input type="time" name="inTime" id="inTime" size="50" value = "<?php echo htmlspecialchars($inTime); ?>" /></td>
      <td class="error"><?php echo $WarnFive; ?></td>
    </tr>
    <tr>
      <td>Event price: </td>
      <td><input type="number" name="inPrice" id="inPrice" size="50" value = "<?php echo htmlspecialchars($inPrice); ?>" /></td>
      <td class="error"></td>
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
		
		<div id="SeperatorsSlider"></div>
<?php
	}else{
		echo("you are not a valid user. Please return to login page");
		?> <a href = "http://kmoonpage.com/IntroPHP/WDV341.html">Login Page</a> <?php
	}
		
?>
	<div class = "row">
	
	<div class='slider'>
		<div class='slide1'></div>
		<div class='slide2'></div>
		<div class='slide3'></div>
	</div>
	
	</div>
		<div id="SeperatorsSlider"></div>
	
		</content>

	
	</div>

	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

	<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
	
	<content id ="footer">
		Made for edjucational purposes.
	</content>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	
	</body>
</html>