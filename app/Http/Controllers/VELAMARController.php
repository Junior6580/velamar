<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
require $_SERVER['DOCUMENT_ROOT'] . '/PHPMailer/src/PHPMailer.php';
use PHPMailer\PHPMailer\Exception;
use App\Models\Report;

class VELAMARController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function mail(Request $request)
    {
        $data = ['title' => 'Contacto'];
         // Obtiene los datos del formulario
         $nombre = $request->input('name');
         $correo = $request->input('email');
         $asunto = $request->input('subject');
         $mensaje = $request->input('message');

         // Construye el mensaje a enviar
         $mensajeCompleto = "Nombre: $nombre\n";
         $mensajeCompleto .= "Correo: $correo\n\n";
         $mensajeCompleto .= "Asunto: $asunto\n\n";
         $mensajeCompleto .= "Mensaje:\n$mensaje";

         // Inicializa PHPMailer
         $oMail = new PHPMailer(true);
         $oMail->isSMTP();
         $oMail->Host = "smtp.gmail.com";
         $oMail->Port = 465;
         $oMail->SMTPSecure = "tls";
         $oMail->SMTPAuth = true;
         $oMail->Username = "jsmedinah5873@gmail.com";
         $oMail->Password = "adjf ykip wxya oory";
         $oMail->setFrom($correo, $nombre);
         $oMail->addAddress("jsmedinah5873@gmail.com", $nombre);

         $oMail->Subject = $asunto;
         $oMail->Body = $mensajeCompleto;

         // Envía el correo
         if ($oMail->send()) {
             $status = "Mensaje enviado con éxito.";
         } else {
             $status = "Error al enviar el mensaje: " . $oMail->ErrorInfo;
         }

         return view('contacto')->with('status', $status);
    }

   
}
