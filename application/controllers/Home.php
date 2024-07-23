<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data = array(
            'Portofolio' => 'Portofolio',
        );
        $this->template->load('template', 'front', $data);
    }
    public function galeri()
    {
        $this->template->load('template', 'galeri');
    }
    public function cv()
    {
        $this->load->view('cv');
    }
    public function kontak()
    {
        $this->template->load('template', 'kontak');
    }
}
