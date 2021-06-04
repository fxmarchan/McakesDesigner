@extends('plantilla')
@section('informe')
    <!DOCTYPE html>
    <html>

    <head>
        <title>INFORME</title>

        <link rel="stylesheet" href="css/EstilosInforme.css">
        <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    </head>

    <body>
        <br>
        <table class="TablasGeneral" align="center" style="width: 100% margin: auto auto">
            <tr class="Ingresar">
                <td class="Ingresar" colspan="3"><img width="80" height="80" src="https://sd.keepcalms.com/i/keep-calm-i-m-the-cake-designer.png" alt=""></td>
                <td class="Ingresar" colspan="11">
                    <p style="color: white"><b>INFORME REALIZADAS POR M.CAKESDESIGNER</b>
                    </p>
                </td>
                <td class="Ingresar" colspan="3">
                    <p id="colorapro"><b>CÓDIGO:EC.UIO.02<br>REVISION:1<br>USO INTERNO</b></p>
                </td>
            </tr>
        </table>
        <br>
        <table id="TablaDatos" align="center" style="width: 100% margin: auto auto">
            <thead>
                <tr class="Ingresar">
                    <th class="Ingresar"><b>FECHA DE EMISIÓN</b></th>
                    <th class="Ingresar"><b>FECHA DE ENTREGA</b></th>
                    <th class="Ingresar"><b>NOMBRE CLIENTE</b></th>
                    <th class="Ingresar"><b>VENDEDOR</b></th>
                    <th class="Ingresar"><b>DESCRIPCIÓN</b></th>
                    <th class="Ingresar"><b>DESCRIPCIÓN PASTEL</b></th>
                    <th class="Ingresar"><b>DESCRIPCIÓN RELLENO</b></th>
                    <th class="Ingresar"><b>DESCRIPCIÓN FRUTA</b></th>
                    <th class="Ingresar"><b>DESCRIPCIÓN INSUMO</b></th>
                    <th class="Ingresar"><b>PRECIO PRODUCCIÓN</b></th>
                    <th class="Ingresar"><b>PORCENTAJE GANANCIA </b></th>
                    <th class="Ingresar"><b>GANANCIA </b></th>
                    <th class="Ingresar"><b>PRECIO FINAL</b></th>
                    <th class="Ingresar"><b>75%</b></th>
                    <th class="Ingresar"><b>25%</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr class="Ingresar">
                        <td class="Ingresar">{{ $pedido->FECHAEMISION }}</td>
                        <td class="Ingresar">{{ $pedido->FECHAENTREGA }}</td>
                        <td class="Ingresar">{{ $pedido->NOMBRECLI }}</td>
                        <td class="Ingresar">{{ $pedido->VENDEDOR }}</td>
                        <td class="Ingresar">{{ $pedido->DESCRIPCION }}</td>
                        <td class="Ingresar">{{ $pedido->COBERTURA }}-{{ $pedido->DESCRIPASTEL }}-{{ $pedido->CANTIDADPORPAS }}-{{ $pedido->PRECIOTOTAL }}</td>
                        <td class="Ingresar">{{ $pedido->DESCRIRELLENO }}-{{ $pedido->CANTPORCRELLE }}-{{ $pedido->PRECIORELLENO }}</td>
                        <td class="Ingresar">{{ $pedido->DESCRIFRUTA }}-{{ $pedido->GRAMOS }}-{{ $pedido->PRECIOFRUTA }}</td>
                        <td class="Ingresar">{{ $pedido->TIPOINSUMO }}-{{ $pedido->INSUMO }}-{{ $pedido->CANTINSUMO }}-{{ $pedido->PRECIOINSUMO }}</td>
                        <td class="Ingresar" id="suma">{{ $pedido->PRECIOPRODUCCION }}</td>
                        <td class="Ingresar">{{ $pedido->PORGANANCIA }}%</td>
                        <td class="Ingresar" id="suma">{{ $pedido->GANANCIA }}</td>
                        <td class="Ingresar" id="suma">{{ $pedido->PRECIOFINAL }}</td>
                        <td class="Ingresar" id="suma">{{ $pedido->PORCESETENTACINCO }}</td>
                        <td class="Ingresar" id="suma">{{ $pedido->PORCEVEINTECINCO }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
        <br>
        <br>
        <form id="form-param">
            <div class="buttons" style="margin: 0 auto">
                <table>
                    <tr>
                        <td><button type="button" class="addParam" id="addParam">Agregar Parametro</button></td>
                        <td><button type="button" class="showResults" id="showResults">Mostrar Resultados</button></td>
                        <td><button type="button" class="resetgrap" id="resetgrap">Nuevo Gráfico</button></td>
                    </tr>
                </table>
            </div>
            <div class="container" style="padding: 40px 420px">
                <div class="container">
                    <input type="text" class="parametro" placeholder="parametro"><input type="number" class="valor"
                        placeholder="valor">
                </div>
                <div class="container">
                    <input type="text" class="parametro" placeholder="parametro"><input type="number" class="valor"
                        placeholder="valor">
                </div>
            </div>
        </form>
        <div id="grafico"></div>
        <script src="js/Graficos.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
        <script src="https://cdn.datatables.net/plug-ins/1.10.20/api/sum().js"></script>
        <script src="js/Informe.js"></script>
        <br>
        <br>
    </body>

    </html>
@endsection
