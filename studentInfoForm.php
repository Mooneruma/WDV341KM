<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>DMACC Portfolio Day Bio Form</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  
  <!-- css3-mediaqueries.js for IE less than 9 -->

<script src="css3-mediaqueries.js"></script>
<script src="jquery-3.2.1.js"></script>
<script>

	$(document).ready(function(){
		if( $("select[name=program]	option:selected").val() == "webDevelopment")
		{
			$(".secondWeb").css("display", "inline");
		}
		else
		{
			$(".secondWeb").css("display", "none");
		}
		
		$("select#program").change(function(){
			if( $("select#program option:checked").val() == "webDevelopment")
			{
				$(".secondWeb").css("display", "inline");
			}
			else
			{
				$(".secondWeb").css("display", "none");
			}
		});
		
		function resetForm(){
			$("#firstName").val("");
			$("#lastName").val("");
			$("#program").val("default");
			$("#websiteAddress").val("");
			$("#websiteAddress2").val("");
			$("#email").val("");
			$("#hometown").val("");
			$("#careerGoals").val("");
			$("#threeWords").val("");
		}
	});
	
	
	</script>
  
  <style>
  
	.hide-robot{
		
		display: none;
	}
  
	img{
		display: block;
		margin: 0 auto;
	}
	.frame{
		background-image: url("orange popsicle.jpg");
		padding: 1em;	
	}
	.frame2{
		background-image: url("citrus.jpg");
		padding: 1.3em;	
	}	
	body{
		background-image: url("bodacious.png");
		margin: 1.5em;
	}
	
	.main {
		padding: 1em;
		background-color: white;
	}
	form{
		text-align: center;
	}
	h2 {
		text-align: center;
	}
	.robotic{
		display: none;
	}

	.form {
		background-color:white;
		padding-left: 5em;
	}
	p {
		align:left;
	}	
	.citrus{
		margin: auto;
		background-image: url("raspberry.jpg");
		padding: 1.3em;	
		width: 70%;
	}
	.bamboo{
		background-image: url("bamboo.jpg");
		padding: 1em;	
	}	
	.violet{
		background-image: url("ultra violet.png");
		padding: .5em;	
	}	
	.secondWeb{
		display: none;
	}
	table{
		margin: auto;
	}
	table td{
		padding-bottom: .75em;
	}
	.error{
		font-style: italic;
		color: #d42a58;
		font-weight: bold;
	}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  img {
    width:100%;
  }
  .form {
	width:100%; 
	padding-left: .1em;
	padding-top: .1em;
  }
  .citrus {
	background-image:none;  
  }
  .bamboo {
	background-image:none;  
  } 
  .violet {
	background-image:none;  
  }  
  .secondWeb{
		display: none;
	}  
  table{
		margin: auto;
	}
  table td{
		padding-bottom: .5em;
	}
}
	
  </style>
  
<!-- Input Field validations. 

validateFirstName
	// valid first name should only include letters, numbers, and spaces
	// ... must be present


validateLastName
	// valid last name should only include letters, numbers and spaces
	// ... must be present

validateProgram
	//valid program must not be default options

validateWebsiteAddress
	//valid URL format

validateWebsiteAddress2
	//valid URL format	

validateLinkedIn
	//valid URL to linkedin.com

validateEmail
	//valid email should be in a proper format  
	//Matches: bob@aol.com | bob@wrox.co.uk | bob@domain.info |123@123.123
	//Non-Matches: a@b | notanemail | bob@@.

validateHometown
	// valid name should only include letters, numbers, spaces, and commas
	// ... must be present

validateCareerGoals
	//valid career goals should include only numbers, letters, spaces, and basic punctuation

validateThreeWords
	//valid three-words should include only numbers, letters, spaces, and basic punctuation

-->
 
<?php
session_start();
	$emailToLogin = "";
	$firstName = "";
	$lastName = "" ;
	$program = "";
	$program2 = "";
	$websiteAddress = "";
	$email = "";
	$linkedIn = "";
	$hometown = "";
	$careerGoals = "";
	$threeWords = "";
	$EmailError = "";
	$LastError = "";
	$ProgramError = "";
	$WebError = "";
	$PersonalError = "";
	$linkedError = "";
	$HomeError = "";
	$CareerError = "";
	$WordsError = "";
	$message = "";
	$$honeypot = "";
	
	$validForm = False;
	
		if(isset($_POST["submit"]))
	{	

	$emailToLogin = $_POST['emailToLogin'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$program = $_POST['program'];
	$program2 = $_POST['program2'];	
	$websiteAddress = $_POST['websiteAddress'];
	$email = $_POST['email'];	
	$linkedIn = $_POST['linkedIn'];
	$hometown = $_POST['hometown'];
	$careerGoals = $_POST['careerGoals'];
	$threeWords = $_POST['threeWords'];
	
	

	Function ValidemailToLogin($InEmail){
		
		global $validForm, $EmailError;
				
		if(preg_match('/[a-zA-z0-9.-]+\@[a-zA-z0-9.-]+.[a-zA-Z]+/', $InEmail)){
			
						
			
		}	
		else{
			
			$validForm = False;
			$EmailError = "Login error please enter a valid email";
		}
	}
	
	
	Function ValidfirstName($InName){
		
		global $validForm, $Firsterror;
		
		
		if(preg_match('/[a-zA-Z]{3,30}$/', $InName)){
			
						
			
		}	
		else{
			
			$validForm = False;
			$Firsterror = "This is not a valid First Name";
			
		}
		if($InName == ""){
			
			$validForm = False;
			$Firsterror = "This is not valid last name";
		}
		
	}
	
	
	Function ValidlastName($InLastName){
		
		global $validForm, $LastError;
		
		
		if(preg_match('/[a-zA-Z]{3,30}$/', $InLastName)){
			
						
			
		}	
		else{
			
			$validForm = False;
			$LastError = "This is not valid last name";
			
		}
		if($InLastName == ""){
			
			$validForm = False;
			$LastError = "This is not valid last name";
		}
		
	}
	
	
	Function Validprogram($InProgram){
		
		global $validForm, $ProgramError;

		
		if('default' != $InProgram){
			
						
			
		}	
		else{
			
			$validForm = False;
			$ProgramError = "Please select at least one";
			
		}
		
	}
	
	Function Validprogram2($InProgram2){
		

	}
	
	Function ValidwebsiteAddress($InWebAdd){
		
		global $validForm, $WebError;

		
		if(preg_match( '/^(http|https):\\/\\/[a-z0-9_]+([\\-\\.]{1}[a-z_0-9]+)*\\.[_a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i', $InWebAdd)){
			
						
			
		}	
		else{
			
			$validForm = False;
			$WebError = "Please enter a valid web address";
		}
		
	}
	
	Function Validemail($Inemail){
		
		global $validForm, $PersonalError;
		
		if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $Inemail)){
			
						
			
		}	
		else{
			
			$validForm = False;
			$PersonalError = "Please enter a valid email";
		}	
	}
	
	Function ValidlinkedIn($InLinked){
		
		global $validForm, $linkedError;

		
		if(preg_match("^((http|https):\/\/)?+(www.linkedin.com\/)+[a-z]+(\/)+[a-zA-Z0-9-]{5,30}+$^", $InLinked)){
			
						
			
		}	
		else{
			
			if($InLinked != '')
			$validForm = False;
			$linkedError = "This is not a valid linked in profile";
			
		}}
		
	

	Function Validhometown($InHome){
		
		global $validForm, $HomeError;

		
		if(preg_match('/[a-zA-Z]{3,30}$/', $InHome)){
			
						
			
		}	
		else{
			
			$validForm = False;
			$HomeError = "This is not a valid town";
			
		}
		
	}
	
	Function ValidcareerGoals($InCareer){

	
		global $validForm, $CareerError;

		
		if(preg_match('/^[a-zA-Z0-9,.!? ]*$/', $InCareer)){
			
			
			
		}	
		else{
			
			$validForm = False;
			$CareerError = "No numbers or specail characters allowed";
		}
		
	}

	Function ValidthreeWords($InWords){
		
		global $validForm, $firstNameErrMsg;

		
		if(preg_match('/[a-z]+\s+[a-z]+/', $InWords)){
			
			
			
		}	
		else{
			
			$validForm = False;
			$WordsError = "Please enter three words";
		}
	}
	
	
	$validForm = True;
	
	ValidemailToLogin($emailToLogin);
	ValidfirstName($firstName);	
	ValidlastName($lastName);
	Validprogram($program);	
	Validprogram2($program2);
	ValidwebsiteAddress($websiteAddress);	
	Validemail($email);	
	ValidlinkedIn($linkedIn);	
	Validhometown($hometown);	
	ValidcareerGoals($careerGoals);	
	ValidthreeWords($threeWords);
	
		
	//honey pot field
	$honeypot = $_POST['Bot'];
	//check if the honeypot field is filled out. If not, send a mail.
	if( $honeypot > 1 ){
		$message = "Bot Alert";
		$validForm = False;
	}
		
		
		if($validForm)
		{
			$message = "Thank you for filling out this form";	
		}
		else
		{
			$message = $message + "Something went wrong";
		}
	
	
	
	}


	
?>

 
</head>

<section class="orange">
<body>
<div class="frame2">
<div class="frame">

  <div class="main">
  <div><img src="madonna.gif" alt="Mix gif" ></div>
  <br>

<!--<a href = 'dmaccPortfolioDayLogout.php'>Log Out</a>-->

<section class="citrus">
<section class="bamboo">
<section class="violet">

	<div class="main form">
	
	<h1>
		<?php 
			echo $message;
		?>
	</h1>
	
	<h2></h2>
	</table>
<?php if ($validForm == false) : ?> 
	<form id="portfolioBioForm" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
		
		<table>
		<tr>
		<td>Login Email:<?php echo $EmailError; ?><br> <input type="text" id="emailToLogin" name="emailToLogin" value="<?php echo htmlspecialchars($emailToLogin); ?>"/></td>
		</tr>
		<tr>
		<td>First Name:<?php echo $Firsterror; ?><br> <input type="text" id="firstName" name="firstName" value="<?php echo htmlspecialchars($firstName); ?>"/><br><span class="error" id="firstNameError"></span></td>
		</tr>
		<tr>
		<td>Last Name:<?php echo $LastError; ?><br> <input type="text" id="lastName" name="lastName" value="<?php echo htmlspecialchars($lastName); ?>"/><br><span class="error" id="lastNameError"></span></td>
		</tr>
		<tr>
		<td >Program:<?php echo $ProgramError; ?><br> <select id="program" name="program">
				<option value="default">---Select Your Program---</option>
				<option value="animation" >Animation</option>
				<option value="graphicDesign" >Graphic Design</option>
				<option value="photography" >Photography</option>
				<option value="videoProduction" >Video Production</option>
				<option value="webDevelopment" >Web Development</option>
			</select><br><span class="error" id="programError"></span><td>
		</tr>
		<tr>
		<td >Secondary Program:<br> <select id="program2" name="program2">
				<option value="none" >---No Secondary Program---</option>
				<option value="animation" >Animation</option>
				<option value="graphicDesign" >Graphic Design</option>
				<option value="photography" >Photography</option>
				<option value="videoProduction" >Video Production</option>
				<option value="webDevelopment" >Web Development</option>
			</select><br><span class="error" id="program2Error"></span><td>
		</tr>
		<tr>
		<td>Website Address:<?php echo $WebError; ?><br> <input type="text" id="websiteAddress" name="websiteAddress" value="<?php echo htmlspecialchars($websiteAddress); ?>"/><br><span class="error" id="websiteAddressError"></span></td>
		</tr>
		<tr>
		<td>Personal Email:<?php echo $PersonalError; ?><br><input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>"/><br><span class="error" id="emailError"></span></td>
		</tr>
		<tr>
		<td>LinkedIn Profile:<?php echo $linkedError; ?><br><input type="text" id="linkedIn" name="linkedIn" value="<?php echo htmlspecialchars($linkedIn); ?>"/><br><span class="error" id="linkedInError"></span></td>
		<tr>
		<td><span class="secondWeb">Secondary Website Address (git repository, etc.):<br> <input type="text" id="websiteAddress2" name="websiteAddress2" value=""/><br><span class="error" id="websiteAddress2Error"></span></span></td>
		</tr>
		<tr>
		<td>Hometown:<?php echo $HomeError; ?><br> <input type="text" id="hometown" name="hometown" value="<?php echo htmlspecialchars($hometown); ?>"/><br><span class="error" id="hometownError"></span></td>
		</tr>
		<tr>
		<td>Career Goals:<?php echo $CareerError; ?><br> <textarea id="careerGoals" name="careerGoals" value = "<?php echo htmlspecialchars($careerGoals); ?>"/></textarea><br><span class="error" id="careerGoalsError"></span></td>
		</tr>
		<tr>
		<td>3 Words that Describe You:<?php echo $WordsError; ?><br> <input type="text" id="threeWords" name="threeWords" value="<?php echo htmlspecialchars($threeWords); ?>"/><br><span class="error" id="threeWordsError"></span></td>
		<p class="robotic" id="pot">
			<label>Leave Blank</label>
			<input type="hidden" name="inRobotest" id="inRobotest" class="inRobotest" />
		</p>
		<input type="hidden" id="submitConfirm" name="submitConfirm" value="submitConfirm"/>
		</tr>
		<tr>
		<td><input type="submit" id="submit" name="submit" value="SubmitBio" /></td>
		</tr>
		<tr>
		<td><input type="reset" id="resetBio" name="resetBio" value="Reset Bio"/></td>
		</tr>
		<tr>
		<td><input name="Bot" type="text" id="Bot" class="hide-robot"></td>
		</tr>
		</table>
	</form>
	
	
<?php endif; ?>
	</div>
	

</section>	
</section>
</section>
  
</div>

</body>
</section>

</html>
