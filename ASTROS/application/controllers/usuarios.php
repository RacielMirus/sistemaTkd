<?php
defined('BASEPATH') or exit('No direct script access allowed'); // ESTO ES UNA LINEA DE SERGURIDAD, NO ADMITE EJECUCION DIRECTA DE SCRIP

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;




class Usuarios extends CI_Controller
{

	public function index()
	{

		if ($this->session->userdata('login')) //controlar si existe la variable de session login 
		{
			redirect('usuarios/indexlte', 'refresh');
		} else {
			$data['msg'] = $this->uri->segment(3);
			$this->load->view('login_tkd', $data);
		}
	}

	public function validarusuario()
	{
		$login = $_POST['login'];
		$password = md5($_POST['password']);

		$consulta = $this->usuario_model->validar($login, $password);

		if ($consulta->num_rows() > 0) //usuario correctamente validado
		{
			foreach ($consulta->result() as $row) {
				$this->session->set_userdata('idusuario', $row->idUsuario);
				$this->session->set_userdata('login', $row->login);
				$this->session->set_userdata('tipo', $row->tipo);
				$this->session->set_userdata('estado', $row->estado);
				redirect('usuarios/panel', 'refresh');
			}
		} else {
			redirect('usuarios/index', 'refresh'); //1
		}
	}


	public function panel()
	{
		if ($this->session->userdata('estado') == '1') //controlar si existe la variable de session login 
		{
			redirect('deportista/indexlte', 'refresh');
		}
		if ($this->session->userdata('estado') == '2') {
			redirect('usuarios/modificar1', 'refresh');
		} else {
			redirect('usuarios/index', 'refresh'); //2
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('usuarios/index', 'refresh'); //3
	}

	// ================================= VISTA USUARIO LISTA ===================================
	public function indexlte()
	{

		$lista = $this->usuario_model->listausuarioslte();
		$data['usuario'] = $lista;

		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
		$this->load->view('adminCoreIU/menusuperior');
		$this->load->view('m1_Usuario/usuarios_lista', $data);
		$this->load->view('adminCoreIU/pie');
	}

	public function agregarlte()
	{
		//mostrar un formulario(vista) para agregar nuevo estudiante

		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
		$this->load->view('adminCoreIU/menusuperior');
		$this->load->view('m1_Usuario/usuarios_formulario'); //, $data
		$this->load->view('adminCoreIU/pie');
	}

	// USUARIO AGRAGA A LA BDD  FORMULARIO AGRAGAR USUARIO
	public function agregarbd()
	{
		$var1 = $_POST['nombre'];
		$var2 = $_POST['apellido1'];
		$encriptar = $var1[0] . $var2[0]; // error

		$data['login'] = $encriptar;
		$var3 = $_POST['nombre'];
		$var4 = $_POST['apellido1'];
		$encriptar2 = md5($var3);
		$data['password'] = $encriptar2;

		//atrib. BD             atrib. formulario 
		$data['nombres'] = ucwords(strtolower($_POST['nombre']));
		$data['primerApellido'] = $_POST['apellido1'];
		$data['segundoApellido'] = $_POST['apellido2'];
		$data['tipo'] = $_POST['tipo'];
		$data['carnet'] = $_POST['carnet'];
		$data['estado'] = '2';

		$this->load->library('form_validation');

		$this->form_validation->set_rules('nombre', 'Nombre', 'required|alpha');
		$this->form_validation->set_rules('apellido1', 'Apellido Paterno', 'required|alpha');
		$this->form_validation->set_rules('apellido2', 'Apellido Materno', 'alpha');
		$this->form_validation->set_rules('carnet', 'Carnet', 'required|alpha_numeric');
		$this->form_validation->set_rules('tipo', 'Rol', 'required');

		if ($this->form_validation->run() == FALSE) {
			// Si el formulario no es válido, muestra el formulario nuevamente con errores.
			$this->load->view('m1_Usuario/usuarios_formulario');
		} else {
			// Procesa los datos del formulario aquí, ya que pasaron las validaciones.
			// Inserta los datos en la base de datos, etc.

			//atrib. BD             atrib. formulario 
			$data['nombres'] = ucwords(strtolower($_POST['nombre']));
			$data['primerApellido'] = $_POST['apellido1'];
			$data['segundoApellido'] = $_POST['apellido2'];
			$data['tipo'] = $_POST['tipo'];
			$data['carnet'] = $_POST['carnet'];
			$data['estado'] = '2';
		}

		$this->usuario_model->agregarusuario($data);

		redirect('usuarios/indexlte', 'refresh');
	}

	public function modificarlte()
	{
		//recepcion que esta llegando desde el boton modificar
		$idusuario = $_POST['idusuario'];
		$data['infousuario'] = $this->usuario_model->recuperarusuariolte($idusuario);

		$this->load->view('adminCoreIU/cabeza');
		$this->load->view('adminCoreIU/menulateral');
		$this->load->view('adminCoreIU/menusuperior');
		$this->load->view('m1_Usuario/usuarios_modificarlte', $data); //
		$this->load->view('adminCoreIU/pie');
	}

	public function modificarbdlte()
	{

		$data['nombres'] = $_POST['nombre'];
		$data['primerApellido'] = $_POST['apellido1'];
		$data['segundoApellido'] = $_POST['apellido2'];

		$data['carnet'] = $_POST['carnet'];

		//$this->usuario_model->modificarusuariolte($idusuario,$data); //error en idusuario
		redirect('usuarios/indexlte', 'refresh');
	}

	public function eliminarbdlte()
	{
		$idusuario = $_POST['idusuario'];
		$this->usuario_model->eliminarusuariolte($idusuario);
		redirect('usuarios/indexlte', 'refresh');
	}

	public function send_recovery_email()
	{

		$email = $this->input->post('email');

		// Verificar si el correo electrónico existe en la base de datos
		//$user_exists = $this->usuario_model->check_email_exists($email);

		//if ($user_exists) {
		// El correo electrónico existe, procede a enviar el correo de recuperación
		// Generar un código de verificación único (puedes adaptarlo según tus necesidades)
		$verification_code = mt_rand(100000, 999999);

		// Guardar el código de verificación en la base de datos junto con el correo electrónico del usuario
		$this->usuario_model->save_verification_code($email, $verification_code);

		$mail = new PHPMailer(true);

		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'camacho.marianela.8055@gmail.com';
		$mail->Password = 'owepbjtmjiggsugt';
		$mail->SMTPSecure = 'tls'; // Puedes usar 'ssl' si es necesario
		$mail->Port = 587; // Puerto SMTP

		$mail->setFrom('camacho.marianela.8055@gmail.com', 'Lucia');
		$mail->addAddress($email);
		$mail->isHTML(true);

		$mail->Subject = 'Recuperacion de Contraseña';
		$mail->Body = 'Para restablecer tu contraseña, utiliza el siguiente código de verificación: ' . $verification_code;
		$mail->send();
		redirect('usuarios/sent', 'refresh');
		//} 
		//else {
		// El correo electrónico no está registrado, muestra un mensaje de error
		$this->session->set_flashdata('error_message', 'CORREO INGRESADO NO REGISTRADO.');
		redirect('usuarios/email', 'refresh');
		//}

	}
	public function email()
	{
		$this->load->view('email');
	}






	//-------------------------------CAMBIAR CONTRAEÑA USUARIO----------------------------
	public function modificar1()
	{
		$idusuario = $this->session->userdata('idusuario');
		$data['infousuario'] = $this->usuario_model->recuperarusuariolte($idusuario);

		$this->load->view('cambio-contrasenia', $data);
	}

	public function modificar2()
	{
		$idusuario = $_POST['idusuario'];

		$data['password'] = md5($_POST['Password']); // OJO ME SALE ERROR AL INGRESAR CON EL USUARIO
		$data['estado'] = '1';

		$this->usuario_model->modificarusuario($idusuario, $data);
		redirect('deportista/indexlte', 'refresh');
	}
	//------------------------------------------------------------------------------------

}
