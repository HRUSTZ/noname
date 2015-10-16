(function() {
var sCont = document.getElementById('sCont');
if(sCont) { //проверям, есть ли слайдер
  var sLeft = document.getElementById('sLeft');
  var sRight = document.getElementById('sRight');
 
  var viewWidth = sCont.parentElement.clientWidth+21; //получаем ширину contwrap, видимой части
  var slideWidth = sCont.firstElementChild.clientWidth + 30; //ширина одного элемента
  var slideCount = sCont.children.length; //количество всех слайдов
 
  var min = 0;
  var max = -slideCount + (viewWidth / slideWidth); //максимальное количество переходов вправо
 
 
  sLeft.onclick = function() { 
    moveSlider(1);
  }
 
  sRight.onclick = function() {
    moveSlider(-1);
  }
 
  function moveSlider(direction) {
    var margin = parseInt(sCont.style.marginLeft, 10); //получаем текущий margin
    var active = margin / slideWidth; //узнаем какой сейчас слайд
 
    active += direction;
    active = (active>min)?min:active; //устанавливаем нижнюю границу
    active = (active<max)?max:active; //устанавливаем верхнюю границу
 
    sCont.style.marginLeft = active * slideWidth + 'px'; //прокручиваем
  }
}
})();


function notice(text){
  var d=document.createElement('div');
  d.innerHTML = text;
  d.classList.add('notice');
  document.body.appendChild(d);
  
  setTimeout( function() { 
  document.body.removeChild(d)
  } , 11000)
}


function hasClass(element, className) {
  return element.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(element.className);
}
(function(){
  var filter = document.getElementById('filter');
  if(filter){
    function filterIt(){
      var clas = this.classList[0];
      [].forEach.call(filter.children, function(el) {
        el.classList.remove('active');
      });
      this.classList.add('active')
      var finder = document.getElementById('finder');
      [].forEach.call(finder.children, function(el) {
        el.classList.remove('hide');
        if (!hasClass(el, clas) && clas!='all'){
          el.classList.add('hide')
        }
      });
    }
    [].forEach.call(filter.children, function(el) {
      el.onclick = filterIt;
    });
  }
}());

(function(){
  var list = document.getElementById('list');
  if(list){
    [].forEach.call(list.children, function(el) {
      el.firstChild.onclick = function(e,l){
        var XHR = new XMLHttpRequest();
        XHR.open('GET', el.firstChild.href, true);
        XHR.send(null);
        el.parentNode.removeChild(el);
        return false;
      }
    });
  }
}());

(function(){
  var inputs = document.querySelectorAll(".input-file");
  [].forEach.call(inputs, function(el) {
    //console.log(el.dataset['list']);
    el.onchange = function(){
      //console.log(this,"hi, I am update")
      //console.log(this.files)
      var listCon = document.getElementById(this.dataset['list']);
      listCon.innerHTML = '';
      var fileList = this.files;
      [].forEach.call(fileList,function(el){
        var li = document.createElement('li');
        li.innerHTML = el.name;
        listCon.appendChild(li);
      })
    }
  })
}());

(function(){
  var menu = document.getElementById('btn-menu');
  var navigation = document.getElementById('nav');
  menu.onclick = function(){
    if(hasClass(navigation, 'active')){
      navigation.classList.remove('active')
    }else
    navigation.classList.add('active')
  }
}());