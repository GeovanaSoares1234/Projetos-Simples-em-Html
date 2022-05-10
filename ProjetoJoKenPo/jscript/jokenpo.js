var iVoce=0,iRobo=0,iEmpate=0;

var resultado=[
//         0         1    2 3 4
    [["#082DF5","#082DF5",0,0,1],["#ff0000","#082DF5",0,1,0],["#082DF5","#FF0000",1,0,0]],//linha 0
    [["#082DF5","#FF0000",1,0,0],["#082DF5","#082DF5",0,0,1],["#FF0000","#082DF5",0,1,0]],//linha 1
    [["#FF0000","#082DF5",0,1,0],["#082DF5","#FF0000",1,0,0],["#082DF5","#082DF5",0,0,1]] //linha 2
              ];

//vetor com as imagens utilizadas
//               0            1           2
var imagens=["pedra.png","papel.png","tesoura.png"];

function limpar(){
    /*muda valores dos textos*/
    document.getElementById("pvoce").innerHTML = "VOCÊ: 0";
    document.getElementById("probo").innerHTML = "ROBÔ: 0";
    document.getElementById("pempate").innerHTML = "EMPATE: 0";
    /*mudar a imagem inicial*/
    document.getElementById("escolhavoce").src="imagens/ppt.png";
    document.getElementById("escolharobo").src="imagens/ppt.png";
    iVoce=0;
    iRobo=0;
    iEmpate=0;
    document.getElementById("escolhavoce").style.filter="drop-shadow(0 0 0)";
    document.getElementById("escolharobo").style.filter="drop-shadow(0 0 0)";
}

function escolhe(pos){
    document.getElementById("escolhavoce").src="imagens/"+imagens[pos];
    var iSort = Math.floor(Math.random()*3);
    document.getElementById("escolharobo").src="imagens/"+imagens[iSort];
 /*   
    if(pos==0 && iSort==0){
        document.getElementById("escolhavoce").style.filter="drop-shadow(0 0 0.7em #082DF5)";
        document.getElementById("escolharobo").style.filter="drop-shadow(0 0 0.7em #082DF5)";
        iEmpate++;
    }else if(pos==0 && iSort==1){
        document.getElementById("escolhavoce").style.filter="drop-shadow(0 0 0.7em #FF0000)";
        document.getElementById("escolharobo").style.filter="drop-shadow(0 0 0.7em #082DF5)";
        iRobo++;
    }else if(pos==0 && iSort==2){
        document.getElementById("escolhavoce").style.filter="drop-shadow(0 0 0.7em #082DF5)";
        document.getElementById("escolharobo").style.filter="drop-shadow(0 0 0.7em #FF0000)";
        iVoce++;
    }
    */
    
    //Pontos do jogador
    iVoce+=resultado[pos][iSort][2];
    //Pontos do robo
    iRobo+=resultado[pos][iSort][3];
    //Pontos do empate
    iEmpate+=resultado[pos][iSort][4];
    //Cores dos resultados
    document.getElementById("escolhavoce").style.filter="drop-shadow(0 0 0.7em "+resultado[pos][iSort][0]+")";
    document.getElementById("escolharobo").style.filter="drop-shadow(0 0 0.7em "+resultado[pos][iSort][1]+")";
    
    
    document.getElementById("pvoce").innerHTML = "VOCÊ: "+iVoce;
    document.getElementById("probo").innerHTML = "ROBÔ: "+iRobo;
    document.getElementById("pempate").innerHTML = "EMPATE: "+iEmpate;
    
}