window.onload = function() { 
  var dropForm = document.getElementById('drop-form');
  var openLoginForm = document.getElementsByClassName('open-login-form')[0];
  
  dropForm.style.display = 'none';
  openLoginForm.addEventListener('click', openLogin);
  
  function openLogin() {
    dropForm.style.display == 'none' ? dropForm.style.display = 'flex' : dropForm.style.display = 'none';
  }
}
//(function(window){
/*(function( window ){
 
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
 
})( window );*/