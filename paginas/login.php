<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login y Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"/>
    <link rel="icon" href="../Assets/img/ico/thefreeforty_register_icon-icons.com_66338.ico" type="image/ico"/>
    <link rel="stylesheet" href="./usuario/assets/estilos.css" />
    <link rel="stylesheet" href="../Assets/css/menu.css" />
  </head>
  <body>
    <main>
      <div class="contenedor__todo">
        <div class="caja__trasera">
          <div class="caja__trasera-login">
            <h3>¿Ya tienes una cuenta?</h3>
            <p>Inicia sesión para entrar en la página</p>
            <button id="btn__iniciar-sesion">Iniciar Sesión</button>
          </div>
          <div class="caja__trasera-register">
            <h3>¿Aún no tienes una cuenta?</h3>
            <p>Regístrate para que puedas iniciar sesión</p>
            <button id="btn__registrarse">Registrarse</button>
          </div>
        </div>

        <!--Formulario de Login y registro-->
        <div class="contenedor__login-register">
          <!--Login-->
          <form action="./usuario/usuario.php" method="POST" class="formulario__login">
            <h2>Iniciar Sesión</h2>
            <input type="text" name="username" placeholder="Usuario" required />
            <input type="password" name="password" placeholder="Contraseña" required />
            <input type="hidden" name="login" value="1" />
            <button>Entrar</button>
          </form>

          <!--Register-->
          <form action="./usuario/usuario.php" method="POST" class="formulario__register">
           <h2>Regístrarse</h2>
                <input type="email" name="email" placeholder="Correo Electronico" required>
                <input type="text" name="username" placeholder="Usuario" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="hidden" name="register" value="1">
            <button>Registrarse</button>
          </form>

        </div>
      </div>
    </main>

    <script src="./usuario/assets/script.js"></script>
  </body>
</html>
