// definir imagem 
let bomb = new Image();
bomb.src = "./image/bomb-vermelha.png";


//Onde começa a bom e onde acaba
let bombX = 0;
let bombY = 150;

// tamanho 
let bombWidth = 100;
let bombHeight = 100;

// velocidade
let vx_Bomb = 6;
let vy_Bomb = 6;

function moveBomb() {
  //desenhar no canvas
  ctx.clearRect(bombX, bombY, bombWidth, bombHeight);
  ctx.drawImage(bomb, bombX, bombY, bombWidth, bombHeight);

  bombX += vx_Bomb;
  bombY += vy_Bomb;

  if (bombX + vx_Bomb > 620 || bombX + vx_Bomb < 0) {
    vx_Bomb = vx_Bomb * -1;
  } else if (bombY + vy_Bomb > 420 || bombY + vy_Bomb < 0) {
    vy_Bomb = vy_Bomb * -1;
  }

  // definir velocidade e deixar correr
  setTimeout(`moveBomb(${bombX}, ${bombY})`, 30);
  
}

setTimeout(moveBomb, 5000);


