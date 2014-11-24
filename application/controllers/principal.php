<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {

	function __construct() { 
		parent::__Construct();
		
       }
	
function index(){
   	
	
      	
	$data['title'] = 'Inicio'; 
	
		
	$this->load->view('front/header',$data);
        
	$this->load->view('front/content');	
	$this->load->view('front/footer');

       }


} 
