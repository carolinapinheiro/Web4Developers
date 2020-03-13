    var timeleft = 5;
    var downloadTimer = setInterval(function(){
      if(timeleft <= 0){
        clearInterval(downloadTimer);
        document.getElementById("countdown").innerHTML = "Finished";
      } else {
        document.getElementById("countdown").innerHTML = timeleft;
      }
      timeleft -= 1;
    }, 1000);