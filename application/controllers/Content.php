<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Content extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'UKM KSR Universitas Muhammadiyah Purwokerto';

        $this->load->view('Page-Styles/Header-Content', $data);
        $this->load->view('Page-Styles/Navbar-Content', $data);
        $this->load->view('Layout-Website/Content/index', $data);
        $this->load->view('Page-Styles/Footer-Content', $data);
    }

    // public function FunctionName(Type $var = null)
    // {
    # code...
    // }
}
