/*
	Javascript for the Whisper project
	Submitted for CSCI E-15 Dynamic Web Applications P2
	Found at p2.devinshackle.com
*/


/*menu handler
source - http://stackoverflow.com/questions/11533542/twitter-bootstrap-add-active-class-to-li*/
$(function(){
var url = window.location;
// Will only work if string in href matches with location
$('ul.nav a[href="'+ url +'"]').parent().addClass('active');

// Will also work for relative and absolute hrefs
$('ul.nav a').filter(function() {
    return this.href == url;
}).parent().addClass('active'); 
} 
});
 })