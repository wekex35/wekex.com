<?php
// header('Content-type:Application/json');


$route = true;
$requestPath =  $_SERVER['REQUEST_URI'];

//routes
$baseurl = "/php/";


$path = explode("/", $requestPath);
// array_splice($path, 1, 1); 

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>WEKEX | <?php echo  strtoupper (strlen($path[1]) < 1? "Home": $path[1] ); ?></title>
<meta name="Description" content="We are here to manage your
Complete IT World with experience">
<meta name="Keywords" content="Boisar,Website Development, Android Development, IOS development, In boisar, IOT, Circuit designing,e commerce, ai/ml solutions ">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-76323205-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-76323205-7');
</script>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header header-style-five five-alternate">
    	
		<?php 
			if ($path[1] != "home" && strlen($path[1]) > 0) {
		      include 'header.php';
			 }
		?>
		
    </header>


<?php 

switch ($path[1]) {
	case 'contact':
		include 'contact.php'; break;

	case 'services':
		include 'services.php'; break;

	case 'about':
		include 'about.php'; break;

	case 'sendmail':
		include 'sendemail.php'; break;
	
	default:
		if ($path[1] != "home" && strlen($path[1]) > 0) {
			include 'not-found.php';
			
		}else{
			include 'home.php';
		}
		break;
}
	include 'footer.php';
if ($path[1] != "home" && strlen($path[1]) > 0 ) {

?>

	
</div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/main.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
  


<?php 

}
	
?>
  
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57622e17eb544cb33e8dbeae/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
  
  