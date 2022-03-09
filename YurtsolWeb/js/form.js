//JAVASCRIPT

var timeleft = 4;
var downloadTimer = setInterval(function(){
  document.getElementById("countdown").innerHTML = timeleft;
  timeleft -= 1;
  if(timeleft <= 0){
    clearInterval(downloadTimer);
    document.getElementById("countdown").innerHTML = "<a href='index.html'>"+"Anasayfaya Git"+"</a>";
  }
}, 1000);







