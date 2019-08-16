function generar(){

    var numero;
    
    numero = parseInt(Math.random(1000)*10000);
    
    if(numero > 100){
    alert("copia y pega el numero de factura" + " " 
    + numero);
    }
    
    else{
    alert("error al generar factura")    
    }
    }