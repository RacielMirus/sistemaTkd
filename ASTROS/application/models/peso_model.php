<?php 

    class Peso_model extends CI_Model
    {
        public function listaPeso()
        {
            $this->db->select('*');
            $this->db->from('categoria_peso');
            return $this->db->get();
        }
        public function inscribirClub($idClub,$data2)
        {
          
            $this->db->trans_start();
           
            $idEntrenador=$this->db->insert_id();
            $data2['idEntrenador']=$idEntrenador;
            $data2['idClub']=$idClub;

            $this->db->insert('entrenador',$data2);
           

            $this->db->trans_complete();

            if($this->db->trans_status()==FALSE)
            {
                return false;
            }


        }

    }