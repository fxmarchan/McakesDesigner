@extends('plantilla')

@section('EjecutarFormato')
    <!DOCTYPE html>
    <html>

    <head>
        <title>PEDIDOS</title>
        <link rel="stylesheet" href="css/EstilosTablasFormatos.css">

    </head>

    <body>
        <br>
        <br>
        <form class="box" id="box" action="{{ route('FormTanSurt') }}" method="POST">
            @csrf
            <table class="Ingresar">
                <tr>
                    <td><img width="80" height="80"
                            src="https://sd.keepcalms.com/i/keep-calm-i-m-the-cake-designer.png" alt=""></td>
                    <td class="Ingresar" colspan="3">
                        <p>GESTIÓN DE PEDIDOS <br>
                            MACARONS FRANCESES, CAKES, CUPCAKES PERSONALIZADOS Y BOCADITOS</p>
                    </td>
                    <td class="Ingresar">CÓDIGO:EC.UIO.01<br>REVISION:1<br>USO INTERNO</td>
                </tr>
                <tr class="Ingresar">
                    <td class="Ingresar" colspan="1">
                        <p>FECHA EMISIÓN: <input id="FECHAEMISION" name="FECHAEMISION" type="date"
                                value="<?php echo date('Y-m-d'); ?>"required></p>
                    </td>
                    <td class="Ingresar" colspan="1">
                        <p>FECHA ENTREGA: <input id="FECHAENTREGA" name="FECHAENTREGA" type="date"
                                value="<?php echo date('Y-m-d'); ?>"required></p>
                    </td>
                  
                    <td class="Ingresar" colspan="1">
                        <p>NOMBRE CLIENTE: <input id="NOMBRECLI" name="NOMBRECLI" type="text" class="FormText"
                                value="" onkeyup="this.value = this.value.toUpperCase();" required></p>
                    </td>
                    <td class="Ingresar" colspan="1">
                        <p>VENDEDOR: <input id="VENDEDOR" name="VENDEDOR" type="text" class="FormText"
                                value="" onkeyup="this.value = this.value.toUpperCase();" required></p>
                    </td>
                    <td class="Ingresar" colspan="1">
                        <p>DESCRIPCIÓN: <input id="DESCRIPCION" name="DESCRIPCION" onkeyup="this.value = this.value.toUpperCase();" class="FormText"type="text"required> </p>
                    </td>
                </tr>
                <tr>
                    <td class="Ingresar" colspan="5">
                        <p> <a class = "otroboton" href="{{ route('pasteles') }}" target="_blank">PASTELES</a>  </p>
                    </td>
                </tr>
                <tr class="Ingresar">
                   
                    <td class="Ingresar" colspan="1">
                        <p>COBERTURA: <input id="COBERTURA" name="COBERTURA" type="text" class="FormText"
                                onkeyup="this.value = this.value.toUpperCase();" required></p>
                    </td>
                    <td class="Ingresar" colspan="1">
                        <p>DESCRICIÓN PASTEL: <input id="DESCRIPASTEL" name="DESCRIPASTEL" type="text" class="FormText"
                                onkeyup="this.value = this.value.toUpperCase();" required></p>
                    </td>
                    <td class="Ingresar" colspan="1">
                        <p>CANTIDAD PORCIÓN: <input id="CANTIDADPORPAS" name="CANTIDADPORPAS" type="number" class="FormText" min=1 required></p>
                    </td>
                    <td class="Ingresar" colspan="1">
                        <p>PRECIO POR PORCIÓN: <input id="PRECIOPORCION" name="PRECIOPORCION" type="number" class="FormText"
                                onkeyup="this.value = this.value.toUpperCase();" required></p>
                    </td>
                    <td class="Ingresar" colspan="1">
                        <p>PRECIO DE PROD. TOTAL: <input id="PRECIOTOTAL" name="PRECIOTOTAL" type="number" class="FormText"
                                onkeyup="this.value = this.value.toUpperCase();" oninput="calcular()" required></p>
                    </td>
                </tr>
                <tr>
                    <td class="Ingresar" colspan="5">
                        <p><a class = "otroboton" href="{{ route('rellenos') }}" target="_blank">RELLENOS</a>  </p>
                    </td>
                </tr>
                <tr class="Ingresar">
                    <td class="Ingresar" colspan="2">
                        <p>DESCRICIÓN RELLENO: <input id="DESCRIRELLENO" name="DESCRIRELLENO" type="text" class="FormText"
                                onkeyup="this.value = this.value.toUpperCase();" required></p>
                    </td>
                    <td class="Ingresar" colspan="2">
                        <p>CANTIDAD PORCIÓN: <input id="CANTPORCRELLE" name="CANTPORCRELLE" type="number" class="FormText" min=1 required></p>
                    </td>
                    <td class="Ingresar" colspan="1">
                        <p>PRECIO: <input id="PRECIORELLENO" name="PRECIORELLENO" type="number" class="FormText"
                                onkeyup="this.value = this.value.toUpperCase();"  oninput="calcular()" required></p>
                    </td>
                </tr>
                <tr>
                    <td class="Ingresar" colspan="5">
                        <p><a class = "otroboton" href="{{ route('frutas') }}" target="_blank">FRUTAS</a>  </p>
                    </td>
                </tr>
                <tr class="Ingresar">
                    <td class="Ingresar" colspan="2">
                        <p>DESCRICIÓN FRUTA: <input id="DESCRIFRUTA" name="DESCRIFRUTA" type="text" class="FormText"
                                onkeyup="this.value = this.value.toUpperCase();" required></p>
                    </td>
                    <td class="Ingresar" colspan="2">
                        <p>CANTIDAD O GRAMOS: <input id="GRAMOS" name="GRAMOS" type="number" class="FormText" min=1 required></p>
                    </td>
                    <td class="Ingresar" colspan="1">
                        <p>PRECIO: <input id="PRECIOFRUTA" name="PRECIOFRUTA" type="number" class="FormText"
                                onkeyup="this.value = this.value.toUpperCase();"  oninput="calcular()" required></p>
                    </td>
                </tr>
                <tr>
                    <td class="Ingresar" colspan="5">
                        <p> <a class = "otroboton" href="{{ route('insumos') }}" target="_blank">INSUMOS</a> </p>
                    </td>
                </tr>
                <tr class="Ingresar">
                    <td class="Ingresar" colspan="1">
                        <p>TIPO: <input id="TIPOINSUMO" name="TIPOINSUMO" type="text" class="FormText"
                                onkeyup="this.value = this.value.toUpperCase();" required></p>
                    </td>
                    <td class="Ingresar" colspan="1">
                        <p>INSUMO: <input id="INSUMO" name="INSUMO" type="text" class="FormText"
                                onkeyup="this.value = this.value.toUpperCase();" required></p>
                    </td>
                    <td class="Ingresar" colspan="1">
                        <p>CANTIDAD: <input id="CANTINSUMO" name="CANTINSUMO" type="number" class="FormText" min=1 required></p>
                    </td>
                    <td class="Ingresar" colspan="1">
                        <p>PRECIO: <input id="PRECIOINSUMO" name="PRECIOINSUMO" type="number" class="FormText"
                                onkeyup="this.value = this.value.toUpperCase();"  oninput="calcular()" required></p>
                    </td>
                    <td class="Ingresar" colspan="1">
                        <p>UNITARIO: <input id="PRECIOUNINSUMO" name="PRECIOUNINSUMO" type="number" class="FormText"
                                onkeyup="this.value = this.value.toUpperCase();" required></p>
                    </td>
                </tr>
                <tr>
                    <td class="Ingresar" colspan="5">
                        <p> TOTAL </p>
                    </td>
                </tr>
                <tr class="Ingresar">
                    <td class="Ingresar" colspan="1">
                        <p>PRECIO DE PRODUCCIÓN: <input id="PRECIOPRODUCCION" name="PRECIOPRODUCCION" type="number" class="FormText"
                                onkeyup="this.value = this.value.toUpperCase();" step="any"></p>
                    </td>
                    <td class="Ingresar" colspan="1">
                        <p>% GANANCIA: <input id="PORGANANCIA" name="PORGANANCIA" type="number" class="FormText"
                                onkeyup="this.value = this.value.toUpperCase();" oninput="calcular()" step="any"></p>
                    </td>
                    <td class="Ingresar" colspan="1">
                        <p>PRECIO TOTAL: <input id="PRECIOFINAL" step="any" name="PRECIOFINAL" type="number" class="FormText" min=1 ></p>
                    </td>
                    <td class="Ingresar" colspan="1">
                        <p>(75%): <input id="PORCESETENTACINCO" step="any" name="PORCESETENTACINCO" type="number" class="FormText"
                                onkeyup="this.value = this.value.toUpperCase();" ></p>
                    </td>
                    <td class="Ingresar" colspan="1">
                        <p>(25%): <input id="PORCEVEINTECINCO" step="any" name="PORCEVEINTECINCO" type="number" class="FormText"
                                onkeyup="this.value = this.value.toUpperCase();" ></p>
                    </td>
                </tr>
                <input type="number" step="any" name="GANANCIA" id="GANANCIA">
                <input id="updated_at" name="updated_at" type="hidden"
                        value="<?php echo date('Y-m-d'); ?>">
                    <input id="created_at" name="created_at" type="hidden"
                        value="<?php echo date('Y-m-d'); ?>">
            </table>
            <input type="submit" name="" id="boton" value="ENVIAR ORDEN" class="boton" onclick="ocultar();">
        </form>
        <br>
        <script type="text/javascript" src="js/Tablas.js"></script>
    </body>

    </html>
@endsection
