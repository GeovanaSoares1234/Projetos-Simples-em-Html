function inicia(){
    //percorre os produtos
    for(var i=1;i<=3;i++){
        //se a quantidade for zero, desabilita digitação
        if(document.getElementById("qtd"+i).value==0){
            document.getElementById("qtd" + i).disabled = true;
            document.getElementById("btn"+i).disabled = true;
        }
    }
}
function comprar(iTipo){
    document.getElementById("qtd" + iTipo).disabled = false;
    document.getElementById("btn" + iTipo).disabled = false;
    document.getElementById("qtd" + iTipo).value = "";
    document.getElementById("qtd" + iTipo).focus();
}

function calcular(iTipo){
    var fValorUn = document.getElementById("valor"+iTipo).innerHTML;
    var iQtde = document.getElementById("qtd"+iTipo).value;
    var fTotal = parseFloat(fValorUn)*parseInt(iQtde);
    document.getElementById("total" + iTipo).innerHTML = fTotal;
    calculaTotal();
    inicia();
}
function calculaTotal(){
    var fTot = 0;
    //percorre os produtos somando o valor total
       for(var i=1;i<=3;i++){
           fTot+=parseFloat(document.getElementById("total"+i).innerHTML);
       }
    document.getElementById("vrtotal").innerHTML="TOTAL: R$ "+fTot;
}