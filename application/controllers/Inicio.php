<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        set_attr_session('menu_root', 'inicio');
    }

    public function index()
    {
        $data = array();
        $this->load->view('inicio/inicio_index', $data);
    }
}