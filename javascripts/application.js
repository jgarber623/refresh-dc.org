var REFRESH = REFRESH || {
	init: function() {
		REFRESH.loadTweets();
	},
	
	loadTweets: function() {
		var $container = $( "section.tweets" ),
			out = "";
		
		$.ajax({
			dataType: "json",
			success: function( data ) {
				for ( i = 0; i < data.length; i++ ) {
					out += '<li class="hentry"><p class="entry-content"><a href="http://twitter.com/refreshdc/status/' + data[i].id + '" rel="bookmark">' + data[i].text + '</a></p></li>';
				}

				$container.append( '<ol class="hfeed">' + out + '</ol>' ).fadeIn( "slow" );
			},
			type: "get",
			url: "http://twitter.com/status/user_timeline/refreshdc.json?count=3&callback=?"
		});
	}
};

$().ready( REFRESH.init );