let canvas = document.getElementById("canvas");
let ctx = canvas.getContext("2d");


function myFunction() {
    var x = document.getElementById('canvas');
    var btn1 = document.getElementById('btn1');
    var btn2 = document.getElementById('btn2');
    var btn3 = document.getElementById('btn3');

    var botons =document.getElementsByClassName("btn");
    if (x.style.display === 'block') {
      x.style.display = 'none';
      btn1.style.display = 'block';
      btn2.style.display = 'block';
      btn3.style.visibility = 'hidden';
    } else {
      x.style.display = 'block';
      btn1.style.display = 'none';
      btn2.style.display = 'none';
      btn3.style.visibility = 'visible';
    }
  }

// let shelf = {
//   x: 0,
//   l: 700,
//   a: 20,

//   draw: function(y) {
//     ctx.beginPath();
//     ctx.rect(this.x, y, this.l, this.a);
//     ctx.stroke();
//   }
// };


// shelf.draw(100);
// shelf.draw(250);
// shelf.draw(400);
