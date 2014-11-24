<?php

class Clientes extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('clientes_model');
	}	
	function index()
	{	
                
                //$config['base_url'] = base_url().'filiales/index';  
                $data['title'] = 'Clientes';
                $this->load->view('front/header',$data);
                $this->load->view('front/clientes_content');	
                $this->load->view('front/footer');
	}
        
        
        function ingresar()
        {
               		
		$this->form_validation->set_rules('nombres', 'nombres', 'required|max_length[100]');			
		$this->form_validation->set_rules('apellidos', 'apellidos', 'required|max_length[100]');			
		$this->form_validation->set_rules('email', 'email', 'required|max_length[250]');			
		$this->form_validation->set_rules('direccion', 'direccion', 'required|max_length[250]');
                $this->form_validation->set_rules('grado', 'grado', 'required|max_length[100]');
                $this->form_validation->set_rules('telefono', 'telefono', 'required|max_length[10]');
                $this->form_validation->set_rules('tipocliente', 'tipocliente', 'required|max_length[100]');
			
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
					       	
					       	'nombres' => set_value('nombres'),
					       	'apellidos' => set_value('apellidos'),
					       	'email' => set_value('email'),
					       	'direccion' => set_value('direccion'),
                                                'grado' => set_value('grado'),
                                                'telefono' => set_value('telefono'),
                                                'tipocliente' => set_value('tipocliente')
						);
					
			// run insert model to write data to db
		
			if ($this->clientes_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('clientes/success');   // or whatever logic needs to occur
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
