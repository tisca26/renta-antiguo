<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('lang_segment')) {
    function lang_segment()
    {
        $CI =& get_instance();
        return $CI->config->item('language_abbr');
    }
}

if (!function_exists('lang_segment_slash')) {
    function lang_segment_slash()
    {
        $CI =& get_instance();
        return $CI->config->item('language_abbr') . '/';
    }
}

if (!function_exists('base_url_lang')) {
    function base_url_lang()
    {
        $CI =& get_instance();
        return base_url() . $CI->config->item('language_abbr') . '/';
    }
}

if (!function_exists('anchor_sin_url')) {
    function anchor_sin_url($title = 'Tittle', $attributes = '')
    {
        if ($attributes !== '')
        {
            $attributes = _stringify_attributes($attributes);
        }
        return '<a '.$attributes.'>'.$title.'</a>';
    }
}

if (!function_exists('cdn_assets')) {
    function cdn_assets()
    {
        $CI =& get_instance();
        return $CI->config->item('cdn_assets');
    }
}

if (!function_exists('cambia_idioma')) {
    function cambia_idioma($lang = 'es')
    {
        $url = uri_string();
        return base_url() . $lang . $url;
    }
}
