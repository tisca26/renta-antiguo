<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        set_attr_session('menu_root', 'servicio');
    }

    public function index()
    {
        $data = array();
        $this->load->view('servicio/servicio_index', $data);
    }
}