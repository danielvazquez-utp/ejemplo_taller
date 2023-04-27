<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taller extends CI_Controller {

	public function __construct()
	{
		// Hereda los métodos de la super clase CI_Controles
		parent::__construct();

		// Agregar helpers y librerias adicionales al controlador
		$this->load->helper('url');

		//agregar modelo
		$this->load->model('General_model');
	}

	public function index()
	{
		$this->load->view('Taller/index_view');
	}

	public function primer_vista()
	{
		$this->load->view('primer_vista_view');
	}

    public function agregar_taller()
    {
        $this->load->view('Taller/agregar_taller_view');
    }

	public function plantilla()
	{
		$this->load->view('Taller/blank_view');
	}
	public function blank()
	{
		$this->load->view('Taller/nueva_plantilla');
	}
	public function formulario()
	{

		$talleres = $this->General_model->get('talleres', array(), array(), '');
		$data = array(
			'talleres' => $talleres
		);

		$this->load->view('Commons/head_view');
		$this->load->view('Commons/body_open_view');
		$this->load->view('Commons/wrapper_open_view');
		$this->load->view('Commons/navbar_view');
		$this->load->view('Commons/main_aside_bar-view');
		// Aqui esta el contenido
		//$this->load->view('Commons/content_wrapper_view');
		$this->load->view('Taller/form_view', $data);
		// Aqui termina el contenido
		// Aqui agregamos la venatan modal
		$this->load->view('Taller/form_modal_view');
		
		$this->load->view('Commons/footer_view');
		$this->load->view('Commons/wrapper_close_view');
		$this->load->view('Commons/javascript_view');

		// Aqui estaran los jscript de la pagina
		$this->load->view("Taller/form_js_view");
		$this->load->view('Taller/form_datatable_view');
		$this->load->view('Commons/body_close_view');
	}

	public function guardar_formulario(){
		foreach($_POST as $key => $value)
		echo "$key = $value <br>";

		$valores= array(
			'fecha_reg' => date("Y-m-d H:i:s"),
			'nombre' => $this->input->post('nombre'),
			'lugar' => $this->input->post('lugar'),
			'cupo' => $this->input->post('cupo'),
			'hora' => $this->input->post('hora'),
			'fecha' => $this->input->post('fecha'),
			'email' => $this->input->post('contacto'),
			'cupo' => $this->input->post('cupo'),
		);

		$this->General_model->set('talleres',$valores);
		redirect('formulario');
	}
}
