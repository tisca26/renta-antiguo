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
        $this->load->view('contacto/contacto_index', $data);
    }

    public function envio_satisfactorio()
    {
        $this->config->set_item('compress_output', true);
        $this->cargar_idioma->carga_lang('contacto/contacto_envio_satisfactorio');
        $data = array();
        $this->load->view('contacto/contacto_envio_satisfactorio', $data);
    }

    public function suscribirse()
    {
        $this->config->set_item('compress_output', false);
        $this->cargar_idioma->carga_lang('contacto/contacto_suscribirse');
        $apiKey = '53a6c6b6c1ac3fca3b4ea39b8ce7b887-us14'; // Your MailChimp API Key
        $listId = 'b009228175'; // Your MailChimp List ID

        if (isset($_GET['list']) AND $_GET['list'] != '') {
            $listId = $_GET['list'];
        }

        $email = $this->input->post('widget-subscribe-form-email');
        $fname = $this->input->post('widget-subscribe-form-fname');
        $lname = $this->input->post('widget-subscribe-form-lname');
        $datacenter = explode('-', $apiKey);
        $submit_url = "https://" . $datacenter[1] . ".api.mailchimp.com/3.0/lists/" . $listId . "/members/";

        if (isset($email) AND $email != '') {

            $merge_vars = array();
            if ($fname != '') {
                $merge_vars['FNAME'] = $fname;
            }
            if ($lname != '') {
                $merge_vars['LNAME'] = $lname;
            }
            $data = array(
                'email_address' => $email,
                'status' => 'subscribed'
            );
            if (!empty($merge_vars)) {
                $data['merge_fields'] = $merge_vars;
            }
            $payload = json_encode($data);
            $auth = base64_encode('user:' . $apiKey);
            $header = array();
            $header[] = 'Content-type: application/json; charset=utf-8';
            $header[] = 'Authorization: Basic ' . $auth;

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $submit_url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $result = curl_exec($ch);
            curl_close($ch);
            $data = json_decode($result);

            if (isset($data->status) AND $data->status == 'subscribed') {
                set_bootstrap_alert(trans_line('suscribirse_exito'), BOOTSTRAP_ALERT_SUCCESS);
            } else {
                set_bootstrap_alert($data->title, BOOTSTRAP_ALERT_DANGER);
            }
        }
        redirect('contacto');
    }

    public function enviar_correo()
    {
        $this->cargar_idioma->carga_lang('contacto/contacto_index');
        $this->form_validation->set_rules('nombre', trans_line('contacto_form_nombre'), 'required|trim|min_length[3]');
        $this->form_validation->set_rules('correo', trans_line('contacto_form_mail'), 'required|trim|valid_email');
        $this->form_validation->set_rules('telefono', trans_line('contacto_form_telefono'), 'required|trim|min_length[7]|numeric');
        $this->form_validation->set_rules('asunto', trans_line('contacto_form_asunto'), 'required|trim|min_length[3]');
        $this->form_validation->set_rules('mensaje', trans_line('contacto_form_mensaje'), 'required|trim|min_length[3]');
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $receptor_mail = $this->input->post('correo');
            $receptor_nombre = $this->input->post('nombre');
            $receptor_telefono = $this->input->post('telefono');
            $receptor_asunto = $this->input->post('asunto');
            $receptor_mensaje = $this->input->post('mensaje');
            $this->_enviar_correo_a_prospecto($receptor_nombre, $receptor_mail);
            $this->_enviar_correo_a_ventas($receptor_nombre, $receptor_mail, $receptor_telefono, $receptor_asunto, $receptor_mensaje);

            set_bootstrap_alert(trans_line('contacto_exito'), BOOTSTRAP_ALERT_SUCCESS);
            $this->cargar_idioma->carga_lang('contacto/contacto_envio_satisfactorio');
            $data = array();
            $this->load->view('contacto/contacto_envio_satisfactorio', $data);
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
        $mail->Host = 'mail.oficinas-virtuales-amuebladas.com';
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;
        $mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = 'soporte@oficinas-virtuales-amuebladas.com';                 // SMTP username
        $mail->Password = 'Sopor3_123!';
        $mail->Port = 465;
        $mail->AltBody = 'Para mostrar el mensaje correctamente, por favor, use un visor de email compatible con HTML, ¡gracias!';
        $mail->CharSet = 'UTF-8';
        $mail->ContentType = 'text/html; charset=utf-8\r\n';
        $mail->isHTML(true);
        $mail->setFrom('soporte@oficinas-virtuales-amuebladas.com', 'Soporte - Nuevo prospecto para OVA');
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
}