<?php require_once "view/vistas/heder.php"; ?>

<!--Ventana de inicio de sesion-->


<!--boton de registro -->
    <div class="heder">
        
        <button>Registrarse</button>
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
    
                <form action="index.php">
                    <div class="logo">
                        <img class="imgLogo" src="view/img/logo.png" alt="">
                    </div>
                    <div>
                        <input type="text" placeholder="Usuario">
                    </div>
                    <div>
                        <input type="password" placeholder="Contrasenia">
                    </div>
                    <div>
                        <input type="password" placeholder="Ingrese nuevamente su contrasenia">
                    </div>

                    <div class="enviar">
                    <button>
						<input type="submit" value="Crear" name="registro">  
						<input type='hidden' name='tipo' value='login'> 
					</button>  

                    </div>
                </form>
                
<!--boton de enviar-->
                
            </div>
    
        </div>
        
    </div>

<?php require_once "view/vistas/foder.php" ?>



