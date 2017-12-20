<?php


class ControllerRegistro extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->helper('form');
    $this->load->model('MdlRegistro');
  }

  function index()
  {
    $this->load->view('Registrar');
    // redirect('ControllerLogin');
  }

  function registrarU()
  {
    $usuario = $this->input->POST('usuario');
    $contrasena = md5($this->input->POST('contrasena'));
    $this->MdlRegistro->registrarU($usuario,$contrasena);
  }

}

?>
