<?php 

// SHORTCODE
// PROMO OFFER CODE INPUT
function offercode_shortcode( $atts, $content = null ) {
	// REDIRECT IF PROMO CODE MATCHES
	if (strtolower($_GET['promo']) == "code1") {$promourl = "http://www.destination1.com";}
	if (strtolower($_GET['promo']) == "code2") {$promourl = "http://www.destination2.com";}
	if (strtolower($_GET['promo']) == "code3") {$promourl = "http://www.destination3.com";}
	
	header('Location: ' . $promourl);
	
	// PROMO ERROR MESSAGE
	if(!empty($_GET['promo'])) {$promoerror = 'Sorry, <span style="text-transform:uppercase;">"' . htmlspecialchars($_GET["promo"]) . '"</span> is not valid.';}
	
	// DISPLAY INPUT FORM
	return '<div style="width:290px;margin:0 auto;color:red;text-align:center;">' . $promoerror . '<form name="promo" action="" method="get" target="_blank"><input type="text" name="promo" placeholder="Enter Code" style="width:60%;text-transform:uppercase;"> <input type="submit" value="Go">	</form></div>';
	
}
add_shortcode( 'offercode', 'offercode_shortcode' );

?>