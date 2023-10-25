<?php 

    class Deportista_model extends CI_Model
    {
        public function listadeportistas()
        {
            $this->db->select('*');
            $this->db->from('deportista');
            $this->db->where('habilitado','1');
            return $this->db->get();
        }

        
        public function listadeportistaslte()
        {
            $this->db->select('*');
            $this->db->from('deportista');
            $this->db->where('habilitado','1');
            return $this->db->get();
        }

        public function listadeportistasdes()
        {
            $this->db->select('*');
            $this->db->from('deportista');
            $this->db->where('habilitado','0');
            return $this->db->get();
        }

        public function listadeportistasdeslte()
        {
            $this->db->select('*');
            $this->db->from('deportista');
            $this->db->where('habilitado','0');
            return $this->db->get();
        }

        public function agregardeportista($data)
        {
            //insercion mvc
            $this->db->insert('deportista',$data);

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
        public function inscribirDeportista($idClub,$idEntrenador,$idCategoria_Peso,$data2)
        {
          
            $this->db->trans_start();
           
            $idDeportista=$this->db->insert_id();
            $data2['idDeportista']=$idDeportista;
            $data2['idClub']=$idClub;
            $data2['idEntrenador']=$idClub;
            $data2['idCategoria_peso']=$idClub;


            $this->db->insert('deportista',$data2);
           

            $this->db->trans_complete();

            if($this->db->trans_status()==FALSE)
            {
                return false;
            }


        }

    }