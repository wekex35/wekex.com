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

$completeMessage = '<html><body>';
$completeMessage .= '<img src="http://css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
$completeMessage .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

$type = isset( $_POST['topic'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['type'] ) : "";
$userName = isset( $_POST['firstname'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['firstname'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$phone = isset( $_POST['phone'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['phone'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

		if($type == "contact"){
			$topic = isset( $_POST['topic'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['topic'] ) : "";
			$completeMessage .= "<tr><td><strong>Topic :</strong> </td><td>" . $topic . "</td></tr>";
		}else{
			
		}

		$completeMessage .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" .$userName. "</td></tr>";
		$completeMessage .= "<tr><td><strong>Email:</strong> </td><td>" . $senderEmail . "</td></tr>";
		$completeMessage .= "<tr><td><strong>Phone :</strong> </td><td>" . $phone . "</td></tr>";
		$completeMessage .= "<tr><td><strong>Message :</strong> </td><td>" . $message . "</td></tr>";
		$completeMessage .= "</table>";
			$completeMessage .= "</body></html>";



// If all values exist, send the email
if ( $userName && $senderEmail && $completeMessage) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $userName . " <" . $senderEmail . ">";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
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