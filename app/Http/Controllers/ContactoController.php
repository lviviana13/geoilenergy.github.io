<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class ContactoController extends Controller
{
    public function index($lenguaje)
    {
        return view(strtolower($lenguaje) . '.contacto', ['title' => ($lenguaje == 'es') ? 'Contactanos' : 'Contact Us']);
    }

    public function form(Request $content)
    {
        if ($this->sendMail($content->email, $content->names, $content)) {
            return ['resp' => 1];
        } else {
            return false;
        }
    }

    private function sendMail($destinatario, $nombre, $contenido)
    {
        $body = "De: $contenido->names<br>Correo: $contenido->email<br>Asunto: $contenido->subject<br>Mensaje: $contenido->message<br><br>Este mensaje ha sido enviado desde pagina web geoilenergy.com";
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug  = SMTP::DEBUG_OFF;
        $mail->Host       = getenv('MAIL_HOST');
        $mail->Port       = getenv('MAIL_PORT');
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = getenv('MAIL_ENCRYPTION');
        $mail->Username   = getenv('MAIL_USERNAME');
        $mail->Password   = getenv('MAIL_PASSWORD');
        //TODO: Destinatario del correo electronico, cambiar por el correo del administrador, cambiar funcion getenv
        //() por el correo de la persona que va a leer el contenido del mensaje 
        $mail->setFrom(getenv('MAIL_USERNAME'), 'Geoilenergy web');
        $mail->addAddress($destinatario, $nombre);
        $mail->Subject = $contenido->subject;
        $mail->isHTML();
        $mail->Body = $body;
        return $mail->send();
    }
}
