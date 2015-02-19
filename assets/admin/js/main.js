

function setLayout(){

  var _w = $('#painel').width();
  var _h = $('#painel').height();  
  $('.h-col').height(_h);
}


window.onload   = setLayout; 
window.onresize = setLayout; 



