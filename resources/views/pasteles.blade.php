@extends('plantilla')
@section('pasteles')
<!DOCTYPE html>
    <html>

    <head>
        <title>Pasteles</title>
        <link rel="stylesheet" href="css/EstilosTablasFormatos.css">
    </head>
    <body>
        <table class="Ingresar">
            <thead>
                <tr class="Ingresar">
                    <th class="Ingresar"><b>Cobertura</b></th>
                    <th class="Ingresar"><b>Descripción</b></th>
                    <th class="Ingresar"><b>PRECIO PORCIÓN DE 10</b></th>
                    <th class="Ingresar"><b>PRECIO TOTAL DE 10</b></th>
                    <th class="Ingresar"><b>PRECIO PORCIÓN DE 15</b></th>
                    <th class="Ingresar"><b>PRECIO TOTAL DE 15</b></th>
                    <th class="Ingresar"><b>PRECIO PORCIÓN DE 20</b></th>
                    <th class="Ingresar"><b>PRECIO TOTAL DE 20</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pasteles as $pastel)
                    <tr class="Ingresar">
                        <td class="Ingresar">{{ $pastel->Cobertura }}</td>
                        <td class="Ingresar">{{ $pastel->Descripción}}</td>
                        <td class="Ingresar">{{ $pastel->PrecioPorción10 }}</td>
                        <td class="Ingresar">{{ $pastel->PrecioTotal10 }}</td>
                        <td class="Ingresar">{{ $pastel->PrecioPorción15 }}</td>
                        <td class="Ingresar">{{ $pastel->PrecioTotal15 }}</td>
                        <td class="Ingresar">{{ $pastel->PrecioPorción20 }}</td>
                        <td class="Ingresar">{{ $pastel->PrecioTotal20 }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
@endsection