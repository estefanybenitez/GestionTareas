<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- BOXICONS  --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- CUSTOM CSS  --}}
    <link rel="stylesheet"  type="text/css"  href="./css/estilodashboard.css">
    {{-- CUSTOM JS  --}}
    <script src="./js/dashboardjs.js" defer></script>
</head>
<body c>

    <div class="menu-dashboard" >
        {{-- top menu  --}}
        <div class="top-menu">
            <div class="logo">
                {{-- logo  --}}
                {{-- <img src="logo" alt=""> --}}
                <img src="../imgs/icon.ico" alt="">
                {{-- <img src="../imgs/icon.ico" class="logo"> --}}
                <span>Visius</span>

            </div>
{{-- barra para abrir menu --}}
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>      
        </div>

        {{-- input search  --}}
        <div class="input-search">
            <i class='bx bx-search'></i>
            <input type="text" class="input" placeholder="Buscar">
        </div>
        {{-- menu  --}}
        <div class="menu">
            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <span>Dashboard</span>
            </div>

            <div class="enlace">
                <i class="bx bx-user"></i>
                <span>Usuario</span>
            </div>

            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <span>Analiticas</span>
            </div>

            <div class="enlace">
                <i class="bx bx-message-square"></i>
                <span>Mensajes</span>
            </div>

            <div class="enlace">
                <i class="bx bx-file-blank"></i>
                <span>Archivos</span>
            </div>

            <div class="enlace">
                <i class="bx bx-cart"></i>
                <span>Pedidos</span>
            </div>

            <div class="enlace">
                <i class="bx bx-heart"></i>
                <span>Favoritos</span>
            </div>
            <div class="enlace">
                <i class="bx bx-cong"></i>
                <span>Configuracion</span>
            </div>


        </div> {{-- fin menu  --}}


    </div>


</body>
</html>