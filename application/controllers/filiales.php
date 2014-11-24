<?php

class Filiales extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('filiales_model');
	}	
	function index()
	{	
                
                //$config['base_url'] = base_url().'filiales/index';  
                $data['title'] = 'Filiales';
                $this->load->view('front/header',$data);
                $this->load->view('front/filiales_content');	
                $this->load->view('front/footer');
	}
        
        
        function ingresar()
        {
                		
		$this->form_validation->set_rules('nombre', 'nombre', 'required|max_length[50]');			
		$this->form_validation->set_rules('ciudad', 'ciudad', 'max_length[100]');			
		$this->form_validation->set_rules('provincia', 'provincia', 'max_length[100]');			
		$this->form_validation->set_rules('departamento', 'departamento', 'max_length[100]');
                $this->form_validation->set_rules('direccion', 'direccion', 'max_length[250]');
                $this->form_validation->set_rules('telefono', 'telefono', 'max_length[10]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
                      
			//$this->load->view('front/filiales_content',$data);
                        //$this->index();
                        $this->index(); 
                }
		
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			/*
                         * 
                     
                         */
			$form_data = array(
					       	
					       	'nombre' => set_value('nombre'),
					       	'ciudad' => set_value('ciudad'),
					       	'provincia' => set_value('provincia'),
					       	'departamento' => set_value('departamento'),
                                                'direccion' => set_value('direccion'),
                                                'telefono' => set_value('telefono')
						);
					
			// run insert model to write data to db
		
			if ($this->filiales_model->SaveForm($form_data) == TRUE) // guardar informacion en la base de datos
			{
				redirect('filiales/success');  
			}
			else
			{
			echo 'Ha ocurrido un error con su información. Por favor intente luego';
			
			}
		}
                
            
        }
        
	function success()
	{
			echo 'su informacion ha sido guardada satisfactoriamente';
	}
}
