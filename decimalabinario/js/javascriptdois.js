//decimal para binário
function decimalBin(){
    var decimaltemp=0;
    var binario="",bin="";
    var sNum=document.getElementById("decimal").value;
    var decimaltemp=sNum;
    while(decimaltemp>=1){
        binario+=""+decimaltemp%2;
        decimaltemp=parseInt(decimaltemp/2);
    }
    for(var i=binario.length-1;i>=0;i--){
        bin+=binario.charAt(i);
    }
    while(bin.length<=8){
        bin="0"+bin;
    }
    document.getElementById("ResultadoDecimal").innerHTML= bin;
}

function bindec(){
    var sBin=document.getElementById("Bin").value;
    var bi=document.getElementById("Bin").value;
    var binario=sBin;
    var decimal=0;
    for(var i=7;i>=0;i--)
    {
        decimal+=Math.pow(2,7-i)*parseInt(binario.charAt(i));
    }
    console.log(bi.length);
    if(bi.length==8){
        document.getElementById("Resultado").innerHTML=decimal;
        }
    else{
         document.getElementById("Resultado").innerHTML="Não foi atingido o valor necessário para ser número binário";
    }
}


