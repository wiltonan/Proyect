<?php
session_start();
require_once '../model/connection.php';
require_once '../model/login.class.php';

$accion =$_REQUEST['action'];
  switch ($accion) {
    case 'login':
      $usu = $_POST['txtusname'];
      $pas = $_POST['txtkey'];
      try {
        $resul = Validar::Login($usu);
        if (password_verify($pas, $resul['Password'])) {
          if ($resul['Estado']=="activo"){
            if ($resul['cod_rol']==1) { //verificar este dato que no se cual es:
              // $_SESSION['documento'] = $resul['usu_num_docum'];
              // $_SESSION['nombre'] = $resul['usu_nom'];
              echo "<script>location.href='redireccionamiento hacia donde quiera' </script>";

                }else {
                   $_SESSION['documento1'] = $resul['usu_num_docum'];
                   $_SESSION['codigo1'] = $resul['usu_cod'];
                   $_SESSION['nombre1'] = $resul['usu_nom'];
                   echo "<script>location.href='redireccionamiento hacia donde quiera' </script>";
                }

              }else {
                  echo "<script>alert('El usuario esta inactivo'); self.location.href='../'; </script>";
              }

            }else {
              echo "<script>alert('Usuario o contraseña incorrecto'); self.location.href='../'; </script>";
            }
      } catch (Exception $e) {
      }

      break;

    default:
      # code...
      break;
  }



 ?>
