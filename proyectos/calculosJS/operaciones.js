function operacion() {
    let n1 = parseInt(document.getElementById("n1").value);
    let n2 = parseInt(document.getElementById("n2").value);
    let tipoope = document.getElementById("tipo").value;
    let ope;
    let resultado = document.getElementById("resultado");
    if (isNumber(n1) && isNumber(n2)) {
        switch (tipoope) {
            case "+":
                ope = n1 + n2;
                break;
            case "-":
                ope = n1 - n2;
                break;
            case "*":
                ope = n1 * n2;
                break;
            case "/":
                ope = n1 / n2;
                break;
            default:
                ope = "Operación no válida";
        }
        resultado.innerHTML = `<h2>${n1} ${tipoope} ${n2} = ${ope}</h2>`;
    } else {
        resultado.innerHTML = `<h2>Operación no válida</h2>`;
        alert("Ingrese solo números por favor...");
    }
}

function isNumber(n) {
    return !isNaN(n) && isFinite(n);
}
