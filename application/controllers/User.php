<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index($page = null)
    {
        $data['title']  = 'Admin: Pengguna';
        $data['content'] = $this->user->paginate($page)->get();
        $data['total_rows'] = $this->user->count();
        $data['pagination'] = $this->user->makePagination(base_url('user'), 2, $data['total_rows']);
        $data['page'] = 'pages/user/index';

        $this->view($data);
        
    }

    public function create()
	{
		if (!$_POST) {
			$input	= (object) $this->user->getDefaultValues();
		} else {
			$input	= (object) $this->input->post(null, true);
            $this->load->library('form_validation');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
            $input->password = hashEncrypt($input->password);
		}

		if (!empty($_FILES) && $_FILES['image']['name'] !== '') {
			$imageName	= url_title($input->name, '-', true) . '-' . date('YmdHis');
			$upload		= $this->user->uploadImage('image', $imageName);
			if ($upload) {
				$input->image	= $upload['file_name'];
			} else {
				redirect(base_url('user/create'));
			}
		}

		if (!$this->user->validate()) {
			$data['title']			= 'Tambah Pengguna';
			$data['input']			= $input;
			$data['form_action']	= base_url('user/create');
			$data['page']			= 'pages/user/form';

			$this->view($data);
			return;
		}

		if ($this->user->create($input)) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan!');
		} else {
			$this->session->set_flashdata('error', 'Oops! Terjadi suatu kesalahan');
		}

		redirect(base_url('user'));
	}
    
    public function edit($id)
	{
		$data['content'] = $this->product->where('id', $id)->first();

		if (!$data['content']){
			$this->session->set_flashdata('warning', 'Maaf,data tidak dapat ditemukan');
			redirect(base_url('product'));
		}

		if (!$_POST){
			$data['input'] = $data['content'];
		}else{
			$data['input'] = (object) $this->input->post(null, true);
		}

		if (!empty($_FILES) && $_FILES['image']['name'] !== '') {
			$imageName	= url_title($data['input']->title, '-', true) . '-' . date('YmdHis');
			$upload		= $this->product->uploadImage('image', $imageName);
			if ($upload) {
				if ($data['content']->image !== ''){
					$this->product->deleteImage($data['content']->image);
				}
				$data['input']->image	= $upload['file_name'];
			} else {
				redirect(base_url("product/create/$id"));
			}
		}

		if (!$this->product->validate()) {
			$data['title']			= 'Ubah Produk';
			$data['form_action']	= base_url("product/edit/$id");
			$data['page']			= 'pages/product/form';

			$this->view($data);
			return;
		}

		if ($this->product->where('id', $id)->update($data['input'])) {
			$this->session->set_flashdata('success', 'Data berhasil disimpan!');
		} else {
			$this->session->set_flashdata('error', 'Oops! Terjadi suatu kesalahan');
		}

		redirect(base_url('product'));
	}


    public function unique_email()
	{
		$email		= $this->input->post('email');
		$id			= $this->input->post('id');
		$user	= $this->user->where('email', $email)->first();

		if ($user) {
			if ($id == $user->id) {
				return true;
			}
			$this->load->library('form_validation');
			$this->form_validation->set_message('unique_email', '%s sudah digunakan!');
			return false;
		}

		return true;
	}



}

/* End of file User.php */