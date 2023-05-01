<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taller extends CI_Controller {

	public function __construct()
	{
		// Hereda los métodos de la super clase CI_Controles
		parent::__construct();

		// Agregar helpers y librerias adicionales al controlador
		$this->load->helper('url');
		//agregar modelos
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

	public function personal()
	{
		$this->load->view('Taller/personal_view');
	}
	public function formulario()
	{
		$edicion = $this->uri->segment(2, 0);
		$talleres = $this->General_model->get('talleres', array(), array(), '');

		$data = array(
			'talleres' => $talleres,
			'edicion'  => $edicion,
		);

		$this->load->view('Commons/head_view');
		$this->load->view('Commons/body_open_view');
		$this->load->view('Commons/wrapper_open_view');
		$this->load->view('Commons/navbar_view');
		$this->load->view('Commons/main_side_bar_view');

		//archivo que se modifica para el contenido
		$this->load->view('Taller/form_view', $data);
		//vista del modal
		$this->load->view('Taller/form_modal_view');

		$this->load->view('Commons/footer_view');
		$this->load->view('Commons/wrapper_close_view');
		$this->load->view('Commons/javascript_view');

		//hoja de datable
		$this->load->view('Taller/form_datatable_view');
		$this->load->view('Taller/form_js_view');
		$this->load->view('Taller/form_sa_view');
		$this->load->view('Commons/body_close_view');
	}

	public function guardar_formulario(){
		foreach($_POST as $key => $value){
			echo "$key = $value <br>";
		}
		$valores = array(
			'nombre' => $this->input->post('nombre'),
			'lugar' =>$this->input->post('lugar'),
			'cupo' =>$this->input->post('cupo'),
			'hora' =>$this->input->post('hora'),
			'fecha' =>$this->input->post('fecha'),
			'tipo' =>$this->input->post('tipo'),
			'email' =>$this->input->post('contacto'),
			'fecha_reg' => date("Y-m-d H:i:s"),
		);

		$this->General_model->set('talleres', $valores);
		redirect (base_url('form/1'));
	}

	public function borrar_taller(){

		$id_taller=$this->uri->segment(2);
		$valores= array(
			'id_taller' => $id_taller,
		);

		$this->General_model->delete('talleres', $valores);
		redirect (base_url('form/2'));
	}
}
