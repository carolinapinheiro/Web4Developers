
var rf = document.getElementById('regras');

function instrucoes(){
    var y = document.getElementById('regras');
    if (y.style.display === 'block'){
        y.style.display = 'none';
        btn1.style.display = 'block';
        btn2.style.display = 'block';
        btn3.style.visibility = 'hidden';
    } else {
        y.style.display = 'block';
        rf.innerHTML = `
        <h2>INSTRUÇÕES</h2>
        <div id="regra">
            <p> O objectivo do jogo é coseguir o maior número possivel, num minuto.</p>
            <p> Se o jogador perde automaticamente ao atingir os -5 pontos.</p>
            <p>
                <img src="./image/can-icon.png" width="5%"> - Quando acertar numa lata ganha 1(um) ponto
            </p>
            <p>
                <img src="./image/bottle-icon.png" width="3%"> - Quando acertar numa lata ganha 2(dois) pontos
            </p>
            <p>
                <img src="./image/missil-icon.png" width="3%"> - Se acertar num missil perde 1(um) ponto
            </p>
            <br>
            <p>
                <img src="./image/bomb-icon.png" width="7%"> - Se acertar numa bomba perde 2(dois) pontos
            </p>
        </div>
        `;
        btn1.style.display = 'none';
        btn2.style.display = 'none';
        btn3.style.visibility = 'visible';
    }
}


