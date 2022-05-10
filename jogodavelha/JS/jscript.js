//Vetor inicializado com 9 para indicar que a casa não foi clicada
var casas = [9, 9, 9,
             9, 9, 9,
             9, 9, 9];
//indica a vez do jogador = (1) xis e (-1) bola
var iVez = 1;
//conta a quantidade de cliques dados durante o jogo
var iContaClique = 0;
//Placar
var iPontosX=0;
var iPontosO=0;
var iPontosV=0;
//variável para indicar o vencedor
var sResposta="";
/****************************************************************/
//Função que verifica as jogadas
function verifica(iCasa){
    //verifica se a casa não foi clicada
    if(casas[iCasa]==9){
        //modicica de 9 para o valor do jogador da vez;
        casas[iCasa]=iVez;
        if(iVez==1){
            document.getElementById("imag"+iCasa).src="IMAGES/xisGe.png";
        }else{
            document.getElementById("imag"+iCasa).src="IMAGES/bolaGe.png";
        }
        //inverte o jogador da vez
        iVez*=-1;
        iContaClique++;
        confereGanhador();
    }
}
/****************************************************************/
//Função que testa e confere se houve ganhador
function confereGanhador(){
    var i;
    //Variável que marca se alguém ganhou
    var lGanhou = false;
    //Variável que marca se o jogo acabou e ninguem ganhou
    var lAcabou = true;
    //percorre todas as casas para verificar se ainda existe alguma que não foi clicada
    for(i=0;i<casas.length;i++){
        if(casas[i]==9){
            //Se houver algum 9, sabemos que existem casas não clicadas
            lAcabou=false;
        }
    }
    //Se a quantidade de cliques for 9, o jogo acabou
    if(iContaClique==9){
        lAcabou=true;
    }
    //Realiza a soma de cada coluna, linha e diagonal colocando o valor em um vetor
    var iSoma = [];
    /* 0  1  2 
       3  4  5
       6  7  8 */
    iSoma[0] = casas[0]+casas[1]+casas[2]; // linha 1
    iSoma[1] = casas[3]+casas[4]+casas[5]; // linha 2
    iSoma[2] = casas[6]+casas[7]+casas[8]; // linha 3
    iSoma[3] = casas[0]+casas[3]+casas[6]; // coluna 1    
    iSoma[4] = casas[1]+casas[4]+casas[7]; // coluna 2
    iSoma[5] = casas[2]+casas[5]+casas[8]; // coluna 3
    iSoma[6] = casas[0]+casas[4]+casas[8]; // diagonal 1   
    iSoma[7] = casas[2]+casas[4]+casas[6]; // diagonal 2   
    
    //percorre o vetor iSoma procurando valores 3 ou -3
    for(i=0;i<iSoma.length;i++){
        //Se achou soma = -3 é porque a bola ganhou
        if(iSoma[i]==-3){
            lGanhou=true;
            sResposta="BOLA GANHOU!!!";
            iPontosO++;
            document.getElementById("bola").innerHTML="PONTOS O: "+iPontosO;
            break;
        }else if(iSoma[i]==3){
            lGanhou=true;
            sResposta="XIS GANHOU!!!";
            iPontosX++;
            document.getElementById("xis").innerHTML="PONTOS X: "+iPontosX;
            break;
        }
    }
    //Se nem bola e nem xis ganharam e o jogo acabou, é porque deu VELHA
    if(lGanhou==false && lAcabou==true){
        sResposta="DEU VELHA!!!";
        iPontosV++;
        document.getElementById("velha").innerHTML="VELHA...: "+iPontosV;
    }
    //Se o jogo acabou ou alguém ganhou, desabilita todas as casas
    if(lAcabou || lGanhou){
        for(i=0;i<casas.length;i++){
            document.getElementById("casa"+i).disable=true;
            casas[i]=0;
        }
            //exibe o resultado
        document.getElementById("resposta").innerHTML=sResposta;
        //muda a cor da letra
        document.getElementById("resposta").style.color="#ffffff";
        //muda o tamanho
        document.getElementById("resposta").style.fontSize="xx-large";

    }
}
/*******************************************************************************/
//função que começa todo o jogo
function recomeca(){
    for(i=0;i<casas.length;i++){
        //não permite arrastar as i8magns
        document.getElementById("imag"+i).ondragstart=function(){return false;};
        //habilita as casas
         document.getElementById("casa"+i).disable=false;
        //remove as imagens
         document.getElementById("imag"+i).src="";
        //volta a configuração original do placar
         document.getElementById("resposta").innerHTML="RESULTADO:";
         document.getElementById("resposta").style.color="#ffffff";
         document.getElementById("resposta").style.fontSizeL="large";
        //restaura 9 no vetor
        casas[i]=9;
        lGanhou=false;
        lAcabou=true;
        iContaClique=0;
        iVez=1;
        
    }
}






