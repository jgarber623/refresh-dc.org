var refresh = {
	flickr_page: 1,
	
	buildMailtos: function() {
		$( "span.email" ).wrap( '<a href="mailto:contact@refresh-dc.org"></a>' ).text( "contact@refresh-dc.org" );
	},
	
	attachLoginFormAction: function() {
		var form = $( "form#form-forum-login" ), inputs = $( "input.text", form );
		inputs.focus( function() {
			val = $( this ).val();
			$( this ).val( "" );
		}).blur( function () {
			( $( this ).val() == "" ) ? $( this ).val( val ) : "";
		});
	},
	
	attachFlickrAction : function() {
		var wrap = $( "div#flickr-wrap" ), loader = $( "div#flickr-loadr" ), refresher = $( "a.refreshr", wrap );
		refresher.click(
			function() {
				loader.show();
				refresh.getMorePhotos( wrap, refresher );
				return false;
			});
		loader.ajaxStop( function() { $( this ).hide(); } );
	},
	
	getMorePhotos : function( wrap, refresher ) {
		var container = $( "ul", wrap );
		refresh.flickr_page = refresh.flickr_page + 1;
		$.get( "includes/flickr.php", { page: refresh.flickr_page }, function( data ) {
			container.empty().append( data );
			if ( $( "li", container ).length < 5 ) refresher.unbind( "click" );
		});
	},
	
	buildCitiesDropdown: function() {
		var container = $( "div#cities" ), clicker = $( "h4 a", container ), dropper = $( "div", container );
		clicker.toggle(
			function() {
				dropper.show();
				clicker.addClass( "close" );
			},
			function() {
				dropper.hide();
				clicker.removeClass( "close" );
			}
		);
	},
	
	attachSignupFormAction : function() {
		var form = $( "form#form-signup" ), button = $( "input#signup-submit" ), response_container = $( "p#response" );
		var opts = {
			url: "includes/form.php",
			beforeSubmit: function() {
				response_container.hide().empty().removeClass();
				button.attr( "disabled", "disabled" ).after( '<span id="form-loadr"><img src="images/loading.gif" alt="" /></span>' );
			},
			success: function( responseText ) {
				button.removeAttr( "disabled" );
				$( "span#form-loadr" ).remove();
				if ( responseText == "success" ) {
					$( "input.text", form ).clearInputs();
					response_container.addClass( "success" ).append( "Thanks for signing up for the Refresh DC mailing list! A confirmation has been sent to the address you provided." ).fadeIn( "slow" );
				} else if ( responseText == "failure" ) {
					response_container.addClass( "failure" ).append( "Uh oh! Something went wrong in the tubes! Please double- check that you've entered your email address properly." ).fadeIn( "slow" );
				}
			}
		};
		form.ajaxForm( opts );
	},
	
	init: function() {
		refresh.buildMailtos();
		refresh.attachLoginFormAction();
		refresh.attachFlickrAction();
		refresh.buildCitiesDropdown();
		refresh.attachSignupFormAction();
	}
}

$().ready( refresh.init );