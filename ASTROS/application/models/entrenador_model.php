<?php 

    class Entrenador_model extends CI_Model
    {
        public function listaentrenador()
        {
            $this->db->select('*');
            $this->db->from('entrenador');
            $this->db->where('habilitado','1');
            return $this->db->get();
        }

        
        public function listaentrenadorlte()
        {
            $this->db->select('*');
            $this->db->from('entrenador');
            $this->db->where('habilitado','1');
            return $this->db->get();
        }

        public function listaentrenadordes()
        {
            $this->db->select('*');
            $this->db->from('entrenador');
            $this->db->where('habilitado','0');
            return $this->db->get();
        }

        public function listaentrenadordeslte()
        {
            $this->db->select('*');
            $this->db->from('entrenador');
            $this->db->where('habilitado','0');
            return $this->db->get();
        }

        public function agregarentrenador($data)
        {
            //insercion mvc
            $this->db->insert('entrenador',$data);

        }

        public function agregarentrenadorlte($data)
        {
            //insercion mvc
            $this->db->insert('entrenador',$data);

        }

        public function eliminarentrenador($identrenador)
        {
            //borrado mvc hard delete
            $this->db->where('idEstudiante',$identrenador);
            $this->db->delete('entrenador');
        }

        public function eliminarentrenadorlte($identrenador)
        {
            //borrado mvc hard delete
            $this->db->where('idEntrenador',$identrenador);
            $this->db->delete('entrenador');
        }

        public function recuperarentrenador($identrenador)
        {
            $this->db->select('*');
            $this->db->from('entrenador');
            $this->db->where('idEntrenador',$identrenador);
            return $this->db->get();
        }

        public function recuperarentrenadorlte($identrenador)
        {
            $this->db->select('*');
            $this->db->from('entrenador');
            $this->db->where('idEntrenador',$identrenador);
            return $this->db->get();
        }

        public function modificarentrenador($identrenador,$data)
        {
            $this->db->where('idEntrenador',$identrenador);
            $this->db->update('entrenador',$data);
        }

        public function modificarentrenadorlte($identrenador,$data)
        {
            $this->db->where('idEntrenador',$identrenador);
            $this->db->update('entrenador',$data);
        }

    }