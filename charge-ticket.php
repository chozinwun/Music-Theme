<?
	include_once('stripe/lib/Stripe.php');
	
	if ($_SERVER['HTTP_HOST'] == 'tammybattle.com') {
		Stripe::setApiKey("sk_live_P6OMmz1yCkmJYaMJYXWjN0xl");
	} else {
		Stripe::setApiKey("sk_test_tAmYgg13bnvRicBopQwmZX47");
	}
	
	$token = $_POST['stripeToken'];
	$amount = str_replace('$','',$_POST['donation']) * 100;
	$description = $_POST['name'] . " - " . $_POST['quantity'] . " Tickets (" . $_POST['donation'] . ") - " . $_POST['phone'] . " " . $_POST['email'] . " Emergency Live";
	
	// create the charge on Stripe's servers - this will charge the user's card
	$charge = Stripe_Charge::create(array(
	  "amount" => $amount,
	  "currency" => "usd",
	  "card" => $token,
	  "description" => $description
	  )
	);

	$message  = '<p>Thank you for your support of this event. Here is your official receipt for "Emergency Live." You may bring a copy of this email with you on April 6th.</p>';
	$message .= '<h2>Event Details</h2>';
	$message .= '<p>"Emergency Live" Solo Concert by Tammy Battle<br />April 6th, 2013 6:30PM<br />International Civil Rights Center &amp; Museum<br />134 S. Elm Street<br />Greensboro, NC</p>';	
	$message .= '<p>Doors open at 6:00PM</p>';
	$message .= '<p>Parking is available on the street for Free or in the Davie Street parking deck located at the corner of February One Place and Davie Street.</p>';	
	$message .= '<h2>Receipt</h2>';
	$message .= '<p>Event: Emergency Live' . 
		'<br />Name: ' .$_POST['name'] . 
		'<br />Quantity: ' . $_POST['quantity'] . ' Tickets '.
		'<br />Total Paid: ' . $_POST['donation'] . 
		'<br />Contact: ' . $_POST['phone'] . ' ' . $_POST['email'] . '</p>';
		
	$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
	$headers .= "Reply-To: booking@tammybattle.com\r\n";
	$headers .= "CC: booking@tammybattle.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$mail = mail($_POST['email'],'Receipt for Emergency Live',$message,$headers);
	
	if ($mail) {
		echo json_encode(array(
			'success' => true,
			'message' => 'Thank you for your support. An email receipt has been sent to ' . $_POST['email']
		));
	}
	
?>