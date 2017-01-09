<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        set_attr_session('menu_root', 'contacto');
    }

    public function index()
    {
        $this->cargar_idioma->carga_lang('contacto/contacto_index');
        $data = array();
        $data['eventos'] = $this->_genera_eventos_sel();
        $this->load->view('contacto/contacto_index', $data);
    }

    public function enviar_correo()
    {
        $this->cargar_idioma->carga_lang('contacto/contacto_index');
        $this->form_validation->set_rules('nombre', trans_line('contacto_form_nombre'), 'required|trim|min_length[3]');
        $this->form_validation->set_rules('correo', trans_line('contacto_form_mail'), 'required|trim|valid_email');
        $this->form_validation->set_rules('telefono', trans_line('contacto_form_telefono'), 'required|trim|min_length[7]|numeric');
        $this->form_validation->set_rules('asunto', trans_line('contacto_form_asunto'), 'required|trim|min_length[3]');
        $this->form_validation->set_rules('mensaje', trans_line('contacto_form_mensaje'), 'required|trim|min_length[3]');
        $this->form_validation->set_rules('evento', trans_line('contacto_evento'), 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $receptor_mail = $this->input->post('correo');
            $receptor_nombre = $this->input->post('nombre');
            $receptor_telefono = $this->input->post('telefono');
            $receptor_asunto = $this->input->post('asunto');
            $receptor_mensaje = $this->input->post('mensaje');
            $evento = $this->input->post('evento');
            $this->_enviar_correo_a_prospecto($receptor_nombre, $receptor_mail);
            $this->_enviar_correo_a_ventas($receptor_nombre, $receptor_mail, $receptor_telefono, $receptor_asunto, $receptor_mensaje);

            set_bootstrap_alert(trans_line('contacto_exito'), BOOTSTRAP_ALERT_SUCCESS);
            $this->cargar_idioma->carga_lang('contacto/contacto_index');
            $data = array();
            $this->load->view('contacto/contacto_index', $data);
        }
    }

    private function _enviar_correo_a_ventas($receptor_nombre = '', $receptor_mail = '', $receptor_telefono = '', $receptor_asunto = '', $receptor_mensaje = '')
    {
        $mail = new PHPMailer();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->isSMTP();
        $mail->Host = 'kin.hosting-mexico.net';
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;
        $mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = 'contacto@renta-antiguo.com';                 // SMTP username
        $mail->Password = 'Contacto123!';
        $mail->Port = 465;
        $mail->AltBody = 'Para mostrar el mensaje correctamente, por favor, use un visor de email compatible con HTML, ¡gracias!';
        $mail->CharSet = 'UTF-8';
        $mail->ContentType = 'text/html; charset=utf-8\r\n';
        $mail->isHTML(true);
        $mail->setFrom('contacto@renta-antiguo.com', 'Contacto Renta Antiguo');
        $mail->Subject = "Nuevo prospecto OVA";
        $mail->addAddress('contacto@oficinas-virtuales-amuebladas.com', 'Contacto OVA');

        $data['receptor_nombre'] = $receptor_nombre;
        $data['receptor_mail'] = $receptor_mail;
        $data['receptor_telefono'] = $receptor_telefono;
        $data['receptor_asunto'] = $receptor_asunto;
        $data['receptor_mensaje'] = $receptor_mensaje;
        $cuerpo_mensaje = $this->load->view('contacto/contacto_email_ventas', $data, TRUE);

        $mail->msgHTML($cuerpo_mensaje);
        if ($mail->send()) {
            $mail->clearAllRecipients();
            $mail->clearReplyTos();
            return TRUE;
        } else {
            $mail->clearAllRecipients();
            $mail->clearReplyTos();
            log_message('ERROR', '--------- Error envio correo ---------' . $mail->ErrorInfo);
            return FALSE;
        }
    }

    private function _enviar_correo_a_prospecto($receptor_nombre = '', $receptor_mail = '')
    {
        $mail = new PHPMailer();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->isSMTP();
        $mail->Host = 'mail.oficinas-virtuales-amuebladas.com';
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;
        $mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = 'contacto@oficinas-virtuales-amuebladas.com';                 // SMTP username
        $mail->Password = 'Cont4ct0_123!';
        $mail->Port = 465;
        $mail->AltBody = 'Para mostrar el mensaje correctamente, por favor, use un visor de email compatible con HTML, ¡gracias!';
        $mail->CharSet = 'UTF-8';
        $mail->ContentType = 'text/html; charset=utf-8\r\n';
        $mail->isHTML(true);
        $mail->setFrom('contacto@oficinas-virtuales-amuebladas.com', 'Oficinas Virtuales Amuebladas OVA');
        //$mail->addBCC('');
        $mail->addReplyTo('contacto@oficinas-virtuales-amuebladas.com', 'Oficinas Virtuales Amuebladas OVA');
        $mail->Subject = "Contacto OVA";
        $mail->addAddress($receptor_mail, $receptor_nombre);

        $data['receptor_nombre'] = $receptor_nombre;
        $cuerpo_mensaje = $this->load->view('contacto/contacto_email_prospecto', $data, TRUE);

        $mail->msgHTML($cuerpo_mensaje);
        if ($mail->send()) {
            $mail->clearAllRecipients();
            $mail->clearReplyTos();
            return TRUE;
        } else {
            $mail->clearAllRecipients();
            $mail->clearReplyTos();
            log_message('ERROR', '--------- Error envio correo ---------' . $mail->ErrorInfo);
            return FALSE;
        }
    }

    private function _genera_eventos_sel()
    {
        $data['XV Años'] = 'XV Años';
        $data['Boda'] = 'Boda';
        $data['Graduación'] = 'Graduación';
        $data['Aniversario'] = 'Aniversario';
        $data['Televisión'] = 'Televisión';
        $data['Película'] = 'Película';
        $data['Otro'] = 'Otro';
        return $data;
    }
}