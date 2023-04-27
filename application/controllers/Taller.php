<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taller extends CI_Controller {

	public function __construct()
	{
		// Hereda los métodos de la super clase CI_Controles
		parent::__construct();

		// Agregar helpers y librerias adicionales al controlador
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('Taller/index_view');
	}

	

    public function agregar_taller()
    {
        $this->load->view('Taller/agregar_taller_view');
    }

	public function plantilla()
	{
		$this->load->view('Taller/blank_view');
	}

	public function arlette(){
		$this->load->view('Taller/blank_view');
	}
	public function formulario(){
		$this->load->view('commonts/head_view');
		$this->load->view('commonts/body_open_view');
		$this->load->view('commonts/wraper_open_view');
		$this->load->view('commonts/navbar_view');
		$this->load->view('commonts/main_side_bar_view');

		//Aqui va el contenido
		$this->load->view('Taller/form_view');
		//Agregamos la ventana modal
		$this->load->view('Taller/form_modal_view');

		$this->load->view('commonts/footer_view');
		$this->load->view('commonts/wraper_close_view');

		$this->load->view('commonts/javascript_view');

		$this->load->view('Taller/form_datatable_view');
		$this->load->view('Taller/form_js_view');

		$this->load->view('commonts/body_close_view');



	}
}
