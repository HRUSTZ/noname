window.onload = function() { 
  var dropForm = document.getElementById('drop-form');
  var openLoginForm = document.getElementsByClassName('signin-btn')[0];
  
  dropForm.style.display = 'none';
  openLoginForm.addEventListener('click', openLogin);
  
  function openLogin() {
    dropForm.style.display == 'none' ? dropForm.style.display = 'flex' : dropForm.style.display = 'none';
  }
}

function notice(text){
  var d=document.createElement('div');
  d.innerHTML = text;
  d.classList.add('notice');
  document.body.appendChild(d);
  
  setTimeout( function() { 
  document.body.removeChild(d)
  } , 11000)
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