<?php

namespace App\Controllers;
use App\Models\PersonaModel;
use Pdf;
//require_once('tcpdf.php');
//require '../Libraries/Pdf.php';
//use App\Libraries\Pdf;
//require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
//require('/tcpdf/tcpdf.php');
//require_once __DIR__ . '/vendor/autoload.php';
//require('Pdf.php');
//require_once __DIR__ . '/vendor/autoload.php';
class Admin extends BaseController
{
	//protected $pdf;
	protected $model;
	public function __construct()
    {
        $this->model = new PersonaModel();//creo objeto modelo
		//$this->pdf=new Pdf();
    }
	public function index()
	{
		return view('admin/login');
	}
	public function viewindex_admin()
	{
		return view('admin/index');
	}
	public function publicaciones()
	{
		$data['contenido'] = 'admin/publicaciones';
		return view('admin/index', $data);
	}
	public function reporte()
	{

		$db = \Config\Database::connect();
		$nopotable = $db->query("select count(id)/(select count(*) from persona where tipo_id=2)*100 as promedio
		from persona
		where potable=0 and tipo_id=2");
		$potable = $db->query("select count(id)/(select count(*) from persona where tipo_id=2)*100 as promedio
		from persona
		where potable=1 and tipo_id=2");
		foreach ($nopotable->getResult('array') as $row) {
		$np = $row['promedio'];
		}
		foreach ($potable->getResult('array') as $row) {
		$p = $row['promedio'];
		}
		//echo $np . ' - ' . $p;
		//exit();
		// $pdf = new Pdf();

		// $pdf=new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	
		// $pdf->SetMargins(PDF_MARGIN_LEFT, 30, PDF_MARGIN_RIGHT);
		// $pdf->Addpage();
		// $pdf->SetFillColor(0, 0, 255);
		// $pdf->PieSector($np, 20, 120, 'FD', false, 0, 2);

		// $pdf->SetFillColor(0, 255, 0);
		// $pdf->PieSector($p, 120, 250, 'FD', false, 0, 2);

		//  // write labels
		// $pdf->SetTextColor(255, 255, 255);
		// $pdf->Text(105, 65, 'BLUE');
		// $pdf->Text(120, 115, 'RED');
		// $pdf->Output('Consumo del agua', 'I');

	}
	public function listapdf(){
		//$pdf=new Pdf();
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->WriteHTML('<h1>Hello world!</h1>');
		$mpdf->Output();
	}
	public function eliminar($id) 
    {
        $this->model->eliminar($id);
        echo "registro eliminado";
        return redirect()->to(site_url('persona'));
    }
}
