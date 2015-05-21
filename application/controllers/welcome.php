<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$data['active'] = "home";
		$data['content'] = "home";
		$nama_kabupaten = "Bandung Barat";
		$data['data_wilayah'] = $this->dinas_model->get_kecamatan_by_name($nama_kabupaten);
		$this->load->view('template/home_template', $data);
	}
	public function about()
	{
		$data['active'] = "about";
		$data['content'] = "about";
		$this->load->view('template/home_template', $data);
	}
	public function contact()
	{
		$data['active'] = "contact";
		$data['content'] = "contact";
		$this->load->view('template/home_template', $data);
	}
	public function daftar()
	{
		$data['active'] = "daftar";
		$data['content'] = "daftar_view";
		$this->load->view('template/home_template', $data);
	}
	public function proses_daftar()
	{

		$this->form_validation->set_rules('nama', $this->lang->line('create_user_validation_fname_label'), 'required|xss_clean');
	 	$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|xss_clean');
		$this->form_validation->set_rules('no_ktp', $this->lang->line('create_user_validation_phone_label'), 'required|xss_clean');
		$this->form_validation->set_rules('tempat_lahir', $this->lang->line('create_user_validation_company_label'), 'required|xss_clean');
		$this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|xss_clean');
		 

		if ($this->form_validation->run() == true)
		{
			$username = strtolower($this->input->post('nama'));
			$email    = strtolower($this->input->post('email'));
			$password = $this->input->post('password');

	 	}
		if ($this->form_validation->run() == true)
		{
			$epoch      = time();
			if ($_FILES["userfile"]["size"] > 0) {
		 		$path_parts = pathinfo($_FILES["userfile"]["name"]);
		        $extension  = $path_parts['extension'];

		        $file_name     = $path_parts['filename'];
		        $file_name_ori = $path_parts['filename'];
		 		$file_name = str_replace(' ', '_', $file_name);

		 		$config['file_name'] = $epoch . "." . $extension;//$epoch.".".$extension;
		    	$config['upload_path'] = 'foto/';
		 		$config['allowed_types'] = '*';

		        $this->load->library('upload', $config);
	 		
	 		
	            //pajar 15-7-2014 file content ' or ` cant uploaded
	            if (strpos($file_name, "'") == false && strpos($file_name, "`") == false) {
	                if (! $this->upload->do_upload()) {
	                 	$error =  $this->upload->display_errors();
	                 	$this->session->set_flashdata('message',$error);
	               	}
	                else {
	                	$additional_data = array(
							'first_name' => $this->input->post('nama'),
							'no_ktp'  => $this->input->post('no_ktp'),
							'tempat_lahir'    => $this->input->post('tempat_lahir'),
							'tanggal_lahir'    => $this->input->post('tanggal_lahir'),
							'alamat'    => $this->input->post('alamat') ,
							'no_hp'    => $this->input->post('no_hp') ,
							'active'    => 0,
							'image_ktp'=>$config['file_name']
					 	);
	                	 $this->session->set_flashdata('message',"berhasil");
	                	$this->ion_auth->register($username, $password, $email, $additional_data);
	             	}
	            }
	            else {
	               $this->session->set_flashdata('message',$error);
	            }
	        }else{

	        	$this->session->set_flashdata('message',array("message"=>"asd"));
	        }
	        
			$this->session->set_flashdata('message', $this->ion_auth->messages());
		 	 redirect("welcome/daftar", 'refresh');
		}
		else
		{
			//display the create user form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

			$this->data['nama'] = array(
				'name'  => 'nama',
				'id'    => 'nama',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('first_name'),
			);
		 	$this->data['email'] = array(
				'name'  => 'email',
				'id'    => 'email',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('email'),
			);
			$this->data['tempat_lahir'] = array(
				'name'  => 'tempat_lahir',
				'id'    => 'tempat_lahir',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('tempat_lahir'),
			);
			$this->data['no_ktp'] = array(
				'name'  => 'no_ktp',
				'id'    => 'no_ktp',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('no_ktp'),
			);
		 	$this->session->set_flashdata('message', $this->data['message']);
 			redirect("welcome/daftar");
		}
	}
	public function do_upload()
    {
        
 		
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */