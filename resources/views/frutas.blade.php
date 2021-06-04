@extends('plantilla')
@section('frutas')
<!DOCTYPE html>
    <html>

    <head>
        <title>Frutas</title>
        <link rel="stylesheet" href="css/EstilosTablasFormatos.css">
    </head>
    <body>
        <table class="Ingresar">
            <thead>
                <tr class="Ingresar">
                    <th class="Ingresar"><b>DESCRIPCIÓN</b></th>
                    <th class="Ingresar"><b>Gramos o Cantidad</b></th>
                    <th class="Ingresar"><b>Precio</b></th>
                    {{--<th class="Ingresar"><b>PRECIO PORCIÓN DE 15</b></th>
                    <th class="Ingresar"><b>PRECIO TOTAL DE 15</b></th>--}}
                </tr>
            </thead>
            <tbody>
                @foreach ($frutas as $fruta)
                    <tr class="Ingresar">
                        <td class="Ingresar">{{ $fruta->Descripción }}</td>
                        <td class="Ingresar">{{ $fruta->Gramos}}</td>
                        <td class="Ingresar">{{ $fruta->Precio }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
@endsection