function calcular()
{
    //Pegar a data digitada
    var dataDigitada = document.getElementById("datanasc").value;
    
    //Converte para Data
    var dataNasc = new Date(dataDigitada);
    
    //Zera as horas da data digitada
    dataNasc.setHours(0,0,0,0);
    
    //Data atual
    var dataAtual = new Date();
    dataAtual.setHours(0,0,0,0);
    
    //Convertendo para Milissegundos a diferença das daras de nascimento e atual 
    var milissegundos = dataAtual.getTime() - dataNasc.getTime();
    
    //1s = 1000 milissegundos
    //1m = 60s
    //1h = 60m
    //1 dia = 24h
    var umDia = 1000*60*60*24;
    
    //Calculando a quantidade de dias
    var totalDias = milissegundos/umDia;
    var sobra = 0;
    
    //Calculando o total de anos
    var anos = parseInt(totalDias/365);
    sobra = Math.round(totalDias)-(anos*365);
    
    //Calculando a quantidade de meses
    var meses = parseInt(sobra/31);
    
    //Total de dias
    sobra = (Math.round(totalDias)-(anos*365)) - (meses-31);
    var dias = sobra;
    document.getElementById("resposta").innerHTML = "Você tem "+anos+" anos ou "+totalDias+" dias.<br>Tem "+anos+" anos, "+meses+" meses e"+dias+" dias.";
}