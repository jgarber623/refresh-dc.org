<?php include( "includes/common.php" ); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Refresh DC | The best and brightest new media professionals in the DC metro area</title>
	<meta name="description" content="Web Designers, Web Developers, and other New Media Professionals gathering to create a community based in Washington, DC." />
	<meta name="keywords" content="refresh, refreshdc, washington dc developers, dc designers, washington dc web group, web designers, web developers, information architects, web professionals, washington dc, district of columbia, northern virginia, maryland" />
	<meta name="author" content="Refresh DC" />
	<meta name="robots" content="all" />
	<link rel="alternate" type="application/rss+xml" href="http://refresh-dc.org/forum/?Feed=RSS2" title="Refresh DC forum RSS feed" />
	<link rel="alternate" type="application/atom+xml" href="http://refresh-dc.org/forum/?Feed=Atom" title="Refresh DC forum Atom feed" />
	<link rel="alternate" type="application/rss+xml" href="http://feeds.feedburner.com/refreshingcities" title="Refreshing Cities RSS feed" />
	<link rel="alternate" type="application/rss+xml" href="http://jobmatchbox.jobthread.com/refreshdc/feeds/rss20" title="Refreshing Jobs RSS feed" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/screen.css" />
	<!--[if lte IE 7]><link rel="stylesheet" type="text/css" media="screen" href="css/ie.css" /><![endif]-->
	<link rel="shortcut icon" type="image/ico" href="http://refresh-dc.org/favicon.png" />
	<script type="text/javascript" src="scripts/jquery-1.2.1.js"></script>
	<script type="text/javascript" src="scripts/jquery.form-1.20.js"></script>
	<script type="text/javascript" src="scripts/refresh.js"></script>
	<script type="text/javascript" src="/mint/?js"></script>
</head>
<body id="home" class="<?php echo $headers[ rand( 0, count( $headers ) - 1 ) ]; ?>">
	
	<p id="jump-links" class="alt"><strong>Welcome to Refresh DC!</strong> Jump to <a href="#content-wrap">page content</a>.</p>
	<div id="wrap">
		<div id="header">
			<h1 id="logo"><a href="/"><img src="images/logo.png" alt="Refresh DC" /></a></h1>
			<ul id="nav">
				<li><a href="/" class="current" title="Welcome!">Home</a></li>
				<li><a href="#about" title="What we're all about">About</a></li>
				<li><a href="/forum/" title="Interact with like-minded individuals">Forum</a></li>
				<li><a href="#signup" title="Sign up for our mailing list">Join</a></li>
				<li><a href="#contribute" title="How you can spread the good word">Contribute</a></li>
			</ul>
			<div id="cities">
				<h4><a href="http://refreshingcities.org/" title="Click for more refreshing cities">Refreshing Cities</a></h4>
				<div>
					<ul class="first">
						<?php echo buildRefreshingCities(); ?>
					</ul>
					<p><a href="http://www.feedburner.com/" class="feedburner-link" title="Powered by FeedBurner"><img src="images/icon-feedburner.gif" alt="FeedBurner icon" /></a> <a href="http://feeds.feedburner.com/refreshingcities" class="feed-link" title="Refreshing Cities RSS feed">Refreshing Cities feed</a></p>
				</div>
			</div>
		</div>
		<hr />
		<div id="content-wrap" class="clear">
			<div id="content" class="col">
				<div id="about">
					<h2>Welcome to Refresh DC</h2>
					<p>Refresh is a community of web designers, developers, and other new media professionals working together to refresh the creative, technical, and professional aspects of their trades in the Washington, DC, area.</p>
					<p><em>Our goal is simple:</em> bring together the best and brightest new media professionals in the DC metro area so that we may learn from one another. Our industry is too rich for any one person to "know it all." That's where we come in.</p>
				</div>
				
				<div id="flickr-wrap">
					<h3>See it for yourself with a little <a href="http://flickr.com/groups/refresh-dc/pool/" class="refreshr" title="Click to view more Refresh DC photos">Refresh<span>r</span></a></h3>
					<p class="more"><a href="http://flickr.com/groups/refresh-dc/pool/">view all photos</a></p>
					<ul class="clear">
						<?php include( "includes/flickr.php" ); ?>
					</ul>
					<div id="flickr-loadr"><img src="images/loading.gif" alt="" /></div>
				</div>
				
				<div id="signup">
					<h3>Email Signup</h3>
					<form method="post" action="http://refreshdc.cmail1.com/s/329954/" id="form-signup" class="clear">
						<p>Stay updated about what's happening with Refresh DC. Don't worry about us giving away your contact information to the bad guys. We will guard your email address like ancient Incan gold.</p>
						<ul>
							<li><label for="signup-email" class="alt">Email address:</label><input type="text" name="cm-329954-329954" id="signup-email" class="text" /></li>
							<li><input type="submit" name="submit" id="signup-submit" value="Signup" /></li>
						</ul>
						<p id="response"><!-- --></p>
					</form>
				</div>
				
				<div id="contribute">
					<h3>Lend a hand!</h3>
					<p>Want to help plan a meeting, sponsor an event, or present on a topic you're passionate about?  Drop us a line at <span class="email">contact [at] refresh-dc [dot] org</span> and tell us all about it!</p>
					<p><em>Sponsor an event!</em> Refresh DC is always interested in hearing from potential sponsors to either host an event or provide refreshments. If you or your organization would like to learn more about sponsoring an event, please visit our <a href="http://support.refresh-dc.org">support and sponsor website</a> for all the details and upcoming meeting info or contact us at <span class="email">contact [at] refresh-dc [dot] org</span>.</p>
				</div>
			</div>
			<hr />
			<div id="sidebar" class="col">
				<h2>Our next meeting</h2>
				<p id="bug-hcal"><a href="http://feeds.technorati.com/events/http://refresh-dc.org/" title="Add this event to your calendar"><img src="images/icon-hcal.gif" alt="hCal microformat icon" /></a></p>
				<div class="vevent">
					<dl>
						<dt>When:</dt>
							<dd>
								<p><abbr class="dtstart"><span>Thursday, July 22, 2010</span> 7:00 PM</abbr> &ndash; <abbr class="dtend">9:00 PM</abbr></p>
							</dd>
						<dt>Where:</dt>
							<dd class="vcard">
								<address class="adr">
									<em class="fn org">CDIA</em> (<a href="http://upcoming.yahoo.com/maps/6589164">map &amp; parking</a>)<br />
									<abbr class="geo">
										<span class="street-address">1055 Thomas Jefferson Street NW</span><br />
										<span class="locality">Washington</span>, <abbr class="region" title="DC">DC</abbr> <span class="postal-code">20007</span>
									</abbr>
								</address>
							</dd>
						<dt class="summary">No Boring Content Allowed!</dt>
							<dd class="description">
								<p><a href="http://stephaniehay.com">Steph Hay</a> will discuss ways in which web folks can write compelling, credible content that piques interest and encourages action from readers. Refreshees will leave with tips to elevate their content game &mdash; whether they're aiming to more successfully write dynamic resumes and cover letters, describe their work in creative portfolios, or convey value to gain one more paying subscriber.</p>
							</dd>
					</dl>
					<p class="upcoming-link">Register to attend on <a href="http://upcoming.yahoo.com/event/6589164" class="url">Upcoming</a></p>
					<p>&nbsp;</p>
					<dl>
						<dt>This month's sponsor:</dt>
							<dd>
								<p class="sponsor"><a title="CustomInk.com" href="http://www.customink.com/"><img alt="CustomInk.com" src="images/sponsor-customink.png" /></a></p>
							</dd>
						<dt>Venue Sponsor:</dt>
							<dd>
								<p class="sponsor"><a title="CDIA" href="http://www.cdiabu.com/" alt="CDIA"><img src="images/sponsor-cdiabu.gif"></a></p>
							</dd>
						<dt>E-Mail sponsor:</dt>
							<dd>
								<p class="sponsor"><a title="Campaign Monitor" href="http://campaignmonitor.com/"><img alt="Campaign Monitor" src="images/sponsor-campaignmonitor.gif" /></a></p>
							</dd>
					</dl>
				</div>
			</div>
		</div>
		<hr />
		<div id="footer-wrap">
			<div id="footer" class="clear">
				<div id="forum-recent" class="mini">
					<h3>Recent Forum Posts</h3>
					<ul>
						<?php echo buildListFromRSS( "http://refresh-dc.org/forum/?Feed=RSS2" ); ?>
					</ul>
					<p><a href="/forum/?Feed=RSS2" class="feed-link" title="Refresh DC forum RSS feed">Refresh DC forum feed</a></p>
				</div>
				<div id="forum-login" class="mini">
					<h3>Forum Login</h3>
					<form method="post" action="/forum/people/" id="form-forum-login">
						<input type="hidden" name="ReturnUrl" value="http%3A%2F%2Frefresh-dc.org%2Fforum%2F" />
						<input type="hidden" name="PostBackAction" value="SignIn" />
						<ul>
							<li><label for="forum-user" class="alt">Username:</label><input type="text" name="Username" id="forum-user" class="text" value="username" /></li>
							<li><label for="forum-pass" class="alt">Password:</label><input type="password" name="Password" id="forum-pass" class="text" value="password" /></li>
							<li><label for="forum-remember"><input type="checkbox" name="RememberMe" id="forum-remember" value="1" /> Remember me</label></li>
							<li><input type="submit" name="btnSignIn" id="forum-submit" value="Proceed" /></li>
						</ul>
					</form>
					<ul>
						<li><a href="/forum/people/?PostBackAction=PasswordRequestForm">Forgot your password?</a></li>
						<li><a href="/forum/people/?PostBackAction=ApplyForm">Apply for membership</a></li>
					</ul>
				</div>
				<div id="jobs" class="mini last">
					<h3>Refreshing Jobs</h3>
					<ul>
						<?php echo buildListFromRSS( "http://socialmatchbox.jobthread.com/refreshdc/feeds/rss20" ); ?>
					</ul>
					<p><a href="http://jobmatchbox.jobthread.com/refreshdc/feeds/rss20" class="feed-link" title="Refreshing Jobs RSS feed">Refreshing Jobs feed</a></p>
					<p id="jobmatchbox">(powered by <a href="http://socialmatchbox.jobthread.com/refreshdc/">Jobmatchbox</a>)</p>
				</div>
			</div>
		</div>
		<hr />
		<div id="license">
			<p>Some rights reserved. This site and its content are licensed under a <a href="http://creativecommons.org/licenses/by-sa/2.5/" rel="license" title="View this site's license">Creative Commons Attribution-ShareAlike 2.5 License</a>.</p>
		</div>
	</div>
	
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		try {
			var pageTracker = _gat._getTracker("UA-8682944-1");
			pageTracker._trackPageview();
		} catch(err) {}
	</script>

</body>
</html>