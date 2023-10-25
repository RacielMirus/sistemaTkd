<?php
defined('BASEPATH') or exit('No direct script access allowed'); // ESTO ES UNA LINEA DE SERGURIDAD, NO ADMITE EJECUCION DIRECTA DE SCRIP

class Deportista extends CI_Controller
{

	// VISTA PANEL DE CONTROL
	public function admin_inicio()
	{
		if ($this->session->userdata('login')) //controlar si existe la variable de session login 
		{
			$this->load->view('adminCoreIU/cabeza');
			$this->load->view('adminCoreIU/menulateral');
			$this->load->view('adminCoreIU/menusuperior');
			$this->load->view('admin_inicio');
			$this->load->view('adminCoreIU/pie');
		} else {
			redirect('usuarios/index', 'refresh');
		}
	}

	// -------------------------BLOQUE DEPORTISTAS---------------------------------
	// VISTA  LISTA DEPORTISTAS
	public function indexlte()
	{

		$lista = $this->deportista_model->listadeportistaslte();
		$data['deportistas'] = $lista;


		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
		$this->load->view('adminCoreIU/menusuperior');
		$this->load->view('m2_Deportista/dep_listalte', $data);
		$this->load->view('adminCoreIU/pie');
	}

	// VISTA AGREGAR NUEVO DEPORTISTA
	public function agregarlte()
	{
		//mostrar un formulario(vista) para agregar nuevo DEPORTISTA

		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
		$this->load->view('adminCoreIU/menusuperior');
		$this->load->view('m2_Deportista/dep_formulariolte'); //, $data
		$this->load->view('adminCoreIU/pie');
	}

	// VISTA CREAR NUEVO DEPORTISTA - FORMULARIO 
	public function agregarbdlte()
	{
		//atrib. BD             atrib. formulario
		$data['nombres'] = $_POST['nombre'];
		$data['primerApellido'] = $_POST['apellido1'];
		$data['segundoApellido'] = $_POST['apellido2'];
		$data['fechaNacimiento'] = $_POST['fechaNacimiento'];
		$data['cinturon'] = $_POST['colorCinturon'];
		$data['sexo'] = $_POST['sexo'];

		/*if (!preg_match('/^[A-Za-z\s]+$/', $data['nombres'])){
			$this->session->set_flashdata('error_mesage', 'El campo Nombre no debe tener caracteres especiales.');
			redirect('deportista/agregarbdlte','refresh');	
		}*/
		/*if (!preg_match('/^[A-Za-z\s]+$/', $data['apellido1'])){
			$this->session->set_flashdata('error_mesage', 'El campo Apellido Paterno no debe tener caracteres especiales.');
			redirect('deportista/agregarbdlte','refresh');
		}*/
		/*if (!preg_match('/^[A-Za-z\s]+$/', $data['apellido2'])){
			$this->session->set_flashdata('error_mesage', 'El campo Apellido Materno no debe tener caracteres especiales.');
			redirect('deportista/agregarbdlte','refresh');	
		}*/

		$this->deportista_model->agregardeportistalte($data);

		redirect('deportista/indexlte', 'refresh');
	}

	// VISTA DEPORTISTAS DESHABILITADOS
	public function deshabilitadoslte()
	{

		$lista = $this->deportista_model->listadeportistasdeslte();
		$data['deportistas'] = $lista;

		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
		$this->load->view('adminCoreIU/menusuperior');
		$this->load->view('m2_Deportista/dep_listadeslte', $data); //
		$this->load->view('adminCoreIU/pie');
	}


	// VISTA MODIFICAR DEPORTISTA
	public function modificarlte()
	{
		//recepcion que esta llegando desde el boton modificar
		$iddeportista = $_POST['iddeportista'];
		$data['infodeportista'] = $this->deportista_model->recuperardeportistalte($iddeportista);

		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
		$this->load->view('adminCoreIU/menusuperior');
		$this->load->view('m2_Deportista/dep_modificarlte', $data); //
		$this->load->view('adminCoreIU/pie');
	}

	// VISTA MODIFICAR DEPORTISTA - FORMULARIO
	public function modificarbdlte()
	{
		$iddeportista = $_POST['iddeportista'];

		$data['nombres'] = $_POST['nombre'];
		$data['primerApellido'] = $_POST['apellido1'];
		$data['segundoApellido'] = $_POST['apellido2'];
		$data['fechaNacimiento'] = $_POST['fechaNacimiento'];
		$data['cinturon'] = $_POST['colorCinturon'];
		$data['sexo'] = $_POST['sexo'];

		$this->deportista_model->modificardeportistalte($iddeportista, $data);
		redirect('deportista/indexlte', 'refresh');
	}

	public function eliminarbdlte()
	{
		//
		$iddeportista = $_POST['iddeportista'];
		$this->deportista_model->eliminardeportistalte($iddeportista);
		redirect('deportista/indexlte', 'refresh');
	}

	public function deshabilitarbdlte()
	{
		$iddeportista = $_POST['iddeportista'];
		$data['habilitado'] = '0';

		$this->deportista_model->modificardeportistalte($iddeportista, $data);
		redirect('deportista/indexlte', 'refresh');
	}

	public function habilitarbdlte()
	{
		$iddeportista = $_POST['iddeportista'];
		$data['habilitado'] = '1';

		$this->deportista_model->modificardeportistalte($iddeportista, $data);
		redirect('deportista/deshabilitadoslte', 'refresh');
	}

	public function inscribir()
	{
		$data['info1']=$this->entrenador_model->listaentrenador();
		$data['info3']=$this->peso_model->listaPeso();  
		$data['info2']=$this->club_model->listaclub(); 
	
		
		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
	    $this->load->view('adminCoreIU/menusuperior');
		$this->load->view('m2_Deportista/formulario',$data);
		$this->load->view('adminCoreIU/pie');

	}

	public function inscribirbd()
	{  
		$data['nombres'] = $_POST['nombre1'];
		$data['primerApellido'] = $_POST['apellido1'];
		$data['segundoApellido'] = $_POST['apellido2'];
		$data['fechaNacimiento'] = $_POST['fechaNacimiento1'];
		$data['cinturon'] = $_POST['colorCinturon1'];
		$data['sexo'] = $_POST['sexo1'];

		
		$idEntrenador=$_POST['idEntrenador'];
		$idCategoria_peso=$_POST['idCategoria_peso'];
		$idClub=$_POST['idClub'];

		$this->deportista_model->inscribirDeportista($idClub,$idEntrenador,$idCategoria_peso,$data);
		redirect('entrenador/indexlte','refresh');	
	}













































	
	// VISTA LISTA PAGOS
	public function mensualidad()
	{
		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
		$this->load->view('adminCoreIU/menusuperior');
		$this->load->view('m5_Pagos/pagos');
		$this->load->view('adminCoreIU/pie');
	}

	// ---------------------- <---/*FIN BLOQUE MATERIAL*/---> ------------------------------

	// VISTA LISTA MATERIAL
	public function material()
	{
		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
		$this->load->view('adminCoreIU/menusuperior');
		$this->load->view('m7_Material/material');
		$this->load->view('adminCoreIU/pie');
	}

	// ---------------------- <---/*FIN BLOQUE MATERIAL*/---> ------------------------------

	// VISTA LISTA ALMACEN
	public function almacen()
	{
		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
		$this->load->view('adminCoreIU/menusuperior');
		$this->load->view('m6_Almacen/almacen');
		$this->load->view('adminCoreIU/pie');
	}

	// ---------------------- <---/*FIN BLOQUE ALMACEN*/---> ------------------------------

	// VISTA LISTA REPORTES
	public function reportes()
	{
		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
		$this->load->view('adminCoreIU/menusuperior');
		$this->load->view('m8_Reportes/reportes');
		$this->load->view('adminCoreIU/pie');
	}

	// ---------------------- <---/*FIN BLOQUE REPORTES*/---> ------------------------------





	// VISTA PERFIL ADMINISTRADOR
	public function admin_perfil()
	{
		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
		$this->load->view('adminCoreIU/menusuperior');
		$this->load->view('admin_perfil');
		$this->load->view('adminCoreIU/pie');
	}

	//===============================INVITADO=========================================	

	public function invitadolte()
	{
		if ($this->session->userdata('login')) //controlar si existe la variable de session login 
		{
			$this->load->view('dashInvitado/cabecera');
			$this->load->view('dashInvitado/menusuperior');
			$this->load->view('dashInvitado/menulateral');
			$this->load->view('est_invitado');
			$this->load->view('dashInvitado/pie');
		} else {
			redirect('usuarios/index/2', 'refresh');
		}
	}

	public function index()
	{
		$this->load->view('dashInvitado/cabecera');
		$this->load->view('dashInvitado/menusuperior');
		$this->load->view('dashInvitado/menulateral');
		$this->load->view('user_inicio');
		$this->load->view('dashInvitado/pie');
	}

	public function perfil()
	{
		$this->load->view('dashInvitado/cabecera');
		$this->load->view('dashInvitado/menusuperior');
		$this->load->view('dashInvitado/menulateral');
		$this->load->view('user_perfil');
		$this->load->view('dashInvitado/pie');
	}



	
}
	//==================================================================================




