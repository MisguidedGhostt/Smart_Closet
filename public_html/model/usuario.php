<?php

  # Incluimos la clase conexion para poder heredar los metodos de ella.
  require_once('conexion.php');


  class Usuario extends Conexion
  {

    public function login($user, $clave)
    {
      

      # Nos conectamos a la base de datos
      parent::conectar();

      

      // El metodo salvar sirve para escapar cualquier comillas doble o simple y otros caracteres que pueden vulnerar nuestra consulta SQL
      $user  = parent::salvar($user);
      $clave = parent::salvar($clave);

      // Si necesitas filtrar las mayusculas y los acentos habilita las lineas 36 y 37 recuerda que en la base de datos debe estar filtrado tambien para una validacion correcta
      /*$user  = parent::filtrar($user);
      $clave = parent::filtrar($clave);*/

     

      // traemos el id y el nombre de la tabla usuarios donde el usuario sea igual al usuario ingresado y ademas la clave sea igual a la ingresada para ese usuario.
      $consulta = 'select id, nombre, cargo from usuarios where nombre="'.$user.'" and clave= MD5("'.$clave.'")';
      /*
        Verificamos si el usuario existe, la funcion verificarRegistros
        retorna el número de filas afectadas, en otras palabras si el
        usuario existe retornara 1 de lo contrario retornara 0
      */

      $verificar_usuario = parent::verificarRegistros($consulta);

      // si la consulta es mayor a 0 el usuario existe
      if($verificar_usuario > 0){

       

        $user = parent::consultaArreglo($consulta);


        

        session_start();

        /*
          Las variables de sesion son muy faciles de usar, es como
          declarar una variable, lo unico diferente es que obligatoria mente
          debes usar $_SESSION[] y .... el nombre de la variable ya no sera asi
          $miVariable sino entre comillas dentro del arreglo de sesion, 
          $_SESSION['miVariable'], recuerda que como declares la variable
          en este archivo asi mismo lo llamaras en los demas.
        */

        $_SESSION['id']     = $user['id'];
        $_SESSION['nombre'] = $user['nombre'];
        $_SESSION['cargo']  = $user['cargo'];

       

        /*
         
          cargo con valor: 1 es: Administrador
          cargo con valor: 2 es: usuario estandar
          puedes agregar cuantos cargos desees, en este ejemplo solo uso 2
        */

        // Verificamos que cargo tiene l usuario y asi mismo dar la respuesta a ajax para que redireccione
        if($_SESSION['cargo'] == 1){
          echo 'view/admin/index.php';
        }else if($_SESSION['cargo'] == 2){
          echo 'view/user/index.php';
        }



      }else{
        // El usuario y la clave son incorrectos
        echo 'error_3';
      }


      # Cerramos la conexion
      parent::cerrar();
    }

    public function registroUsuario($name, $email, $clave)
    {
      parent::conectar();

      $name  = parent::filtrar($name);
      $email = parent::filtrar($email);
      $clave = parent::filtrar($clave);


      // validar que el correo no exista
      $verificarCorreo = parent::verificarRegistros('select id from usuarios where email="'.$email.'" ');


      if($verificarCorreo > 0){
        echo 'error_3';
      }else{

        parent::query('insert into usuarios(nombre, email, clave, cargo) values("'.$name.'", "'.$email.'", MD5("'.$clave.'"), 2)');

        session_start();

        $_SESSION['nombre'] = $name;
        $_SESSION['cargo']  = 2;

        echo 'view/user/index.php';

      }

      parent::cerrar();
    }

  }


?>
