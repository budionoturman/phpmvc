<?php

class Home extends Controller{
    public function index($nama1='Eko', $nama2='Turman')
    {
        //echo 'Home/index';
        $data['judul'] = 'Home';
        $data['nama1'] =$nama1;
        $data['nama2'] =$nama2;
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view ('home/index',$data);
        $this->view('templates/footer');
    }

    public function page($nama1='Eko', $nama2='Turman')
    {
    	//echo "nama saya $nama1 biasa dipanggil $nama2";
        $data['nama1'] =$nama1;
        $data['nama2'] =$nama2;
        $data['judul'] = 'Home Pages';
        $this->view('templates/header', $data);
        $this->view ('home/page', $data);
        $this->view('templates/footer');
    }
}