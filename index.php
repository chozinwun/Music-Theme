<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */ 
?>

<html>
<head>
	<title>Tammy Battle Presents "Emergency Live" at The International Civil Rights Center &amp; Museum, Greensboro, NC</title>
	<meta name="description" content="Singer-Songwriter Tammy Battle, known for her sincere praise & worship and soulful tones, will grace the stage in her first solo concert on April 6th, 2013. At 6:30PM, guests from North Carolina and beyond will join together in the International Civil Rights Center & Museum (Greensboro, NC) to witness history being made.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	
	<meta property="og:image" content="<?php bloginfo('template_url');?>/images/emergency-cover-save-the-date.jpg" />
	<meta property="og:site_name" content="Official Website of Tammy Battle"/>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<script type="text/javascript" src="https://js.stripe.com/v1/"></script>
	<? if ($_SERVER['HTTP_HOST'] == 'tammybattle.com') : ?>
	<script type="text/javascript">Stripe.setPublishableKey('pk_live_x7VlinZ32wexJeOqyuvXbEv9');</script>
	<? else: ?>
	<script type="text/javascript">Stripe.setPublishableKey('pk_test_KDC771WfdObjEC2TN7jHP3FE');</script>
	<? endif; ?>
</head>
<body>
	<section id="navigation">
		<div class="wrap">
			<div class="brand"><a href="#home"><img src="<?php bloginfo('template_url');?>/images/brand.png" /></a></div>
			<ul class="nav">
				<li><a href="#home" class="selected">Home</a></li>
				<li><a href="#concert">Concert</a></li>
				<!--<li><a href="#tickets">Tickets</a></li>-->
				<li><a href="#bio">Bio</a></li>
				<li><a href="#social">Listen</a></li>
				<li><a href="#booking">Contact</a></li>
			</ul>
		</div>
	</section>
	<section id="home">
		<div class="wrap">
			<div id="stamp"><img src="<?php bloginfo('template_url');?>/images/emergency-stamp.png" /></div>
			<p id="live-concert">LIVE CONCERT</p>
			<p id="details">April 6th, 2013 | 6:30PM<br />
				International Civil Rights Center &amp; Museum
				<!--<small class="tiny">Tickets Required (Minimum donation of $5)</small>-->
			</p>
			<a class="btn" id="get-ticket" href="#concert">Buy Ticket</a>
		</div>
	</section>
	<section id="concert" class="section">
		<header><div class="wrap"><h1>Make History</h1></div></header>
		<div class="wrap">
			<span class="span4 right" style="margin-right: 15px;">
				<h2>Reserve Your Seat</h2>
				<p>Due to limited seating, this is a ticketed event. No tickets will be sold at the door.</p>
				<p class="gold-text">To reserve your seat, please enter a minimum donation of $5/ticket. Contributions in excess of $5 will be applied toward final production costs.</p>
				<form id="ticket-form" action="<?php bloginfo('template_url');?>/charge-ticket.php" method="post">
					<ul class="form">
						<li><label class="space">Contact Information</label><input type="text" name="name" class="full" placeholder="First & Last Name" /></li>
						<li><input type="text" name="email" class="full" placeholder="E-mail" /></li>
						<li><input type="text" name="phone" class="full" placeholder="Phone" /></li>
						<li><label class="space"># of Tickets</label>
							<select id="quantity" class="full" name="quantity">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</li>
						<li><label class="space">Payment Information</label><input type="text" class="full" name="donation" placeholder="Donation (Minimum $5)" /></li>
						<li><input type="text" class="card-number full" name="card" placeholder="Credit Card (**** **** **** ****)" /></li>
						<li>
							<input type="text" name="exp_month" class="small card-expiry-month" placeholder="MM" /> <input type="text" name="exp_month" class="small card-expiry-year" placeholder="YY" />
							<input type="text" name="cvc" class="small card-cvc" placeholder="CVC" /> <span class="lock"><img src="<?php bloginfo('template_url');?>/images/padlock.png" width="24" /> <a href="#booking">Help?</a></span>
						</li>
					</ul>
					<input type="submit" class="btn full space" id="buy-ticket" value="Buy Ticket" />
					<div class="payment errors"></div>
					<div class="payment success"></div>
				</form>
			</span>
			<div class="span4 left">
				<h2>Soulful Evening</h2>
				<p>Singer-Songwriter Tammy Battle, known for her sincere praise &amp; worship and soulful tones, will grace the stage in her first solo concert on April 6th, 2013.</p>
				<p>At 6:30PM, guests from North Carolina and beyond will join together in the International Civil Rights Center &amp; Museum (Greensboro, NC) to witness history being made.</p>
				<p>During this "red-carpeted event," guests will enjoy original songs set to soulful, acoustic-pop melodies, led by Tammy Battle, area artists and musicians.</p>
			</div>
			<div class="span3">
				<p>&nbsp;</p>
				<h2>Historic Venue</h2>
				<p>International Civil Rights Center &amp; Museum<br />134 S. Elm Street<br /> Greensboro, NC</p>
				<h3>Parking</h3>
				<p>Parking is available in the Davie Street Parking Deck on the corner of Davie Street and February One Place, located across the street from the museum.</p>
				<p><a id="civil-logo" href="http://sitinmovement.org" target="_blank"><img src="<?php bloginfo('template_url');?>/images/civil-rights-museum-logo.png" height="200" align="left" style="margin-right: 20px; margin-bottom: 10px; margin-top: 10px;" /></a></p>
			</div>
			<div class="clear"></div>
		</div>
	</section>
	<section id="bio" class="section">
		<header><div class="wrap"><h1>Bio</h1></div></header>
		<div class="wrap">
			<div class="span5">
				<p>A songwriter at heart, Tammy Battle has written and composed numerous songs for churches and individuals in an attempt to enhance their understanding and relationship with God. She has been gifted with a unique ability to write music that doesn't discriminate, but reaches people of various backgrounds and serves as a tool of comfort and healing.</p>
			
				<p>Growing up in a musical family where her father played organ, mother sang and brothers played whatever instruments they could find, home was a sort of musical playground and an obvious source of musical influence. Decorated with keyboards, amps, an organ, mics and speakers, it was easy for Tammy to discover music at an early age and carve out her special niche. Although it was expected for her to follow certain instruments, a special connection was found with the piano. It was with the piano that she would discover a souful way to speak to hearts through music and help listener's hear God's thoughts about their situations.</p>
				<p>While singing with the piano always makes her day, a recent return back to the organ and new found love for the acoustic guitar is opening up a new freedom of expression sure to captivate new audiences.</p>
			</div>
		</div>
	</section>
	<section id="social" class="section">
		<header><div class="wrap"><h1>Listen</h1></div></header>
		<div class="wrap">
			<div class="span2 left">
				<p>It's always great to come to a concert and be able to sing along. While you wait for the concert, learn some of Tammy's music here and discover her unique style.</p>
				<p>See you on April 6th!</p>
			</div>
			<!--<div class="span3 left">
				<iframe width="560" height="300" src="http://www.youtube.com/embed/XFPjLnaf3Hg?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>-->
			<div class="span3 left">
				<iframe width="560" height="300" src="http://www.youtube.com/embed/y_N7uz9Zs2Y?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="clear"></div>
		</div>
	</section>
	<section id="booking" class="section">
		<header><div class="wrap"><h1>Contact</h1></div></header>
		<div class="wrap">
			<div class="span5 left">
				<h2>Booking</h2>
				<p>Tammy is now accepting engagements for the 2013 calendar year. If you are interested in booking Tammy, send your correspondence to <a href="mailto:booking@tammybattle.com">booking@tammybattle.com</a>. Please allow up to 48hrs for response.</p>
			</div>
			<div class="span4 right">
					<h2>Can't Buy Ticket</h2>
					<p>If you are experiencing issues purchasing a ticket, please email your issue along with daytime phone number to <a href="mailto:booking@tammybattle.com">booking@tammybattle.com</a>. Please allow up to 24hrs for response.</p>
				</div>
		</div>
	</section>
	<footer id="footer" class="section">
		<div class="wrap">
			<p>&copy; <?= date('Y');?> Tammy Battle. All rights reserved.</p>
		</div>
	</footer>
</body>


</html>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/html5shiv.js"></script>
<script>
$(document).ready(function() {

	$('input[name="phone"]').mask('(999) 999-9999');
	$('.card-number').mask('9999 9999 9999 9999');
	
	$('#navigation a').click(function() {
		$('a.selected').removeClass('selected');
		$(this).addClass('selected');
	});

	$('#ticket-form').submit(function(event) {
		event.preventDefault();
    // Disable the submit button to prevent repeated clicks
    $('#buy-ticket').prop('disabled', true);
    $('.payment.errors').text('').hide();
    
    if (verifyForm()) {
    
    	var r=confirm("Please confirm your purchase of " + $('#quantity').val() + " tickets for " + $('input[name="donation"]').val());
			if (r==true) {
			  Stripe.createToken({
		      number: $('.card-number').val(),
		      cvc: $('.card-cvc').val(),
		      exp_month: $('.card-expiry-month').val(),
		      exp_year: $('.card-expiry-year').val()
		    }, stripeResponseHandler);
			} else {
			  $('#buy-ticket').prop('disabled', false);
			}
			 
    } else {
	    $('#buy-ticket').prop('disabled', false);
    }
    
    // Prevent the form from submitting with the default action
    return false;
  }).find('input').on('keyup',function() { 
	  var output = 0;
  	
  	if ($(this).attr('name') == 'donation') {
  		donation = $(this).val().replace('$','');
  		
  		if (donation.toString().length) $(this).val('$' + donation);
  		else $(this).val('');
  	} else {
	  	if ($(this).val()) $(this).removeClass('error');
	  	else $(this).addClass('error');
	  }
  });
  
  $('#quantity').on('change', function() { 
	  $('input[name="donation"]').prop('placeholder','Donation (Minimum $' + $(this).val() * 5 + ')');
  });
  
  function stripeResponseHandler(status, response) {
	  if (response.error) {
	    // Show the errors on the form
	    $('.payment.errors').text(response.error.message).show();
	    $('#buy-ticket').prop('disabled', false);
	  } else {
	  	$('#buy-ticket').prop('value', 'Processing...');
	    var $form = $('#ticket-form');
	    // token contains id, last4, and card type
	    var token = response.id;
	    // Insert the token into the form so it gets submitted to the server
	    $form.append($('<input type="hidden" name="stripeToken" />').val(token));
	    // and submit
	    //$form.get(0).submit();
	    $.ajax({
			  url: $form.attr('action'),
			  type: "POST",
			  data: $form.serialize(),
			  dataType: "json"
			}).done(function(data) {
				if (data.success) {
			  	$('.payment.errors').hide();
			  	$('.payment.success').text(data.message).show();
			  	$('#buy-ticket').prop('value','Success!');
			  } else {
			  	$('#buy-ticket').prop('value','Buy Ticket');
				  $('.payment.errors').text('There was a problem processing your payment. Please try again.').show();
			  }
			});
	  }
	}
	
	function verifyForm() {
		var blanks = 0;
		var donation_low = false;
		
		$('#ticket-form input').each(function() { 
			if ($(this).val() == '') { 
				$(this).addClass('error'); 
				blanks++;
			}
			if ($(this).attr('name') == 'donation') {
				if ( ($(this).val().replace('$','') * 100) < (100 * (5 * $('#quantity').val() ) ) ) {
					donation_low = true;
				}
			}
		});
		
		if (blanks) {
			$('.payment.errors').text('Please check that each highlighted field is completed.').show();
			return false;
		} else if (donation_low) {
			$('.payment.errors').text('Donation must be at least $' + (5 * $('#quantity').val() )).show();
			return false;
		} else {
			return true;
		}
	}
  
  // Slider script
  function filterPath(string) {
  return string
    .replace(/^\//,'')
    .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
    .replace(/\/$/,'');
  }
  var locationPath = filterPath(location.pathname);
  var scrollElem = scrollableElement('html', 'body');
 
  $('a[href*=#]').each(function() {
    var thisPath = filterPath(this.pathname) || locationPath;
    if (  locationPath == thisPath
    && (location.hostname == this.hostname || !this.hostname)
    && this.hash.replace(/#/,'') ) {
      var $target = $(this.hash), target = this.hash;
      if (target) {
        var targetOffset = $target.offset().top;
        $(this).click(function(event) {
          event.preventDefault();
          $(scrollElem).animate({scrollTop: targetOffset}, 400, function() {
            location.hash = target;
          });
        });
      }
    }
  });
 
  // use the first element that is "scrollable"
  function scrollableElement(els) {
    for (var i = 0, argLength = arguments.length; i <argLength; i++) {
      var el = arguments[i],
          $scrollElement = $(el);
      if ($scrollElement.scrollTop()> 0) {
        return el;
      } else {
        $scrollElement.scrollTop(1);
        var isScrollable = $scrollElement.scrollTop()> 0;
        $scrollElement.scrollTop(0);
        if (isScrollable) {
          return el;
        }
      }
    }
    return [];
  }
 
});
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26588142-3']);
  _gaq.push(['_setDomainName', 'tammybattle.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>