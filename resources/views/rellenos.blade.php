@extends('plantilla')
@section('rellenos')
<!DOCTYPE html>
    <html>

    <head>
        <title>Rellenos</title>
        <link rel="stylesheet" href="css/EstilosTablasFormatos.css">
    </head>
    <body>
        <table class="Ingresar">
            <thead>
                <tr class="Ingresar">
                    <th class="Ingresar"><b>Descripción</b></th>
                    <th class="Ingresar"><b>PRECIO PORCIÓN DE 10</b></th>
                    <th class="Ingresar"><b>PRECIO PORCIÓN DE 15</b></th>
                    <th class="Ingresar"><b>PRECIO PORCIÓN DE 20</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rellenos as $relleno)
                    <tr class="Ingresar">
                        <td class="Ingresar">{{ $relleno->Descripción}}</td>
                        <td class="Ingresar">{{ $relleno->PrecioPorción10 }}</td>
                        <td class="Ingresar">{{ $relleno->PrecioPorción15 }}</td>
                        <td class="Ingresar">{{ $relleno->PrecioPorción20 }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
@endsection