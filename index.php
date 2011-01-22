<?php
	require_once( "includes/magpie/rss_fetch.inc" );
	
	$string = "";
	$url = "http://feeds.feedburner.com/refreshingcities";
	$rss = fetch_rss( $url );
	sort( $rss->items );
	
	foreach ( $rss->items as $item ) {
		$href = $item['link'];
		$title = $item['title'];	
		$text = split( "Refresh ", $title );
		$string .= '<a href="' . $href . '" title="' . $title . '">' . $text[1] . '</a>, ';
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Refresh DC: Developing and sharing knowledge.</title>
	<meta name="description" content="Web Designers, Web Developers, and other New Media Professionals gathering to create a community based in Washington, DC." />
	<meta name="keywords" content="refresh, refreshdc, washington dc developers, dc designers, washington dc web group, web designers, web developers, information architects, web professionals, washington dc, district of columbia, northern virginia, maryland" />
	<meta name="author" content="Refresh DC" />
	<meta name="robots" content="all" />
	<meta name="geo.region" content="US-DC" />
	<meta name="geo.placename" content="Washington DC" />
	<meta name="geo.country" content="US" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	<link rel="icon" type="image/png" href="http://refresh-dc.org/favicon.png" />
	<link rel="alternate" type="application/rss+xml" title="Refreshing Cities RSS feed" href="http://feeds.feedburner.com/refreshingcities" />
	<script type="text/javascript" src="scripts/common.js"></script>
	<script type="text/javascript" src="/mint/?js"></script>
</head>

<body>
	
	<div id="wrapper">
		
		<div id="content">
			<h1>Refresh DC</h1>
			
			<h2>What is Refresh?</h2>
			<p>Refresh is a community of web designers, developers, and other new media professionals working together to refresh the creative, technical, and professional aspects of their trades in the Washington, DC, area.</p>
			<p><em>Our goal is simple:</em> bring together the best and brightest new media developers in the DC metro area so that we may learn from one another. Our industry is too rich for any one person to "know it all." That's where we come in.</p>
			<p>Sounds like fun, right? <a href="#signup">Sign up for our mailing list</a> so we can keep you up to speed. You can also chat it up in our <a href="/forum/">forums</a>.</p>

			<hr />
			
			<h2>How can I help?</h2>
			<p>Want to help plan a meeting or present on a topic you're passionate about? Drop us a line at <span class="email-link">contact [at] refresh-dc [dot] org</span> and tell us all about it!</p>
			<p>Help spread the word by <em>blogging about us</em>. If you have a blog (and who doesn't?), give us a mention, link to us, and tell the world why you think they should care about Refresh DC.</p>

			<hr />
			
			<div id="signup">
				<h2>Email Signup</h2>
				<p>Stay updated about what's happening with Refresh DC. Don't worry about us giving away your contact information to the bad guys. We will guard your email address like ancient Incan gold.</p>
				<form action="http://refrechdc.cmail1.com/.aspx/s/29353/" method="post" id="signup-form" onsubmit="return validate(this)">
					<label for="email">Email:</label> <input type="text" name="cm-29353-29353" id="email" /> <input type="submit" name="submit" id="submit" value="Signup" />
				</form>
			</div>
		</div>

		<hr />
		
		<div id="sidebar">
			<div id="meetings" class="vevent">
				<h2>Next Meeting</h2>
				<p class="emphasis">
					<abbr class="dtstart" title="20070215T190000Z">Thursday, February 15th<br />
					7:00pm</abbr> - <abbr class="dtend" title="20070215T203000Z">8:30pm</abbr>
				</p>
				<p class="location">
					The Motley Fool offices (<a href="http://lookleap.com/maps.google.com/a118/">map</a>)<br />
					2000 Duke Street<br />
					Alexandria, VA 22314
				</p>
				<p><span class="emphasis">Metro:</span> King Street station on Yellow/Blue lines</p>
				<p class="description"><span class="emphasis">Presentation:</span> <a href="http://www.undercovergeek.net/">Justin Thorp</a>, web application developer currently contracting with the <a href="http://www.loc.gov/">Library of Congress</a>, will be giving a presentation on accessibility titled &ldquo;<span class="summary">Understanding The Real World Wide Web and Why Web Accessibility Is Crucial</span>.&rdquo; Justin will be covering different ways in which people use the Web, what you can do to increase the accessibility of your site, and how <a href="http://www.w3.org/TR/WAI-WEBCONTENT/"><abbr title="Web Content Accessibility Guidelines">WCAG</abbr></a> fits into it all.</p>
				<p class="emphasis"><a href="http://upcoming.org/event/139624/" class="url">Register to attend</a> on upcoming.org!</p>
			</div>
		</div>

		<hr />
		
		<div id="cities">
			<p><a href="http://www.refreshingcities.org/">Refreshing Cities</a>: <?php echo $string; ?>...</p>
			<p id="feed-info"><a href="http://feeds.feedburner.com/refreshingcities" title="Refreshing Cities RSS feed">Refreshing Cities feed</a> powered by <a href="http://www.feedburner.com/"><img src="images/logo-feedburner.gif" alt="FeedBurner" /></a></p>
		</div>
		
		<div id="license">
			<p><img src="images/logo-cc.gif" alt="Creative Commons" /> <a href="http://www.creativecommons.org/" title="Learn more about Creative Commons">Some rights reserved</a>. This site and its content are licensed under a <a href="http://creativecommons.org/licenses/by-sa/2.5/" rel="license" title="View this site's license">Creative Commons Attribution-ShareAlike 2.5 License</a>.</p>
		</div>
	
	</div>

</body>
</html>