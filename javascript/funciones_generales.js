window.onload = function(){
    nombre= prompt("Ingresa tu nombre");
    pregunta = confirm(nombre +"sos mayor de edad");
    if(!pregunta){
        location = "https://google.com.ar";
    }
    document.getElementById("btnIngresarDatos").onclick = function(){
        do {
            numero1= prompt("Ingrese un numero");
            numero2 = prompt("Inrese otro numero");
            confirmacion = confirm ("Desea confirmar los numeros?");
        } while(!confirmacion);
        document.write("Los numeros son: " + numero1 +" y "+ numero2);
    };
};
