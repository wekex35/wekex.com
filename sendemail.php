<?php

// Define some constants
define( "RECIPIENT_NAME", "Wekex Solutions" );
define( "RECIPIENT_EMAIL", "info@wekex.com" );
$response = "";
// Read the form values
// var_dump($_POST);
$success = false;
$completeMessage = "";
$senderEmail  = "";
$userName  = "";

$type = isset( $_POST['topic'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['type'] ) : "";

		if($type == "contact"){
			$topic = isset( $_POST['topic'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['topic'] ) : "";
			$userName = isset( $_POST['firstname'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['firstname'] ) : "";
			$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['email'] ) : "";
			$phone = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['phone'] ) : "";
			$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

			$completeMessage .= "Topic : ".$topic."<br>"
			."Name : ".$userName."<br>"
			."Email : ".$senderEmail."<br>"
			."Phone : ".$phone."<br>"
			."Message : ".$message."<br>";


		}else{
			$userName = isset( $_POST['firstname'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['firstname'] ) : "";
			$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['email'] ) : "";
			$phone = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['phone'] ) : "";
			$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

			$completeMessage .= ""
			."Name : ".$userName."<br>"
			."Email : ".$senderEmail."<br>"
			."Phone : ".$phone."<br>"
			."Message : ".$message."<br>";
		}

// If all values exist, send the email
if ( $userName && $senderEmail && $completeMessage) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $userName . " <" . $senderEmail . ">";
  $msgBody = " Message: " . $completeMessage . "";

  $success = mail( $recipient, $headers, $msgBody );

  //Set Location After Successsfull Submission
  
   $response = "<div class=title'>Thanks for contact us !</div>
				<h1>We will reachout to <br> you <span>as soon as possible</span></h1>";	
}

else{
	//Set Location After Unsuccesssfull Submission
  	$response = "<div class=title'>opps! We are sorry</div>
				<h1>We are here as an error <br>  <span>Unable to Submit Form</span></h1>";	

}

?>
    <section class="page-title" style="background-image:url(images/background/8.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Form <span>Page</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Pages</li>
					<li>response</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Error Section -->
	<section class="error-section">
		<div class="auto-container">
			<div class="inner-section">
				<div class="left-error"></div>
				<div class="right-error"></div>
<?php echo $response ?>
				

				<a href="home" class="theme-btn btn-style-sixteen">Take me go back home <span class="fa fa-angle-right"></span></a>
			</div>
		</div>
	</section>
	<div>