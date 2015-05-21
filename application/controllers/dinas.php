<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dinas extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['active'] = "overview";
		$data['content'] = "dinas/index";
		$this->load->view('template/dinas_template', $data);
	}
	public function akun()
	{
		$data['content'] = 'dinas/akun_view';
		$data['active'] = "akun";
		$data['users'] = $this->dinas_model->get_all_akun_non_admin();
	 	$this->load->view('template/dinas_template', $data);
	}
	public function usaha()
	{
		$data['content'] = 'dinas/usaha_view';
		$data['active'] = "usaha";
 		$this->load->view('template/dinas_template', $data);
	}
	public function wilayah()
	{
		$data['active'] = "wilayah";
		$data['content'] = 'dinas/wilayah_view';
		$nama_kabupaten = "Bandung Barat";
		$data['data_wilayah'] = $this->dinas_model->get_all_wilayah($nama_kabupaten);
		$this->load->view('template/dinas_template', $data);
	}
	public function report()
	{
		$data['active'] = "report";
		$data['content'] = 'dinas/report_view';
		$this->load->view('template/dinas_template', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */