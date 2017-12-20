<?php


class Controllerlistprograma extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->helper('form');
    $this->load->model('Mdllistprograma');

  }

  function index()
  {
    if ($this->session->userdata('usuario')) {
      $data['fichas'] = $this->Mdllistprograma->fichasGrupo();
      $data['programaciones'] = $this->Mdllistprograma->programaciones();
      $this->load->view('ListarProgra',$data);
    }else {
      redirect('ControllerLogin');
    }


  }

  public function editarProgramacion(){
    $txtidprogramacionModificar = $this->input->post('oculto');
    $txttituloModificar = $this->input->post('tituloModificar');
    $txtfechaModificar = $this->input->post('fechaModificar');
    $txthoraModificar = $this->input->post('horaModificar');
    $txtlugarModificar = $this->input->post('lugarModificar');

    $this->Mdllistprograma->editarProgramacion($txtidprogramacionModificar, $txttituloModificar,$txtfechaModificar, $txthoraModificar, $txtlugarModificar);
    redirect('Controllerlistprograma');

  }

  function fichas()
  {
    $f = $this->input->post('id');
    $data = $this->Mdllistprograma->fichasXprogramacion($f);
     echo json_encode($data);
  }


  public function generarPDFtodo($valor){


    $list2 = $this->Mdllistprograma->instructores($valor);
    $cuerpo1 = "";
    foreach ($list2 as $tabla) {
      $cuerpo1 .= "<tr><td style='text-align:center;'>".$tabla['id_instructor']."</td>
      <td style='text-align:center;'>".$tabla['nombre']."</td>
      <td style='text-align:center;'>".$tabla['apellido']."</td>
      <td style='text-align:center;'>".$tabla['documento']."</td>
      <td style='text-align:center;'>".$tabla['correo']."</td></tr>";
    }

    $list3 = $this->Mdllistprograma->fichas($valor);
    $cuerpo2 = "";
    foreach ($list3 as $tabla) {
      $cuerpo2 .= "<tr><td style='text-align:center;'>".$tabla['id_ficha']."</td>
      <td style='text-align:center;'>".$tabla['titulo']."</td>
      <td style='text-align:center;'>".$tabla['obj_general']."</td>
      <td style='text-align:center;'>".$tabla['version']."</td>
      <td style='text-align:center;'>".$tabla['observacion']."</td>
      <td style='text-align:center;'>".$tabla['nombreEstado']."</td></tr>";

    }

    require_once('TCPDF/tcpdf.php');

    // create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    // $pdf->SetAuthor('Nicola Asuni');
    $pdf->SetTitle('Reporte Comité');
    // $pdf->SetSubject('TCPDF Tutorial');
    // $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
    // set default header data
    $pdf->SetHeaderData("", PDF_HEADER_LOGO_WIDTH, "Reporte", "Comite de evaluación", array(0,64,255), array(0,64,128));
    $pdf->setFooterData(array(0,64,0), array(0,64,128));

    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // ---------------------------------------------------------


    // set default font subsetting mode
    // $pdf->setFontSubsetting(true);

    // Set font
    // dejavusans is a UTF-8 Unicode font, if you only need to
    // print standard ASCII chars, you can use core fonts like
    // helvetica or times to reduce file size.
    $pdf->SetFont('dejavusans', '', 14, '', true); //texto dentro del pdf.

    // Add a page
    // This method has several options, check the source code documentation for more information.
    $pdf->AddPage();

    // set text shadow effect
    $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

    $list = $this->Mdllistprograma->consultarProgramacion($valor);

    $cuerpo = "";
    foreach ($list as $tabla) {
      $cuerpo .= "
      <tr><td style='text-align:center;'>".$tabla['id_programacion']."</td>
      <td style='text-align:center; color:red;'>".$tabla['titulo']."</td>
      <td style='text-align:center;'>".$tabla['fecha']."</td>
      <td style='text-align:center;'>".$tabla['hora']."</td>
      <td style='text-align:center;'>".$tabla['lugar']."</td></tr>";
    }


    $html = <<<EOF
<style>
        .informations {
            padding: 10px;
            margin: 10px;
            border: 1px dotted black;}
        .informations table {
            margin-top: 10px;}
        h2 {
            font-variant: small-caps;
            text-align: center;
            font-size: 19px;
            font-weight: bold;
            padding: 0px 0px 2px 5px;
            margin: 15px 0px 20px 0px;
            color: #000000;
            border-top: 1px dotted black;
            border-bottom: 1px dotted black;}

        h3 {
            width: 250px;
            font-variant: small-caps;
            font-size: 15px;
            font-weight: bold;
            padding: 0px 0px 0px 10px;
            color: #225D6D;
            border-bottom: 1px solid black;}

          th{
            border-bottom: 1px solid black;
            font-size:16px;
            text-align:center;
            color: #225D6D;
            }

          td{
            text-align:center;
            font-size:14px;
          }
</style>

            <div id='infos' class='informations'>
                <h3>Programación comité</h3>
                <br/>
                <table id='tablaUno'>
                <thead>
                    <tr>
                      <th>#</th>
                      <th>Título</th>
                      <th>fecha</th>
                      <th>Hora</th>
                      <th>Lugar</th>
                    </tr>
                </thead>
                <tbody>
                  ".$cuerpo
                </tbody>
                </table>
            </div>


            <div id='infos' class='informations'>
                <h3>Asistencia</h3>
                <br/>
                <table id='tablaUno'>
                 <thead>
                     <tr>
                       <th>#</th>
                       <th>Nombre</th>
                       <th>Apellidos</th>
                       <th>Documento</th>
                       <th>Correo</th>
                     </tr>
                 </thead>
                 <tbody>
                   ".$cuerpo1
                 </tbody>
                 </table>

            </div>

            <div id='infos' class='informations'>
                <h3>Fichas en comité</h3>
                <br/>
                <table id='tablaUno'>
                <thead>
                    <tr>
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Objetivo general</th>
                      <th>Versión</th>
                      <th>Cliente</th>
                      <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                  ".$cuerpo2
                </tbody>
                </table>
            </div>

EOF;



    // Print text using writeHTMLCell()
    $pdf->writeHTMLCell($w = 0, $h= 0, $x= '',$y='', $html);

    // echo $html;
    //
    // exit;


    $pdf->Output('InformeComite.pdf', 'I');


 }

}


?>
