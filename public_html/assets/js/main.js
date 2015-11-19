/*(function( window ){

  $('.user-signin-btn').on('click', function(){    
      $('.menu-user').slideToggle("slow");
  });

  $('.nav-btn-login').on('click', function(){    
      $('.drop-form').slideToggle("slow");
  });

})( window ); */

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
  } , 2000)
}




(function( window ){
 
    'use strict';

    $('.user-signin-btn').on('click', function(){    
      $('.menu-user').slideToggle("slow");
  });
 
    var body = document.body,
        mask = document.createElement("div"),
        toggleSlideTop = document.querySelector( ".nav-btn-login" );
    mask.className = "mask";
 
    /* slide menu top */
    toggleSlideTop.addEventListener( "click", function(){
        body.classList.add("open");
        //classie.add( body, "smt-open" );
        document.body.appendChild(mask);
        //activeNav = "open";
    } );
 

mask.addEventListener( "click", function(){
        body.classList.remove("open");
        //activeNav = "";
        document.body.removeChild(mask);
    } );

    
    [].slice.call(document.querySelectorAll(".close")).forEach(function(el,i){
        el.addEventListener( "click", function(){
            body.classList.remove("open");
            //activeNav = "";
            document.body.removeChild(mask);
        } );
    });
 
})( window );