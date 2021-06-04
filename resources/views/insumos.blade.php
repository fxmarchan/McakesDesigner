@extends('plantilla')
@section('insumos')
<!DOCTYPE html>
    <html>

    <head>
        <title>Insumos</title>
        <link rel="stylesheet" href="css/EstilosTablasFormatos.css">
    </head>
    <body>
        <table class="Ingresar">
            <thead>
                <tr class="Ingresar">
                    <th class="Ingresar"><b>TIPO</b></th>
                    <th class="Ingresar"><b>Cantidad</b></th>
                    <th class="Ingresar"><b>INSUMO</b></th>
                    <th class="Ingresar"><b>PRECIO</b></th>
                    <th class="Ingresar"><b>PRECIO UNITARIO</b></th>
                    {{--<th class="Ingresar"><b>PRECIO PORCIÓN DE 15</b></th>
                    <th class="Ingresar"><b>PRECIO TOTAL DE 15</b></th>--}}
                </tr>
            </thead>
            <tbody>
                @foreach ($insumos as $insumo)
                    <tr class="Ingresar">
                        <td class="Ingresar">{{ $insumo->Tipo }}</td>
                        <td class="Ingresar">{{ $insumo->Cantidad}}</td>
                        <td class="Ingresar">{{ $insumo->Insumos }}</td>
                        <td class="Ingresar">{{ $insumo->Precio }}</td>
                        <td class="Ingresar">{{ $insumo->Unitario }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
@endsection