<?php

session_start ();
if (isset($_SESSION['sesion_mail'])){
  //echo "Si existe sesion";
  $email_session = $_SESSION['sesion_mail'];
  $sql = "SELECT * FROM tb_usuarios WHERE email='$email_session'";
  $query = $pdo->prepare($sql);
  $query->execute();
  $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
  foreach($usuarios as $usuario){
  
    $nombres_sesion= $usuario['nombres'];
  }

}else
{
  echo "No existe sesion";
  header ('location:'.$URL.'/login');
}
?>