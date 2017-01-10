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
        $data = array();
        $data['eventos'] = $this->_genera_eventos_sel();
        $this->load->view('contacto/contacto_index', $data);
    }

    public function enviar_correo()
    {
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('correo', 'Correo Electrónico', 'required|trim|valid_email');
        $this->form_validation->set_rules('telefono', 'Teléfono', 'required|trim|min_length[7]|numeric');
        $this->form_validation->set_rules('mensaje', 'Mensaje', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('evento', 'Evento', 'required');
        $this->form_validation->set_rules('fecha', 'Fecha', 'required');
        $this->form_validation->set_rules('hora', 'Hora', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $receptor_mail = $this->input->post('correo');
            $receptor_nombre = $this->input->post('nombre');
            $receptor_telefono = $this->input->post('telefono');
            $receptor_mensaje = $this->input->post('mensaje');
            $receptor_evento = $this->input->post('evento');
            $receptor_fecha = $this->input->post('fecha');
            $receptor_hora = $this->input->post('hora');
            $this->_enviar_correo_a_prospecto($receptor_nombre, $receptor_mail);
            $this->_enviar_correo_a_ventas($receptor_nombre, $receptor_mail, $receptor_telefono, $receptor_evento, $receptor_mensaje, $receptor_fecha, $receptor_hora);

            set_bootstrap_alert('El correo ha sido enviado exitosamente.', BOOTSTRAP_ALERT_SUCCESS);
            redirect('contacto');
        }
    }

    private function _enviar_correo_a_ventas($receptor_nombre = '', $receptor_mail = '', $receptor_telefono = '', $receptor_evento = '', $receptor_mensaje = '',$receptor_fecha='', $receptor_hora='')
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
        $mail->setFrom('contacto@renta-antiguo.com', RA);
        $mail->Subject = "Petición de Contacto";
        $mail->addAddress('contacto@renta-antiguo.com', RA);

        $data['receptor_nombre'] = $receptor_nombre;
        $data['receptor_mail'] = $receptor_mail;
        $data['receptor_telefono'] = $receptor_telefono;
        $data['receptor_evento'] = $receptor_evento;
        $data['receptor_mensaje'] = $receptor_mensaje;
        $data['receptor_fecha'] = $receptor_fecha;
        $data['receptor_hora'] = $receptor_hora;
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
        $mail->setFrom('contacto@renta-antiguo.com', RA);
        $mail->addReplyTo('contacto@renta-antiguo.com', RA);
        $mail->Subject = "Su mensaje fue recibido";
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