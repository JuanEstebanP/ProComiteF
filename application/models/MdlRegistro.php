<?php
/**
 *
 */
class MdlRegistro extends CI_Model
{

  function registrarU($usuario,$contrasena)
  {
    $this->db->query("INSERT INTO tbl_usuarios VALUES (NULL,'$usuario','$contrasena')");
  }
}



 ?>
