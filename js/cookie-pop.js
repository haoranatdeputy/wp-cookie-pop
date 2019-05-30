/* global cookie_pop_text */
(function ( $ ) {

    'use strict';
    if ( Cookies.get('gdpr') !== 'accepted') {
  
        $('body').append(
    	'<div class="cookie-pop new-branding"><div class="container"><div class="row"><div class="col-xs-12 col-sm-6 col-lg-7">' + cookie_pop_text.message + ' <a target="blank" href="'+cookie_pop_text.url+'">' + cookie_pop_text.more + '</a> </div><div class="col-xs-12 col-sm-4"><button id="accept-cookie" class="btn btn-blue">' + cookie_pop_text.button + '</button></div></div></div></div>'
      
    	);
    	$('body').css('padding-bottom', $('.cookie-pop').outerHeight());
  
        $( '#accept-cookie' ).click(function () {
  
            Cookies.set( 'gdpr', 'accepted');
            $( '.cookie-pop' ).remove();
            $('body').css('padding-bottom', 0);
  
        });
  
    }
  //console.log(Cookies.get('gdpr'));
}( jQuery ) );