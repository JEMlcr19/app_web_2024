//Este es un comentario de JS de una linea 

/* este es un comentario 
de varias lineas 
de codigo
*/

//variables
var nombre="Jose Eduardo Malacara Ibarra";
var nombre2='Diego Muguiro';
let nombre3="Rodolfo Pelon"
let edad=24;
let estatura=1.80;
let logico=true;

//Alerta
//alert("Soy una alerta"+nombre)

//Mostrar contenido de variables
console.log("Hola soy la consola y tu nombre es: "+nombre); //Atraves de consola
document.write("Hola soy la consola y tu nombre es: "+nombre)
document.write("<hr><h2>Hola soy la consola y tu nombre es: "+nombre+"</h2>")

//Mostrar contenido utilizando getElementByID

let datos=document.getElementById("informacion");
datos.innerHTML="Hola soy un contenido de innerHTML<br>";
datos.innerHTML+="<hr><h2>Hola soy otro contenido de innerHTML</h2><hr>";
datos.innerHTML+="<hr><h2>Mi edad es: "+edad+"</h2><hr>";
datos.innerHTML+=`
    <hr>
    <h2>Mi edad es: ${edad}</h2>
    <h2>Mi nombre es: ${nombre}</h2>
    <hr>
`;

//condiciones

if (edad>=18)
    datos.innerHTML+=`<hr><h2>Soy mayor de edad</h2><hr>`;
else
datos.innerHTML+=`<hr><h2>Soy menor de edad</h2><hr>`;

//ciclos

for(let i=1;i<=5;i++)
{
    datos.innerHTML+=`<hr><h2>For: soy el numero: ${i}</h2>`;
    i++;
}

let i=1;
while (i<=5)
{
    datos.innerHTML+=`<hr><h2>While: soy el numero: ${i}</h2>`;
    i++;
}

i=1;
do
{
    datos.innerHTML+=`<hr><h2>DoWhile: soy el numero: ${i}</h2>`;
    i++;
}while(i<=5);

//Funciones

//1.- Funciones que no reciben parametros y no regresan valor

function suma1()
{
    let n1=2;
    let n2=3;
    let suma=n1+n2;
    datos.innerHTML+=`<hr><h2>La suma 1 es: ${suma}</h2>`;
}
suma1();

//2.- Funciones que no reciben parametros y si regresan valor

function suma2()
{
    let n1=2;
    let n2=3;
    let suma=n1+n2;
   return suma;
}
let sum=suma2();
datos.innerHTML+=`<hr><h2>La suma 2 es: ${sum}</h2>`;

//3.- Funciones que si reciben parametros y no regresan valor

function suma3(numero1, numero2)
{
    let n1=numero1;
    let n2=numero2;
    let suma=n1+n2;
    datos.innerHTML+=`<hr><h2>La suma 3 es: ${suma}</h2>`
}

suma3(3,4);

//4.- Funciones que si reciben parametros y si regresan valor

function suma4(numero1, numero2)
{
    let n1=numero1;
    let n2=numero2;
    let sum1=n1+n2;
    return sum1;
}

sum1=suma4(6,4);
datos.innerHTML+=`<hr><h2>La suma 4 es: ${sum1}</h2>`;

//Arreglos

let animales=[];
animales[0]="Perro";
animlaes[1]="Gallina";
animales[2]="Perico";

let animales2=["Leon","Tigre","Elefante"];

for(let i=0;i<animales.length;i++)
{
    datos.innerHTML+=`<hr><h2>El animal es: ${animales[i]}</h2>`;
}

animales2.forEach(elment => {
    datos.innerHTML+=`<hr><h2>La suma 4 es: ${element}</h2>`;
});