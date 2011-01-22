/* ----- window.onload rewriting function ------------------------------- */
function addLoadEvent( func ) {
	var oldonload = window.onload;
	if ( typeof window.onload != "function" ) {
		window.onload = func;
	} else {
		window.onload = function() {
			oldonload();
			func();
		}
	}
}


/* ----- getElementsByClassName function -------------------------------- */
function getElementsByClassName( strClass, strTag, objContElm ) {
	strTag = strTag || "*";
	objContElm = objContElm || document;
	var objColl = ( strTag == '*' && document.all ) ? document.all : objContElm.getElementsByTagName( strTag );
	var arr = new Array();
	var delim = strClass.indexOf( '|' ) != -1  ? '|' : ' ';
	var arrClass = strClass.split( delim );
	for ( i = 0, j = objColl.length; i < j; i++ ) {
		var arrObjClass = objColl[i].className.split( ' ' );
		if ( delim == ' ' && arrClass.length > arrObjClass.length ) continue;
		var c = 0;
		comparisonLoop:
		for ( k = 0, l = arrObjClass.length; k < l; k++ ) {
			for ( m = 0, n = arrClass.length; m < n; m++ ) {
				if ( arrClass[m] == arrObjClass[k] ) c++;
				if ( ( delim == '|' && c == 1 ) || ( delim == ' ' && c == arrClass.length ) ) {
					arr.push( objColl[i] );
					break comparisonLoop;
				}
			}
		}
	}
	return arr;
}


/* ----- form validation functions -------------------------------------- */
function ValidEmail(strValue) {
	var valid = true;
	var regExp = /^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/;
	var regExp2 = /(\s+)|(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/;
	
	if ( (strValue.search(regExp)) == -1 || strValue.search(regExp2) != -1) valid = false;
	
	return valid;
}

function validate() {
	var returnValue = false;
	
	if ( !ValidEmail( document.getElementById("email").value ) ) {
		alert("Please enter a valid email address.");
		document.getElementById("email").focus();
	} else {
		returnValue = true;
	}
	
	return returnValue;
}


/* ----- rewrite email addresses ---------------------------------------- */
function attachEmail() {
	var elems = getElementsByClassName( "email-link", "span" );
	var i = elems.length;
	while ( i-- > 0 ) {
		var string = elems[i].innerHTML;
		var str = string.replace( " [at] ", "@" );
		str = str.replace( " [dot] ", "." );
		elems[i].innerHTML = '<a href="mailto:' + str + '" title="Send an email to ' + str + '">' + str + '</a>';
	}
}

addLoadEvent( attachEmail );