<!DOCTYPE html>
<html>
    <head>
        <title>TaxiCorp</title>
        <meta charset="UTF-8">
        <meta name="description" content="Empresa de taxis">
        <meta name="author" content="Laura">
        <meta name="keywords" content="Taxi,Chofer,Servicios">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estilos.css" type="text/css">
        <script type="text/javascript" src="//code.jquery.com/jquery-3.1.1.min.js"></script>
        <!-- enlace a los estilos -->
        <link type="text/css" media="screen" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="Stylesheet" />
        <!-- enlace a la versión de jquery ui-->
        <script   src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"   integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="   crossorigin="anonymous"></script>
        <script type="text/javascript" src="scripts.js"></script>
    </head>
    <body>
            <header>
                <!-- cabecera con logo, menú y animación de presentación-->
		<div>
                    <a href="index.php">
                        <img id="logo_sup" src="imagenes/taxilogo.png" alt="logo taxi">
                    </a>
		</div> 
			<nav>
			<!-- menu superior -->
			    <ul id="lista_menu">
                                <li id="submenu1">Solicitud de taxis
                                    <div id="formalizar"><a href="#">Formalizar pedido taxi</a></div><!--formalizar.php-->
                                    <div id="finalizar"><a href="#">Finalizar Carrera Taxi</a></div><!--finalizar.php-->
                                </li>
			        <li id="submenu2">Control taxis
                                    <div id="alta"><a href="#">Alta nuevos taxis</a></div><!--altas.php-->
                                    <div id="listado"><a href="#">Listado general de taxis</a></div><!--listado.php-->
                                    <div id="modificar"><a href="#">Modificar datos taxis</a></div><!--modificar.php-->
                                </li>
                                <li id="submenu3">
                                    <a href="#">Gestión Caja</a>
                                </li> 
			    </ul>
			</nav>
	    </header>
            <div class="contenido">
                <p>Elija una opción del menú superior para empezar.</p>
            </div>
    </body>
</html>
