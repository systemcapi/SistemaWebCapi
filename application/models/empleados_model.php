<?php

class Empleados_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	// --------------------------------------------------------------------

      /** 
       * function SaveForm()
       *
       * insert form data
       * @param $form_data - array
       * @return Bool - TRUE or FALSE
       */

	function SaveForm($form_data)
	{
		$this->db->insert('empleados', $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}
        
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
