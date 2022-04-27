<?php require_once "view/vistas/heder.php" ?>

  <!--Ventana de inicio de sesion-->


<!--boton de registro -->
<div class="heder">
    <div class="logIn">
    <button class="botonIngresar">
    <a class="Ingresar" href="http://localhost/ProyectoIS/registro.php">Registrarse</a>
        
    </button>
    
    </div>
</div>

<!-- fin del boton registro-->


<!--conenedor del formulario -->
<div class="contenido">
    
<!--contenedor para ordenar titulos y botones fuera del formualrio -->
    <div class="padreFormulario">
        
<!--Titulo del formauario-->
        <div class="h3Titulo">
            <h3>Inicio de sesion</h3>
        </div>
        
<!-- formulario -->
        <div class="formulario">

            <form action="registro.php" method="POST">
                
                <div class="logo">
                    <img class="imgLogo" src="view/img/logo.png" alt="">
                </div>

                <div class="texto">
                    <input class="textInput" type="text" placeholder="Usuario">
                </div>

                <div class="texto">
                    <input class="textInput" type="password" placeholder="Contrasenia">
                </div>
            
            
<!--boton de enviar-->
                    <button class="botonIngresar">
                    <input class="Ingresar" type="submit" value="Ingresar" name="registro">  
                    <input type='hidden' name='tipo' value='login'> 
                </button>  

            </form>
        </div>
    </div>
    
</div>


<?php require_once "view/vistas/foder.php" ?>


