<?php

class Filiales_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	// --------------------------------------------------------------------

       public function cargar_filiales()
    {
        $this->db->order_by('id','desc');
        $query = $this->db->get('filiales');
        if($query->num_rows()>0)
        {
            foreach ($query->result() as $fila)
            {
                $data[] = $fila;
            }
                return $data;
        }
    
    }
                
        function SaveForm($form_data)
	{
		$this->db->insert('filiales', $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}
}
