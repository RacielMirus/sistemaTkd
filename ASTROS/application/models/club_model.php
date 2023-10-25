<?php 

    class Club_model extends CI_Model
    {
        public function listaclub()
        {
            $this->db->select('*');
            $this->db->from('club');
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