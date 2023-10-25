<?php 

    class Campeonato_model extends CI_Model
    {
        public function listacampeonato()
        {
            $this->db->select('*');
            $this->db->from('campeonato');
            //$this->db->where('habilitado','1');
            return $this->db->get();
        }

        
        public function agregarcampeonato($data)
        {
            //insercion mvc
            $this->db->insert('campeonato',$data);

        }

        public function agregardeportistalte($data)
        {
            //insercion mvc
            $this->db->insert('deportista',$data);

        }

        public function eliminardeportista($iddeportista)
        {
            //borrado mvc hard delete
            $this->db->where('idDeportista',$iddeportista);
            $this->db->delete('deportista');
        }

        public function eliminardeportistalte($iddeportista)
        {
            //borrado mvc hard delete
            $this->db->where('idDeportista',$iddeportista);
            $this->db->delete('deportista');
        }

        public function recuperardeportista($iddeportista)
        {
            $this->db->select('*');
            $this->db->from('deportista');
            $this->db->where('idDeportista',$iddeportista);
            return $this->db->get();
        }

        public function recuperardeportistalte($iddeportista)
        {
            $this->db->select('*');
            $this->db->from('deportista');
            $this->db->where('idDeportista',$iddeportista);
            return $this->db->get();
        }

        public function modificardeportista($iddeportista,$data)
        {
            $this->db->where('idDeportista',$iddeportista);
            $this->db->update('deportista',$data);
        }

        public function modificardeportistalte($iddeportista,$data)
        {
            $this->db->where('idDeportista',$iddeportista);
            $this->db->update('deportista',$data);
        }







//----------------------------COMPETCIONES-----------------------------
        public function agregarcombatelte($data)
        {
            //insercion mvc
            $this->db->insert('combates',$data);

        }

    }