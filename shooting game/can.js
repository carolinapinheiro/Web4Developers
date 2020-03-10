let can = new Image();
can.src = "./image/can1.png";

let beginCan;
let canX = 0;
let canY = 19;
let canWidth = 100;
let canHeight = 80;

let vx_Can = 5;

function moveCan() {
  ctx.clearRect(canX, canY, canWidth, canHeight);

  ctx.drawImage(can, canX, canY, canWidth, canHeight);

  canX += vx_Can;

  beginCan = setTimeout(`moveCan(${canX}, ${canY})`, 10);
};

function stopCan() {
  // clearTimeout(beginCan);
  canX = 0;
  canY = random();
  moveCan();
}

moveCan();

setInterval(function() {
  stopCan();
}, 2000);

canvas.addEventListener("click", () => {
  console.log('canvas click');

});