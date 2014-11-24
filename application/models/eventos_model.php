<?php

class Eventos_model extends CI_Model{
    //put your code here
      
    public function construct()
    {
        parent::__construct();
    }
 
 
    
    function SaveForm($form_data)
	{
		$this->db->insert('eventos', $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}
   public function cargar_eventos()
    {
        //$this->db->order_by('id','desc');
        $query = $this->db->get('eventos');
        if($query->num_rows()>0)
        {
            foreach ($query->result() as $fila)
            {
                $data[] = $fila;
            }
                return $data;
        }
    }
    /*
    function getfiliales($id) {
         
        return $this->db->select('f.nombre')
                        ->from('filiales f')
                        ->join('eventos e', 'e.Filialid = filiales.id')
                        ->where( array('filiales.id' => $id) )
                        ->get()->result();*

         
    }*/
    
 public function cargarFiliales()
 {
  $this->db->from('filiales');
  $this->db->order_by('nombre');
  $result = $this->db->get();
  $return = array();
  if($result->num_rows() > 0) {
    foreach($result->result_array() as $row) {
      $return[$row['id']] = $row['nombre'];
    }
  }

  return $return;
 }
}
