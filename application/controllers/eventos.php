<?php

class Eventos extends CI_Controller{
    //put your code here
    public function __construct()
	{
		
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('eventos_model');
               
		
		
	}
        
        function index()
	{	
                $data['title'] = 'Eventos';
                $data['arrFiliales']=  $this->eventos_model->cargarFiliales();
                $this->load->view('front/header',$data);
                $this->load->view('front/eventos_content',$data);	
                $this->load->view('front/footer');
	}
        
        function ingresar(){
        
                $this->form_validation->set_rules('nombre', 'Nombre', 'required|max_length[250]');			
		$this->form_validation->set_rules('fecha_ini', 'Fecha de inicio', 'trim|required|valid_date[y-m-d,-]');	
                $this->form_validation->set_rules('fecha_fin', 'Fecha de tetrmino', 'trim|required|valid_date[y-m-d,-]');
                $this->form_validation->set_rules('lugar', 'Lugar', 'required|max_length[250]');
		$this->form_validation->set_rules('hora', 'Hora', 'required');
		$this->form_validation->set_rules('precio', 'Precio', 'required|max_length[8]');
		$this->form_validation->set_rules('Filialid', 'Filiales', 'required|max_length[250]');	
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->index();
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'nombre' => set_value('nombre'),
					       	'fecha_ini' => set_value('fecha_ini'),
                                                'fecha_fin' => set_value('fecha_fin'),
					       	'lugar' => set_value('lugar'),
                                                'hora' => set_value('hora'),
					       	'precio' => set_value('precio'),
                                                'Filialid' => set_value('Filialid'),
						);
					
			// run insert model to write data to db
		
			if ($this->eventos_model->SaveForm($form_data) == TRUE) //indormacion guardada en la base de datos
			{
				redirect('eventos/success');   // o
			}
			else
			{
			echo 'Ha ocurrido un error con su información. Por favor intente luego';;
			
			}
		}
	}
	function success()
	{
			echo 'su informacion ha sido guardada satisfactoriamente';
                        redirect('eventos');
	}
}
