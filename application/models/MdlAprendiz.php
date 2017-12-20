<?php

class MdlAprendiz extends CI_Model
{


  function InsertarAprendiz($txtNombre, $txtApellido, $txtDocumento, $txtCorreo)
  {
    $this->db->query("call sp_insertarAprendiz('$txtNombre', '$txtApellido', '$txtDocumento', '$txtCorreo')");
  }

  function ConsultarAprendices()
  {
    return $this->db->query("call sp_consultarAprendices")->result_array();
  }

  function EditCodigo($id_aprendiz)
  {

    return $this->db->query("call sp_idAprendiz('$id_aprendiz')")->row_array();

  }
  function EditarAprendiz($txtIdModificar,$txtNombreModificar, $txtApellidoModificar, $txtDocumentoModificar, $txtCorreoModificar)
  {
    $this->db->query("CALL sp_editarAprendiz('$txtIdModificar','$txtNombreModificar','$txtApellidoModificar',
    '$txtDocumentoModificar','$txtCorreoModificar')");
  }

  function Importar($nombre,$apellido,$documento,$correo)
  {
    $this->db->query("INSERT INTO tbl_aprendiz(nombre,apellido,documento,correo) VALUES('$nombre','$apellido','$documento','$correo')");
  }

  function doc($id)
  {
    return $this->db->query("SELECT documento FROM tbl_aprendiz where documento = '$id'")->result_array();
  }

  function consultarUsuario()
  {
    return $this->db->query("SELECT id FROM tbl_usuarios")->result_array();
  }
}


?>
