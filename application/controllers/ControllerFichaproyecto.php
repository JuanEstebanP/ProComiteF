<?php


class ControllerFichaproyecto extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->helper('form');
    $this->load->model('MdlFichaproyecto');
  }
  function index()
  {
    if ($this->session->userdata('usuario')) {
      $dt = $this->input->post('txtidfichaG');
      $data['fichasG'] = $this->MdlFichaproyecto->FichasBG($dt);

      $data['Ficha2'] = $this->MdlFichaproyecto->ConsultarFichasproyectos();
      $data['Fichaproyectos'] = $this->MdlFichaproyecto->conCliente();
      $data['ficha'] = $this->MdlFichaproyecto->ConsultarFichasGrupos();
      $this->load->view('FichasProyecto',$data);
    }else {
      redirect('ControllerLogin');
    }


    //$this->load->view('Ficha',$data);

  }


  public function InsertarFichaproyecto(){



  $carpeta = "./uploads/";
  opendir($carpeta);
  $destino =  $carpeta.$_FILES['file_pr']['name'];
  copy($_FILES['file_pr']['tmp_name'],$destino);

  $txtNombre = $this->input->post('txtNombre');
  $txtObjetivo = $this->input->post('txtObjetivo');
  $txtVersion = $this->input->post('txtVersion');
  $txtCliente = $this->input->post('txtCliente');
  $txtFichagrupo = $this->input->post('txtFichagrupo');
  $this->MdlFichaproyecto->InsertarFichaproyecto($txtNombre,$txtObjetivo,$destino,$txtVersion,$txtCliente,$txtFichagrupo);



}

  function Editar(){

    $dt = $this->input->post('id_ficha');
    $data = $this->MdlFichaproyecto->EditCodigo($dt);
    echo json_encode($data);
  }

  function EditarFichaproyecto(){
    $txtId = $this->input->post('txtIdModificar');
    $txtNombre = $this->input->post('txtNombreModificar');
    $txtObjetivo = $this->input->post('txtObjetivoModificar');
    $txtVersion = $this->input->post('txtVersionModificar');
    $carpeta = "./uploads/";
    opendir($carpeta);
    $destino =  $carpeta.$_FILES['fileC']['name'];
    copy($_FILES['fileC']['tmp_name'],$destino);
    $txtCliente = $this->input->post('txtClienteModificar');
      $txtFichagrupoM = $this->input->post('txtFichagrupoM');
    $txtEstado = $this->input->post('txtEstadoModificar');
    $this->MdlFichaproyecto->EditarFichaproyecto($txtId, $txtNombre,$txtObjetivo,$txtVersion,$destino,$txtCliente, $txtFichagrupoM ,$txtEstado);
    redirect('ControllerFichaproyecto');
  }

  function consultarAprendiz()
  {
    $dt = $this->input->post('id');
    $apren = $this->MdlFichaproyecto->consultaAprendices($dt);
    echo json_encode($apren);
  }


  function XaprendicesfpC()
  {
    $txtid = $this->input->post('id');
    $this->MdlFichaproyecto->XaprendicesfpM($txtid);

  }


}






?>
