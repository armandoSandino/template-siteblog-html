  <footer>

        <h1>Sorftweb</h1>
        <p>Todos los derechos reservados © 2019</p>
        <p> by Sarah Solution</p>

    <nav>
        <ul>
            <li class="nav-item"><a href="./index.php">Inicio</a></li>
            <li class="nav-item"><a href="#">Tutoriales</a></li>
            <li class="nav-item"><a href="#">Blog</a></li>
            <li class="nav-item"><a href="#">Servicios</a></li>
            <li class="nav-item"><a href="#">Contactos</a></li>
        </ul>
        <div class="menu-bar" id="menu" name="menu">Menu
            <span class="hamburger-icon"><i class="fa fa-bars"></i></span>
        </div>
    </nav>

    </footer>
    
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/push.min.js"></script>
    <script type="text/javascript">
        function Mensaje( $mensaje, $tipo ){
            Push.create("Opciones",{
                body:"Selecciona una opcion del menu.",
                icon: "img/logo-magtimus.png",
                timeout:4000,
                onclick: function(){
                    //window.location="https://www.facebook.com/juan.sandino2";
                    document.location.href="https://www.facebook.com/juan.sandino2";
                    this.close();
                }
            });
        }
    </script>
</body>

</html>