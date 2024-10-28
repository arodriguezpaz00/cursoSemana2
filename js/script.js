function function1(){
    let lunes;
    let martes;
    let miercoles;
    let jueves;
    let viernes;
    let compra1;
    let compra2;
    let compra3;
    let compra4;
    let compra5;

    let resultados;

    let pregunta1 = "CUAL ES SU COMPRA DE PRODUCTOS DEL DIA ";
    let pregunta2 = "CUAL ES SU GASTO DEL DIA DEL DIA ";

    lunes = prompt(pregunta1 + ' Lunes?');
    compra1 = prompt(pregunta2 + 'Lunes?');
    
    martes = prompt(pregunta1 + 'Martes?');
    compra2 = prompt(pregunta2 + 'Martes?');
    
    miercoles = prompt(pregunta1 + 'Miercoles?');
    compra3 = prompt(pregunta2 + 'Miercoles?');
    
    jueves = prompt(pregunta1  + 'Jueves?');
    compra4 = prompt(pregunta2 + 'Jueves?');
    
    viernes = prompt(pregunta1 + 'Viernes?');
    compra5 = prompt(pregunta2+ 'Viernes?') ;

    document.getElementById('demo1').innerHTML = lunes;
    document.getElementById('demo2').innerHTML = martes;
    document.getElementById('demo3').innerHTML = miercoles;
    document.getElementById('demo4').innerHTML = jueves;
    document.getElementById('demo5').innerHTML = viernes;

    document.getElementById('gasto1').innerHTML = compra1;
    document.getElementById('gasto2').innerHTML = compra2;
    document.getElementById('gasto3').innerHTML = compra3;
    document.getElementById('gasto4').innerHTML = compra4;
    document.getElementById('gasto5').innerHTML = compra5;

    resultados = parseInt(compra1)  + parseInt(compra2) + parseInt(compra4) + parseInt(compra3) + parseInt(compra5);

    document.getElementById('totalGasto').innerHTML = `Total: ${resultados}`;


}