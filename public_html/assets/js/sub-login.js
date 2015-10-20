
(function( window ){
 
  'use strict';

  var body = document.body,
      mask = document.createElement("div"),
      showBlockLogin = document.querySelector( ".login" ),
      activeNav;

  mask.className = "mask";

  showBlockLogin.addEventListener( "click", function(){
      classie.add( body, "show-login" );
      document.body.appendChild(mask);
      activeNav = "show-login";
  } );

  mask.addEventListener( "click", function(){
      classie.remove( body, activeNav );
      activeNav = "";
      document.body.removeChild(mask);
  } );
 

  [].slice.call(document.querySelectorAll(".close-menu")).forEach(function(el,i){
      el.addEventListener( "click", function(){
          classie.remove( body, activeNav );
          activeNav = "";
          document.body.removeChild(mask);
      } );
  });
 
})( window );