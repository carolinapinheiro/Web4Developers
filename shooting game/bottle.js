let bottle = new Image();
bottle.src = "./image/bottle01.gif";


let bottleX = -10;
let bottleY = 156;
let bottleWidth = 100;
let bottleHeight = 95;

let vx_Bottle = 5;

function moveBottle() {
  ctx.clearRect(bottleX, bottleY, bottleWidth, bottleHeight);

  ctx.drawImage(bottle, bottleX, bottleY, bottleWidth, bottleHeight);

  bottleX += vx_Bottle;

  beginBottle =setTimeout(`moveBottle(${bottleX}, ${bottleY})`, 10);
}
function stopbottle() {
  // clearTimeout(beginBottle);
  bottleX = -10;
  bottleY = random();
  moveBottle();
}

moveBottle();

setInterval(function() {
  stopbottle();
}, 2000);

canvas.addEventListener("click", () => {
  console.log('canvas click');

});


