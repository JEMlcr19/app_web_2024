function operacion()
{
    let n1=parseInt(document.getElementById("n1").value);
    let n2=parseInt(document.getElementById("n2").value);
    let tipoope=document.getElementById("tipo").value;
    let ope;
    
    if (isNumber(n1) && isNumber(n2))
    {
        switch(tipoope)
        {
            case "+":ope=n1+n2;break;
            case "-":ope=n1-n2;break;
            case "*":ope=n1*n2;break;
            case "/":ope=n1/n2;break;
        }
        resultado.innerHTML=`<h2>${n1} ${tipoope} ${n2} = ${ope}</h2>`;
    }
    else

        alert("ingrese solo numeros por favor");
    
}

function isNumber(n)
{
    return isNaN(parseInt(n) && isFinite(n));
}
