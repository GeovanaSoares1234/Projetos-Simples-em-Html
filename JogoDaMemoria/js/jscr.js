//Casas valendo 9 para identificar que não existe nenhum desenho lá
var casas =[[9, 9, 9, 9],[9, 9, 9, 9],[9, 9, 9, 9],[9, 9, 9, 9]];
//Matriz para marcar as casas já viradas
var vistos =[[9, 9, 9, 9],[9, 9, 9, 9],[9, 9, 9, 9],[9, 9, 9, 9]];
//Vetor para guardar a posição dos dois cliques
var sGuarda=["",""];
//Vetor para guardar o conteudo da casa clicada
var iGuarda=[9,9];
//Vetor criado para ser embaralhado
var sorteio = [1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8];
//Para contar os acertos
var iAcerto=0;
//Para contar os cliques
var iContaClique=0;
//Para contar os dois cliques
var iToque=0;
//Variável para identificar a mudança de casa
var sQual="";
//***********************************************************************************************
//Função que facilita o getElement
function id(sId){
    return document.getElementById( sId );
}

//************************************************************************************************
//Função que monta o jogo
function monta(){
    //mistura os valores
    sorteio = shuffleArray(sorteio);
    var iConta=0;
    for(var i=0;i<4;i++){
        for(var j=0;j<4;j++){
            //sorteia os valores e mistura na matriz
            casas[i][j]=sorteio[iConta];
            //coloca os desenhos das interrogações
            id('img'+i+''+j).src="image/img0.png";
            //desliga o arrasto
            id('img'+i+''+j).ondragstart = function() { return false; };
            iConta++;
        }
    }    
    //Exibe a quantidade de cliques
    id('cliques').innerHTML="Cliques: "+iContaClique;
}
//***********************************************************************************************
//Função que mistura os valores do Array
function shuffleArray(d) {
  for (var c = d.length - 1; c > 0; c--) {
    var b = Math.floor(Math.random() * (c + 1));
    var a = d[c];
    d[c] = d[b];
    d[b] = a;
  }
  return d;
}
//***********************************************************************************************
//Função que carrega as imagens clicadas
function carregaimagem(sPos){
    sQual=sPos;
    //Pega a primeira posição (indice)
    var iPos1=parseInt(sPos.charAt(0));
    //Pega a segunda posição (indice)
    var iPos2=parseInt(sPos.charAt(1));
    //Se ainda não foi clicado e o 2o clique é diferente do primeiro
    if((vistos[iPos1][iPos2]==9) && sGuarda[0]!=sPos){
        //Conta quantas imagens foram selecionadas. A cada duas, testa se são iguais
        iToque++;
        //Guarda o conteúdo da casa clicada
        iGuarda[iToque-1]=casas[iPos1][iPos2];
        //exibe a imagem clicada
        id("img"+sPos).src="image/img"+casas[iPos1][iPos2]+".png";
    }
}
//***********************************************************************************************
//Função que verifica acertos
function verifica(sPos){
    if(sQual!=sPos){
        mensagem();
    }else{
        //Pega a primeira posição (indice)
        var iPos1=parseInt(sPos.charAt(0));
        //Pega a segunda posição (indice)
        var iPos2=parseInt(sPos.charAt(1));
        //Conta o clique
        iContaClique++;
        id("cliques").innerHTML="Cliques: "+iContaClique;

        //Se ainda não foi clicado e o 2o clique é diferente do primeiro
        if((vistos[iPos1][iPos2]==9) && sGuarda[0]!=sPos){               
            //iToque++;
            //Armazena a posição tocada
            sGuarda[iToque-1]=sPos;
            //Se foram escolhidas 2 imagens
            if(iToque==2){     
                //Se as imagens clicadas forem iguais  
                if(iGuarda[0]==iGuarda[1]){
                    //incrementa acertos
                    iAcerto++;
                    //zera os toques
                    iToque=0;
                    //Muda a matriz dos vistos
                    vistos[parseInt(sGuarda[0].charAt(0))][parseInt(sGuarda[0].charAt(1))]=0;
                    vistos[parseInt(sGuarda[1].charAt(0))][parseInt(sGuarda[1].charAt(1))]=0;                
                    //limpa o vetor de guardados
                    sGuarda["",""];
                    iGuarda[9,9];
                    //Se houve 8 acertos, mostra a premiação
                    if(iAcerto==8){
                        pagaPremio();
                    }
                }else{
                    delay(1000);                
                    //Volta imagem da interrogação
                    id("img"+sGuarda[0]).src="image/img0.png";           
                    id("img"+sGuarda[1]).src="image/img0.png";
                    iToque=0;
                    //zera vetores
                    iGuarda=[9,9];
                    sGuarda=["",""];  
                }
            }           
        }else{
            alert("Clique em outro desenho");
        }
    }
}
//***********************************************************************************************
//Função que inicia todoo jogo
function zeraTudo(){
    //Casas valendo 9 para identificar que não existe nenhum desenho lá
    casas =[[9,9,9,9],[9,9,9,9],[9,9,9,9],[9,9,9,9]];
    //Matriz para marcar as casas já viradas
    vistos =[[9,9,9,9],[9,9,9,9],[9,9,9,9],[9,9,9,9]];
    //Vetor para guardar a posição dos dois cliques
    sGuarda=["",""];
    //Vetor para guardar o conteudo da casa clicada
    iGuarda=[9,9];
    //Vetor criado para ser embaralhado
    sorteio = [1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8];
    //Para contar os acertos
    iAcerto=0;
    //Para contar os cliques
    iContaClique=0;
    //Para contar os dois cliques
    iToque=0;
    monta();
}
//***********************************************************************************************
//Função para aguardar segundos
function delay(ms) {
   ms += new Date().getTime();
   while (new Date() < ms){}
}
/*********************************************************************/
function pagaPremio(){
        if(iContaClique<30){
            window.open('bombom.html?clique='+iContaClique,"_blank");
        }else if(iContaClique<40){
            window.open('pirulito.html?clique='+iContaClique,"_blank");
        }else{
            window.open('bala.html?clique='+iContaClique,"_blank");
        }
        //Zera todo o jogo
        zeraTudo();
        return;            
}
/*********************************************************************/
function mensagem(){
    alert("MOVIMENTO INVÁLIDO!!!! JOGO CANCELADO!!!");
    zeraTudo();
}