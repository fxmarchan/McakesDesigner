@extends('plantilla')

@section('Default')
    <!DOCTYPE html>
    <html>

    <head>
        <title>SERTECPET</title>
        <link rel="stylesheet" href="css/EstilosDefault.css">
    </head>

    <body>
        <form class="box" action="{{ route('home') }}">
            @csrf
            <div class="conteiner">
                <h1>¡Proceso realizado con exito!</h1>
                <input type="submit" name="" value="A C E P T A R" class="botonEN">
            </div>
        </form>
    </body>

    </html>
@endsection
