//Matriz com as palavras e temas
var sPerguntas=[["CARAMBOLA", "FRUTAS"],
               ["JABUTICABA", "FRUTAS"],
               ["PITOMBA",    "FRUTAS"],
               ["FORTALEZA",      "CIDADE"],
               ["ITAQUAQUECETUBA","CIDADE"],
               ["TERESÓPOLIS",    "CIDADE"],
               ["ALICATE","FERRAMENTA"],
               ["FORMÃO","FERRAMENTA"],
               ["SERRA TICO-TICO","FERRAMENTA"],
               ["ALMOFADA","OBJETO"],
               ["PALITO DE DENTE","OBJETO"],
               ["JORNAL","OBJETO"],
               ["LASANHA","COMIDA"],
               ["STROGONOFF","COMIDA"],
               ["FRANGO XADREZ","COMIDA"],
               ["SANTANA","CARRO"],
               ["AEROWILLYS","CARRO"],
               ["VIRTUS","CARRO"],
               ["GÉRGEBRA","FLOR"],
               ["CALANCHUÊ","FLOR"],
               ["SLIRIO","FLOR"],
               ["SAXOFONE","INSTRUMENTO MUSICAL"],
               ["UKULELÊ","INSTRUMENTO MUSICAL"],["ESCALETA","INSTRUMENTO MUSICAL"],
               ["JOHNNY DEEP","ATOR"],
               ["DWAYNE JOHNSON","ATOR"],
               ["BRIE LARSON","ATRIZ"],
               ["SCARLETT JOHANSSON","ATRIZ"]];
//ARRAY para fazer o shuffle
var iSorteados=[];
//conta a quantidade de jotgadas feitas para buscar o vetor de sorteados
var iJogada=0;
//armazena a palavra da vez
var sPalavraSorteada;
//conta as letras certas
var iAcertos=0;
//conta letras erradas
var iErros=0;
//guarda a letra clicada para poder desabilita-la
var cLetraClicada="";
var sLetras=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','-'];
//Variaveis que contas os acertos e os erros
var iCertas=0, iErradas=0;
//função que mistura os valores do array
function shuffleArray(vetor){
    for(var i=vetor.length-1;i>0;i--){
        var iSort=Math.floor(Math.random()*(i+1));
        var cTemp=vetor[i];
        vetor[i]=vetor[iSort];
        vetor[iSort]=cTemp;
    }
    return vetor;
}
//função que preenche o vetor para sorteio, mistura e monta a ordem
function sorteia(){
    //insere os numeros dentro do vetor  conforme a quantidade de intens na matriz
    for(var i=0;i<sPerguntas.length;i++){
        iSorteados.push(i);
    }
    //faz mistura
    iSorteados=shuffleArray(iSorteados);
    //chama a função que separa as letras da palavra e cria os formularios. Envia como parametros uma palavra sorteada
    criaLetras(sPerguntas[iSorteados[iJogada]][0]);
}
//função que cria os formularios dinacamente conforme a palavra
function criaLetras(sPalavra){
    //busca o formulario
    var formula = document.getElementById("tenta");
    var j=0;
    //for do tamanho da palavra
    for(var i=0;i<sPalavra.length;i++){
        //se for diferente de espaço (ASCII 32)
        if(sPalavra[i].charCodeAt(0)!=32){
            //DOM-Document object model
            //cria um input
            var cLetra=document.createElement("input");
            //defini os atributos do input
            cLetra.setAttribute("type","text");
            //nome
            cLetra.setAttribute("name","tenta");
            //id
            cLetra.setAttribute("id","tenta"+j);
            //tamanho máximo
            cLetra.setAttribute("maxlenght",1);
            //tamanho da exibição
            cLetra.setAttribute("size",1);
            //desabuilita edição
            cLetra.setAttribute("disabled","true");
            //adiciona o input no formulario
            formula.appendChild(cLetra);
            j++;
        }else{
            //quando for espaço, ele separa 20px a esqueda e 1px a direita do input anterior
            document.getElementById("tenta"+(j-1)).style.margin = "0px 20px 0px 1px";
        }
    }
    //remove todos os acentos e espaços da palavra
    sPalavraSorteada = limpa(sPalavra);
    //exibi o tema e a quantidade de letras da palavra
    document.getElementById("tema").innerHTML=sPerguntas[iSorteados[iJogada]][1]+" - "+sPalavraSorteada.length+"letras";
}
//*************************************************************
//função que remove acentos e espaços da palavra
function limpa(sItem){
    var sResultado=sItem;
    //retira todos os espaços
    sResultado=replaceAll(sResultado," ","");
    //retira todos os acentos e cdilhas
    //o metodo normalize do Javascript,serve para converter uma string em um formato unicode normalizado. Neste caso utilizamos os parâmetros NFD que é capaz de separar os acentos das letras e retornar seus códigos Unicode. Em seguida o método replace substitui todas as ocorrências de caracteres diacríticos(sinal gráfico complementar), combinando os na sequencia unicode \u300-\u036F.
    sResultado = sResultado.normalize('NFD').replace(/[\u0300-\u036f]/g, "");
    return sResultado;
    
    
}
//função que substitui todas as ocorrências
function replaceAll(str,de,para){
    //procura a ocorrência
    var pos = str.indexOf(de);
    //se achou
    while(pos>-1){
        //substitui
        str=str.replace(de,para);
        //e procura novamentev a ocorrência
        pos = str.indexOf(de);
    }
    //retorna a string com as substituições feitas
    return(str);
}
//*****************************************************************
//função que confere a letra clicada
function confere(cLetra){
    //atribui letra a uma variavel global
    cLetraClicada=cLetra;
    //cria variavel que definirá se a letra foi encontrada na palavra
    var lAchou=false;
    //percorre as letras da palavra sorteada
    for(var i=0;i<sPalavraSorteada.length;i++){
        //se a letra clicada, existir na palavra
        if(cLetra==sPalavraSorteada.charAt(i)){
            //insere a exibição da letra
            document.getElementById("tenta"+i).value=cLetra;
            //conta acertos
            iAcertos++;
            //exibi acertos
            document.getElementById("acerto").innerHTML="ACERTOS:"+iAcertos;
            //indica que a letra foi encontrada
            lAchou=true;
        }
    }
    //se não achou a letra
    if(lAchou==false){
        //conta erro
        iErros++;
        //insere a imagem conforme a quantidade de erros
        document.getElementById("imagem").src="images/forca"+(iErros+1)+".png";
    }
}
//******************************************************
function acabou(){
    //variavel que indicara se o jogo acabou
    var lAcabou=false;
    //se a quantidade e acertos for igual ao tamanho da palavra
    if(iAcertos==sPalavraSorteada.length){
        //o jogo acabou
        lAcabou=true;
        //exibe mensagem
        alert("Parabéns você conseguiu");
        //variavel utilizada para mudar a palavra na proxima jogada
        iCertas++;
        //se a quantidade de letras erradas chegou a 6
    }else if(iErros==6)
    {
        lAcabou=true;
        alert("ENFORCADO");
        iErradas++;
        
    }
    document.getElementById(cLetraClicada).disabled=true;
    if(lAcabou){
        for(var i=0;i<sPalavraSorteada.length;i++){
            document.getElementById("tenta"+i).remove();
        }
        iJogada++;
        document.getElementById("palcerta").innerHTML="PALAVRAS CERTAS:"+iCertas+"<br>PALAVRAS ERRADAS: "+iErradas;
        criaLetras(sPerguntas[iSorteados[iJogada]][0]);
        iAcertos=0;
        iErros=0;
        document.getElementById("acerto").innerHTML="ACERTOS:"+iAcertos;
        document.getElementById("imagem").src="images/forca"+(iErros+1)+".pgn";
        for(var i=0; i<sLetras.length;i++){
            document.getElementById(sLetras[i]).disabled=false;
        }
    }
}








