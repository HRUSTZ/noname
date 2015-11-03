(function( window ){

  $('.user-signin-btn').on('click', function(){    
      $('.menu-user').slideToggle("slow");
  });

  $('.signin-btn').on('click', function(){    
      $('.drop-form').slideToggle("slow");
  });

})( window );

function notice(text){
  var d=document.createElement('div');
  var mask=document.createElement('div');
  d.innerHTML = text;
  d.classList.add('notice');
  mask.classList.add('mask');
  document.body.appendChild(d);
  document.body.appendChild(mask);
  
  setTimeout( function() { 
  document.body.removeChild(d);
  document.body.removeChild(mask);
  } , 5000)
}



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