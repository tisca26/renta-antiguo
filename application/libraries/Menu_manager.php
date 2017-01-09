<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu_manager
{

    private $CI;

    function __construct()
    {
        $this->CI = &get_instance();
    }

    function generar_menu($menu = 'menu_uno')
    {
        $this->CI->cargar_idioma->carga_lang('menus/' . $menu);
        $menu_root = get_attr_session('menu_root');
        $data['menu_root'] = is_string($menu_root) ? strtolower($menu_root) : NULL ;
        $this->CI->load->view('menus/' . $menu, $data);
    }
}
?>
