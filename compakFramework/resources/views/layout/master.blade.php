<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top d-flex justify-content-center align-items-center translucido">

            <div class="d-flex justify-content-center align-items-center">
                <a class="navbar-brand" href="#">
                    <img src="images/logoMenu.jpg" width="60" height="60" class="d-inline-block align-middle" alt="">
                </a>

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link" href="#">EQUIPO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">NOTICIAS</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="nav-item btn dropdown-toggle translucido text-white-50" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                COMPETICIONES
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button">Próximas</button>
                                <button class="dropdown-item" type="button">Finalizadas</button>
                            </div>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">GALERÍA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PARTNERS</a>
                    </li>
                </ul>
            </div>
        </nav>

        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('COSAS')
        </div>
    </body>
</html>
