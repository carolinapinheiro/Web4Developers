let missil = new Image();
missil.src = "./image/yellow_missil.png";
 let beginMisssil

let missilX = Math.floor(Math.random() * canvas.width);
let missilY = 0;
let missilWidth = 100;
let missilHeight = 80;

let vy_missil = 5;

function moveMissil() {
  ctx.clearRect(missilX, missilY, missilWidth, missilHeight);

  ctx.drawImage(missil, missilX, missilY, missilWidth, missilHeight);

  missilY += vy_missil;

  beginMisssil = setTimeout(`moveMissil(${missilX}, ${missilY})`, 15);

}

function stopMissil() {
  clearTimeout(beginMisssil);
  missilX  = Math.floor(Math.random() * canvas.width);
  missilY = 19;
  moveMissil();
}

moveMissil();

setInterval(function() {
  stopMissil();
}, 2000);

moveMissil();