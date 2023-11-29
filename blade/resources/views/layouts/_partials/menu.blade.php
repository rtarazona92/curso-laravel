<header>
<div class="header">
        <div class="container">
            <!-- Agregar el elemento div con la clase logo -->
            <div class="logo">
                <!-- Agregar el elemento img con el atributo src y el atributo alt -->
                <img src="logo.png" alt="Logo de la página web">
            </div>
            <nav>
                <ul class="menu">
                    <li class="menu-item dropdown">
                        <a href="{{route('index')}}">Inicio</a>
                        <ul class="submenu">
                            <li><a href="#">Sobre nosotros</a></li>
                            <li><a href="#">Contacto</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="{{route('about')}}">Nosotros</a>
                        <ul class="submenu">
                            <li><a href="#">Categoría 1</a></li>
                            <li><a href="#">Categoría 2</a></li>
                            <li><a href="#">Categoría 3</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="{{route('carreras')}}">Carreras</a>
                        <ul class="submenu">
                            <li><a href="#">Servicio 1</a></li>
                            <li><a href="#">Servicio 2</a></li>
                            <li><a href="#">Servicio 3</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="{{route('admision')}}">Admision</a>
                        <ul class="submenu">
                            <li><a href="#">Entrada 1</a></li>
                            <li><a href="#">Entrada 2</a></li>
                            <li><a href="#">Entrada 3</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="{{route('egresados')}}">Egresados</a>
                        <ul class="submenu">
                            <li><a href="#">Imagen 1</a></li>
                            <li><a href="#">Imagen 2</a></li>
                            <li><a href="#">Imagen 3</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="{{route('documentos-de-gestion')}}">Transparencia</a>
                        <ul class="submenu">
                            <li><a href="#">Opción 1</a></li>
                            <li><a href="#">Opción 2</a></li>
                            <li><a href="#">Opción 3</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>