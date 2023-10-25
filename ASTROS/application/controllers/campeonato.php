<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // ESTO ES UNA LINEA DE SERGURIDAD, NO ADMITE EJECUCION DIRECTA DE SCRIP

class Campeonato extends CI_Controller { 


// -------------------------BLOQUE DEPORTISTAS---------------------------------
// VISTA  LISTA DEPORTISTAS
	public function indexlte()
	{
		$lista=$this->campeonato_model->listacampeonato();
		$data['campeonato']=$lista;

		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
	    $this->load->view('adminCoreIU/menusuperior');
		$this->load->view('m4_TipoCompeticion/campeonato', $data);
		$this->load->view('adminCoreIU/pie');
		
	}

	public function agregarbd()
	{
		//atrib. BD             atrib. formulario
		$data['nombre'] = $_POST['nombre'];
		$data['fechaInicio'] = $_POST['fechaInicio'];
		$data['fechaFin'] = $_POST['fechaFin'];
		$data['lugar'] = $_POST['lugar'];
		

		$this->campeonato_model->agregarcampeonato($data);

		redirect('campeonato/indexlte', 'refresh');
	}



// ---------------------- <---/*FIN BLOQUE*/---> ------------------------------

// VISTA LISTA TIPO DE COMPETICIÓN 
    public function inscribir()
    {
		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
	    $this->load->view('adminCoreIU/menusuperior');
	    $this->load->view('m4_TipoCompeticion/inscripcion');
	    $this->load->view('adminCoreIU/pie');
    }

// VISTA LISTA TIPO DE COMPETICIÓN 
public function formas()
{
	$this->load->view('adminCoreIU/cabeza');
	$this->load->view('adminCoreIU/menulateral');
	$this->load->view('adminCoreIU/menusuperior');
	$this->load->view('m4_TipoCompeticion/formas');
	$this->load->view('adminCoreIU/pie');
}
// ---------------------- <---/*FIN BLOQUE TIPO DE COMPETICIÓN*/---> ------------------------------


}