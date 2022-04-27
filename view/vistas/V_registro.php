
<?php require_once "view/vistas/heder.php"; 
require ('view/vistas/heder.php')
?>
   <div class="heder">
        <div class="logIn">
        <button class="botonIngresar"> <a class="Ingresar" href="http://localhost/ProyectoIS/">Iniciar Sesion</a> </button>
    </div>
    </div>


    <div class="contenido">
        <div class="padreFormulario">
            <div class="h3Titulo">
                <h3>Nuevo Registro</h3>
            </div>
            <div class="formulario">
    
                <form action="logUp.php">
                    <div class="logo">
                        <img class="imgLogo" src="view/img/logo.png" alt="">
                    </div>
        
                    <div>
                        <input class="textInput" type="text" placeholder="Nombres">
                    </div>
                    <div>
                        <input class="textInput" type="text" placeholder="Apellidos">
                    </div>
                    <div>
                        <input class="textInput" type="text" placeholder="Carnet">
                    </div>
                    <div>
                        <input class="textInput" type="text" placeholder="Edad">
                    </div>
                    <div>
                        <input class="textInput" type="text" placeholder="Grado">
                    </div>
    
                    <button class="botonIngresar">
                            <input class="Ingresar" type="submit" value="Crear" name="crear">  
                            <input type='hidden' name='tipo' value='login'> 
                        </button>  
    
                </form>
    
                
            </div>
    
        </div>
        
    </div>
    
<?php require_once "view/vistas/foder.php" ?>