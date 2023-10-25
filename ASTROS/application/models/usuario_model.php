<?php 

    class Usuario_model extends CI_Model
    {
        public function validar($login,$password) //este metodo validara a los usuarios del sistema
        {
            $this->db->select('*');
            $this->db->from('usuario');
            $this->db->where('login',$login);
            $this->db->where('password',$password);
            return $this->db->get();
        }

        public function listausuarioslte() 
        { 
            $this->db->select('*'); 
            $this->db->from('usuario'); 
            $this->db->where('estado','1'); 
            return $this->db->get(); 
        } 
 
        public function agregarusuario($data) 
        { 
            $this->db->insert('usuario',$data); 
        } 
 
        public function recuperarusuariolte($idusuario) 
        { 
            $this->db->select('*'); 
            $this->db->from('usuario'); 
            $this->db->where('idUsuario',$idusuario); 
            return $this->db->get(); 
        } 
 
        public function modificarusuario($idusuario,$data) 
        { 
            $this->db->where('idUsuario',$idusuario); 
            $this->db->update('usuario',$data); 
        }
        
        public function modificarusuariolte($idusuario,$data)
        {
            $this->db->where('idUsuario',$idusuario);
            $this->db->update('usuario',$data);
        }

        public function eliminarusuariolte($idusuario)
        {
            //borrado mvc hard delete
            $this->db->where('idUsuario',$idusuario);
            $this->db->delete('usuario');
        }

        public function save_verification_code($email, $verification_code)
    {
        // Primero, debes buscar el usuario por su dirección de correo electrónico
        $this->db->where('email', $email);
        $query = $this->db->get('usuario');

        if ($query->num_rows() > 0) {
            // El usuario existe en la base de datos, actualiza su código de verificación
            $data = array('verification_code' => $verification_code);
            $this->db->where('email', $email);
            $this->db->update('usuario', $data);
        } else {
            // El usuario no existe en la base de datos, puedes manejar esto según tus necesidades
            // Puedes, por ejemplo, registrar un registro nuevo para el usuario
            $data = array(
                'email' => $email,
                'verification_code' => $verification_code
            );
            $this->db->insert('usuario', $data);
        }
    }
}