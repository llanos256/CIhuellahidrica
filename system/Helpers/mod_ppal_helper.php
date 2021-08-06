<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('generar_pdf'))
{
   function generar_pdf($arrHeading,$arrData,$sTitulo){
       
        //  validamos los priemros dos parametros
        if(!is_array($arrHeading) or !is_array($arrData)){
         return 0;
        }
        // seteamos el titulo, si es necesario
        $sTitulo = empty($sTitulo) ? 'NO SE HA DEFINIDO EL TITULO..' : $sTitulo;
       
        //instanciamos al objeto codeigniter
        $CI =& get_instance();
        $CI->load->library('table');

  // configuraciones de la tabla
 $tmpl = array('table_open' => '<table border="0" cellpadding="2" cellspacing="1">');
 $CI->table->set_template($tmpl); 
 $CI->table->set_heading($arrHeading);

 // iniciamos el HTML que enviaremos para generar el PDF
 $html = "<html><head>
        <style>
            h1{
                font-family: times new roman;
                font-size: 50px;
                text-align:center;
            }
            table {
                color: #fff;
  font-weight: bold;
                font-family: Arial Black;
                font-size: 28px;
                background-color: #B10020;
                border: red 0px solid;
            }
            table td {
  font-weight: none;
                color: #000;
                background-color: #FAFAFA;
                font-size: 26px;
                font-family: times new roman;
            }
        </style>
        </head><body><h1>$sTitulo</h1>";

 $html .= $CI->table->generate($arrData); 
        $html .= '</body></html>';

 // para evitar errores, limpiamos, 
 // deshabilitamos los búferes de salida
 if(ob_get_contents()){
  ob_end_clean();
 }

 // incluimos el plugin
        require_once('./plugins/tcpdf/config/lang/spa.php');
 require_once('./plugins/tcpdf/tcpdf.php');
 
 // estas son las configuraciones para la generacion del PDF
 // los detalles los encuentras en la pagina oficial
 $pdf = new TCPDF(PDF_PAGE_ORIENTATION,PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
 $pdf->SetCreator(PDF_CREATOR);
 $pdf->SetAuthor('aqui_tu_nombre');
 $pdf->SetTitle($sTitulo);
 $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001');
 $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
 $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
 $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
 $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
 $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
 $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
 $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
 $pdf->setLanguageArray($l);
 $pdf->setFontSubsetting(true);
 $pdf->SetFont('dejavusans', '', 12, '', true);
 $pdf->AddPage();
 $pdf->writeHTML($html, true, false, true, false, '');
 $pdf->Output('','D');
  }  
}

# END Mod Ppal Class
/* End of file mod_ppal_helper.php */
/* Location: ./system/libraries/Mod_ppal.php */