
function calcular(){
    try {
    var PRECIOTOTAL = parseFloat(document.getElementById('PRECIOTOTAL').value);
    var PRECIORELLENO = parseFloat(document.getElementById('PRECIORELLENO').value);
    var PRECIOFRUTA = parseFloat(document.getElementById('PRECIOFRUTA').value);
    var PRECIOINSUMO = parseFloat(document.getElementById('PRECIOINSUMO').value);
    var GANANCIA = parseFloat(document.getElementById('PORGANANCIA').value);
    var suma = PRECIOTOTAL+PRECIORELLENO+PRECIOFRUTA+PRECIOINSUMO;
    var gana = (GANANCIA/100 * suma) +suma;
    var ganancia = gana-suma;
    document.getElementById('PRECIOPRODUCCION').value = suma;
    document.getElementById('PRECIOFINAL').value = gana;
    var g1 = (gana *0.75).toFixed(2);
    var g2 = (gana *0.25).toFixed(2);
    document.getElementById('PORCESETENTACINCO').value = g1;
    document.getElementById('PORCEVEINTECINCO').value = g2;
    document.getElementById('GANANCIA').value = ganancia;
    } catch (e) {
        
    }
}
function ocultar(){
    let lt1 = document.getElementById('FECHAEMISION');
    let lt2 = document.getElementById('FECHAENTREGA');
    let lt3 = document.getElementById('NOMBRECLI');
    let lt4 = document.getElementById('VENDEDOR');
    let lt5 = document.getElementById('DESCRIPCION');
    let lt6 = document.getElementById('COBERTURA');
    let lt7 = document.getElementById('DESCRIPASTEL');
    let lt8 = document.getElementById('CANTIDADPORPAS');
    let lt9 = document.getElementById('PRECIOPORCION');
    let lt10 = document.getElementById('PRECIOTOTAL');
    let lt11 = document.getElementById('DESCRIRELLENO');
    let lt12 = document.getElementById('CANTPORCRELLE');
    let lt13 = document.getElementById('PRECIORELLENO');
    let lt14 = document.getElementById('DESCRIFRUTA');
    let lt15 = document.getElementById('GRAMOS');
    let lt16 = document.getElementById('PRECIOFRUTA');
    let lt17 = document.getElementById('TIPOINSUMO');
    let lt18 = document.getElementById('INSUMO');
    let lt19 = document.getElementById('CANTINSUMO');
    let lt20 = document.getElementById('PRECIOINSUMO');
    let lt21 = document.getElementById('PRECIOUNINSUMO');
    let lt22 = document.getElementById('PRECIOPRODUCCION');
    let lt23 = document.getElementById('GANANCIA');
    let lt24 = document.getElementById('PRECIOFINAL');
    let lt25 = document.getElementById('PORCESETENTACINCO');
    let lt26 = document.getElementById('PORCEVEINTECINCO');

    if (lt1.value.length != 0 || lt6.value.length != 0 || lt11.value.length != 0 || lt16.value.length != 0|| lt21.value.length != 0 ||
        lt2.value.length != 0 || lt7.value.length != 0 || lt12.value.length != 0 || lt17.value.length != 0|| lt22.value.length != 0 ||
        lt3.value.length != 0 || lt8.value.length != 0 || lt13.value.length != 0 || lt18.value.length != 0|| lt23.value.length != 0 ||
        lt4.value.length != 0 || lt9.value.length != 0 || lt14.value.length != 0 || lt19.value.length != 0|| lt24.value.length != 0 ||
        lt5.value.length != 0 || lt10.value.length != 0 || lt15.value.length != 0 || lt20.value.length != 0|| lt25.value.length != 0 ||
        lt26.value.length != 0 ) {
        form.submit();
        document.getElementById('boton').disabled = "true";
    }
}
