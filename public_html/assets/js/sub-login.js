window.onload = function() { 
  var subLogin = document.getElementById('sub-login');
  var btnLogin = document.getElementsByClassName('login')[0];
  
  subLogin.style.display = 'none';
  btnLogin.addEventListener('click', openLogin);
  
  function openLogin() {
    subLogin.style.display == 'none' ? subLogin.style.display = 'block' : subLogin.style.display = 'none';
  }
}