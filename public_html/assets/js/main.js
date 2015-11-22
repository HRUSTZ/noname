function notice(text){
  var d=document.createElement('div');
  d.innerHTML = text;
  d.classList.add('notice');
  d.classList.add('shadow');
  document.body.appendChild(d);
  setTimeout( function() { 
  document.body.removeChild(d);
  } , 8000)
}

(function( window ){
  'use strict';
  var body = document.body,
      mask = document.createElement("div"),
      toggleSlideTop = document.querySelector( ".nav-btn-login" );
  mask.className = "mask";

  if(toggleSlideTop){
    toggleSlideTop.addEventListener("click", function(){
      body.classList.add("open");
      document.body.appendChild(mask);
    });
  }

  mask.addEventListener( "click", function(){
    body.classList.remove("open");
    document.body.removeChild(mask);
  });
  
  [].slice.call(document.querySelectorAll(".close")).forEach(function(el,i){
    el.addEventListener( "click", function(){
      body.classList.remove("open");
      document.body.removeChild(mask);
    });
  });
})(window);

(function(){
  var body = document.body,
      openLoginMenu = document.querySelector(".nav-btn-user");
  if(openLoginMenu){
    openLoginMenu.addEventListener("click", function(){
      body.classList.toggle("open-login-menu");
    });
  }
}(window));