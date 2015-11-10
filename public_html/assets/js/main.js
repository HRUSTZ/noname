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
  } , 2000)
}
