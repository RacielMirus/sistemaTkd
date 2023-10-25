<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // ESTO ES UNA LINEA DE SERGURIDAD, NO ADMITE EJECUCION DIRECTA DE SCRIP

class Entrenador extends CI_Controller { 

// -------------------------BLOQUE ENTRENADOR---------------------------------
// VISTA  LISTA ENTRENADOR
	public function indexlte()
	{
		
		$lista=$this->entrenador_model->listaentrenadorlte();
		$data['entrenador']=$lista;
		//$data['info']=$this->entrenador_model->listaentrenadorlte(); 

		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
	    $this->load->view('adminCoreIU/menusuperior');
		$this->load->view('m3_Entrenador/entre_listalte', $data);
		//$this->load->view('formulario/entre_listalte', $data);
		$this->load->view('adminCoreIU/pie');
		
	}

// VISTA AGREGAR NUEVO ENTRENDOR
public function agregarlte()
	{
		$data['info']=$this->entrenador_model->listaentrenadorlte(); 
		//mostrar un formulario(vista) para agregar nuevo DEPORTISTA

		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
	    $this->load->view('adminCoreIU/menusuperior');
		$this->load->view('m3_Entrenador/entre_formulariolte',$data);
		$this->load->view('adminCoreIU/pie');

	}

// VISTA CREAR NUEVO ENTRENADOR - FORMULARIO 
public function agregarbdlte()
	{
		//atrib. BD             atrib. formulario
		$data['nombre']=$_POST['nombre1'];
		$data['primerApellido']=$_POST['apellido1'];
		$data['segundoApellido']=$_POST['apellido2'];
		$data['fechaNacimiento']=$_POST['fechaNacimiento1'];
		$data['cinturon']=$_POST['cinturon'];
		$data['sexo']=$_POST['sexo'];

		$this->entrenador_model->agregarentrenadorlte($data);

		redirect('entrenador/indexlte','refresh');
	}

// VISTA MODIFICAR ENTRENADOR
	public function modificarlte()
	{
		//recepcion que esta llegando desde el boton modificar
		$identrenador=$_POST['identrenador'];
		$data['infoentrenador']=$this->entrenador_model->recuperarentrenadorlte($identrenador);

		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
	    $this->load->view('adminCoreIU/menusuperior');
		$this->load->view('m3_Entrenador/entre_modificarlte', $data); //
		$this->load->view('adminCoreIU/pie');
	
	}

// VISTA MODIFICAR ENTRENADOR - FORMULARIO
public function modificarbdlte()
	{
		$identrenador=$_POST['identrenador'];

		$data['nombre']=$_POST['nombre'];
		$data['primerApellido']=$_POST['apellido1'];
		$data['segundoApellido']=$_POST['apellido2'];
		$data['fechaNacimiento']=$_POST['fechaNacimiento'];
		$data['cinturon']=$_POST['cinturon'];
		$data['sexo']=$_POST['sexo'];

		$this->entrenador_model->modificarentrenadorlte($identrenador,$data);
		redirect('entrenador/indexlte','refresh');
	}

	public function eliminarbdlte()
	{
		//
		$identrenador=$_POST['identrenador'];
		$this->entrenador_model->eliminarentrenadorlte($identrenador);
		redirect('entrenador/indexlte','refresh');
	}
	public function inscribir()
	{
		$data['info']=$this->club_model->listaclub(); 
		
		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
	    $this->load->view('adminCoreIU/menusuperior');
		$this->load->view('m3_Entrenador/formulario',$data);
		$this->load->view('adminCoreIU/pie');

	}

	public function inscribirbd()
	{  
		$data['nombre']=$_POST['nombre1'];
		$data['primerApellido']=$_POST['apellido1'];
		$data['segundoApellido']=$_POST['apellido2'];
		$data['fechaNacimiento']=$_POST['fechaNacimiento1'];
		$data['cinturon']=$_POST['cinturon1'];
		$data['sexo']=$_POST['sexo1'];
	
		
		$idClub=$_POST['idClub'];
		$this->club_model->inscribirClub($idClub,$data);
		redirect('entrenador/indexlte','refresh');	
    }

 /*   public function deshabilitarbd2()
	{
		$identrenador=$_POST['identrenador'];
		$data['habilitado']='0';

		$this->entrenador_model->modificarentrenador($identrenador,$data);
		redirect('entrenador/index','refresh');
	}

    public function habilitarbdlte2()
	{
		$identrenador=$_POST['identrenador'];
		$data['habilitado']='1';

		$this->entrenador_model->modificarentrenadorlte($identrenador,$data);
		redirect('entrenador/deshabilitadoslte','refresh');
	}
*/

	
// ---------------------- <---/*FIN BLOQUE ENTRENADOR*/---> ------------------------------


}