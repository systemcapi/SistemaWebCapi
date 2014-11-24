<?php

class Empleados extends CI_Controller {
    //put your code here
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('empleados_model');
    }
    
    function index()
	{	
                
                  
                $data['title'] = 'Empleados';
                $data['arrFiliales']=  $this->empleados_model->cargarFiliales();
                $this->load->view('front/header',$data);
                $this->load->view('front/empleados_content',$data);	
                $this->load->view('front/footer');
	}
    
    function ingresar()
        {
                $this->form_validation->set_rules('nombres', 'Nombres', 'required|max_length[100]');	
                $this->form_validation->set_rules('apellidos', 'Apellidos', 'required|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'required|max_length[250]');
                $this->form_validation->set_rules('direccion', 'Direccion', 'required|max_length[250]');
		$this->form_validation->set_rules('Filialid', 'Filial', 'max_length[100]');			
		$this->form_validation->set_rules('tipo_de_empleado', 'Tipo de Empleado', 'required|max_length[1]');			
		$this->form_validation->set_rules('estado', 'Estado', 'required|max_length[1]');
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
                    $config['base_url'] = base_url().'empleados/index'; 
                }
                else // passed validation proceed to post success logic
		{
		 	// build array for the model
			/*
                         * 
                     
                         */
			$form_data = array(
					      	'nombres' => set_value('nombres'),
                                                'apellidos' => set_value('apellidos'),
					       	'email' => set_value('email'),
                                                'direccion' => set_value('direccion'),
                                                'telefono' => set_value('telefono'),
					       	'Filialid' => set_value('Filialid'),
					       	'tipo_de_empleado' => set_value('tipo_de_empleado'),
					       	'estado' => set_value('estado')
						
					
						);
					
			// run insert model to write data to db
		
			if ($this->empleados_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('empleado/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'Ha ocurrido un error con su información. Por favor intente luego';
			// Or whatever error handling is necessary
			}
		}
                
            
        }
        
	function success()
	{
			echo 'su informacion ha sido guardada satisfactoriamente';
	}
}
