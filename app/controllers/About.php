<?php

class About extends Controller{
    public function index($nama1='Eko', $nama2='Turman')
    {
        //echo 'About Me';

        $data['judul'] = 'About Me';
        $data['nama1'] =$nama1;
        $data['nama2'] =$nama2;
        $this->view('templates/header', $data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }

    public function page()
    {
    	//echo 'About Page';
        
        $data['judul'] = 'My Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}