<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Contact Form'; 
		$to = 'lucy.wang@UWaterloo.ca'; 
		$subject = 'Message from Contact ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Lucy Wang</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>


</head>

<body>

	<!-- navigation panel -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

	    <div class="collapse navbar-collapse " id="navbar-collapse-main">
	      <ul class="nav navbar-nav navbar-left">
	        <li><a href="#about">About</a></li>
	        <li><a href="#about">Resume</a></li>
	        <li><a href="#experience">Experience</a></li>
	        <li><a href="#contact">Contact</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<!-- first section - Home -->
	<div id="home" class="home">
	  <div class="text-vcenter"> <br> <br> <br> <br> <br>
	    <h1>LUCY WANG</h1>
	    <h3>aspiring software developer</h3> <br>
	    <a href="#about"><img src="http://victorvalentin.dk/image/downButton.png" height="50px" ></a>
	    <br> <br>
	  </div>
	</div>
	<!-- /first section -->

	<!-- second section - About -->
	<div id="about">
	  <div class="container" class="pad-section">
	  	<h2> about </h2> <br>
	    <div class="row">
	      <div class="col-sm-4 text-center">
	        <img src="images/icon.png" height="250px" alt=""/>
	      </div>
	      <div class="col-sm-7 text-center">
	        <p class="lead"><br><strong>Hi, my name is Lucy.</strong> I am a second year Computer Science student at University of Waterloo with an interest in Android development and big data. I am currently seeking a four-month internship for the upcoming winter term as a mobile or software developer.</p>
	      </div>
	    </div>
	  </div>
	  <br> <br>
	  	    <h4> click <strong><a href="images/LucyWangResume.pdf">here</a></strong> to download a copy of my resume </h4>
	  <br> <br>  <br> <br>
	</div>
	<!-- /second section -->

<section class="ss-style-triangles-beige">
	<div id= "experience" >

		<h2> experience </h2>

	<div class="container">
		<br>
		<br>
	    <ul class="timeline">
	        <li>
	          <div class="timeline-badge"></div>
	          <div class="timeline-panel">
	          	<small class="text-muted">September 2014</small>
	            <div class="timeline-heading">
	              <h4 class="timeline-title">Started School at UWaterloo</h4>
	            </div>
	            <div class="timeline-body">
	            	<h5>Relevant Coursework:</h5>	  
	              	CS135- Designing Functional Programs (Racket)<br>
	              	CS136- Elementary Algorithm Design and Data Abstraction (C)<br>
	              	CS246- Object-Oriented Software Development (C++)
	            </div>
	          </div>
	        </li>
	        <li class="timeline-inverted">
	          <div class="timeline-badge warning"></div>
	          <div class="timeline-panel">
	          	<small class="text-muted">May 2015 - August 2015</small>
	            <div class="timeline-heading">
	              <h4 class="timeline-title">Software Developer at Raven Telemetry</h4>
	            </div>
	            <div class="timeline-body">
					- Worked in a startup environment following agile practices and TDD <br>
	              	- Developed an Android application for monitoring client site efficiency <br>
					<br> 
					<strong> Technology Used: </strong> <br>
					Web: HTML, CSS, JavaScript, Ember JS <br>
					Mobile: Android SDK, Java, Pushlink, Roboeletric (JUnit) <br>
					Others: XSLT, GreaseMonkey, JIRA, Shippable
        
	            </div>
	          </div>
	        </li>
	        <li>
	          <div class="timeline-badge danger"></div>
	          <div class="timeline-panel">
	            <div class="timeline-heading">
	              <h4 class="timeline-title">Seeking Internship</h4>
	            </div>
	            <div class="timeline-body">
	              <p>Currently seeking a internship for January 2015 - May 2015 </p>
	            </div>
	          </div>
	        </li>
	    </ul>
	</div>
</section>
  
  <section class="ss-style-triangles-white">
	<div id="contact" class="pad-section">
		<br> <h2> contact </h2>
		<br> <br> <br>

		<form class="form-horizontal" role="form" method="post" action="index.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 

	</div>
</section>

	<div id="divider"></div>
	<footer>
	  <hr />
	  <div class="container">
	    <p class="text-right">Copyright &copy; Lucy Wang 2015</p>
	  </div>
	</footer>





	</div>

	<!-- attach JavaScripts -->
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>