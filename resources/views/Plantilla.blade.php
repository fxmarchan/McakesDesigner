<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" href="css/EstilosPlantilla.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<header>
    <input type="checkbox" id="btn-menu">
    <label for="btn-menu"><img width="30" height="30"
            src="https://cdn4.iconfinder.com/data/icons/navigation-40/24/hamburger-menu-512.png" alt=""></label>
    <nav class="menu">
        <ul>
            <li><a href="{{ route('home') }}"><img width="80" height="80" src="https://sd.keepcalms.com/i/keep-calm-i-m-the-cake-designer.png" alt=""></a></li>
            <li><a href="{{ route('home') }}"> <br> Mision y visión <br> de la empresa </a></li>
            <li><a href="{{ route('home') }}"> <br> Quienes <br> somos </a> </li>
            <li><a href="{{ route('home') }}"> <br> Catálogos y <br> Diseños </a> </li>
            <li><a href="{{ route('home') }}"> <br> Personaliza tu <br> pedido </a> </li>
            <li><a href="{{ route('formato') }}"> <br> Gestión de <br> Pedidos </a></li>
            <li>
                <form action="{{ route('informe') }}" method="POST">@csrf<input id="Mandar" type="submit"
                        name="" value="Pedidos" class="boton"
                        onclick="javascript:this.form.submit();this.disabled= true;"></form>
            </li>
            <li><a href="{{ route('home') }}"> <br> Quejas y <br> Sugerencias </a> </li>
                <a href=""></a>
        </ul>
    </nav>
</header>

<body>
    <div class="container">
        @yield('Home1')
        @yield('EjecutarFormato')
        @yield('Default')
        @yield('frutas')
        @yield('insumos')
        @yield('pasteles')
        @yield('rellenos')
        @yield('informe')
        {{-- @yield('Formulario')
        
        @yield('EjecutarGasolina')
        @yield('AproEstaciones')
        @yield('AproGuest')
        @yield('Default1') --}}
    </div>
    <hr style="width:100%">
    <hr style="width:100%">
    <table class="redes">
        <tr>
            <td><a href="https://www.instagram.com/m.cakesdesigner/" class="fa fa-facebook"></a></td>
            <td><a href="https://www.instagram.com/m.cakesdesigner/" class="fa fa-google"></a></td>
            <td><a href="https://www.instagram.com/m.cakesdesigner/" class="fa fa-youtube"></a></td>
            <td><a href="https://www.instagram.com/m.cakesdesigner/" class="fa fa-instagram"></a></td>
        </tr>
    </table>

    <footer>
        <hr style="width:100%">
        <hr style="width:100%">
        <table class="prenultimo">
            <tr>
                <td>
                    <h3>M.CAKESDESIGNER</h3><br>Año de fundación.
                </td>
                <td>
                    <h3>INFORMACION</h3>
                    Quito-Ecuador Contáctanos al 0985582099. Reserva tu pedido.
                </td>
                <td>
                    <h3>CEO</h3>
                    PARTE DEL CEO
                </td>
            </tr>
        </table>
        <hr style="width:100%">
        <hr style="width:100%">
        <table class="foooter">
            <tr>
                <td><img width="80" height="100" src="https://sd.keepcalms.com/i/keep-calm-i-m-the-cake-designer.png"
                        alt=""></td>
                <td>Macarons franceses, cakes y cupcakes personalizados🎂,bocaditos de sal y dulce🧁.</td>
            </tr>
        </table>
    </footer>
</body>

</html>
