var id_menu = 'sub-login';
startList = function close() {
  document.getElementById(id_menu).style.display = "none";
}
function openLogin(id){
  if (document.getElementById(id).style.display == "block"){
    document.getElementById(id).style.display = "none";
  }else{
    document.getElementById(id).style.display = "block";
  }
}
window.onload=startList;