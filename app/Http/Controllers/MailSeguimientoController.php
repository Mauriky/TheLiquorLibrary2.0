<?php
namespace App\Http\Controllers;
use App\Cliente;
use App\Mail\Seguimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailSeguimientoController extends Controller
{
    /**
     * Muestra un listado de usuarios con enlaces para enviar correo.
     * @return type
     */
    public function listaUsuarios()
    {
        $clientes = Cliente::all();
        return view('seguimiento.lista-clientes-correo', compact('clientes'));
    }
    /**
     * Envía correo a usuario con documentos recibidos por dicho usuario.
     * @param User $user 
     * @return type
     */
    public function enviaCorreo(Cliente $user)
    {
        Mail::to($user->email)->send(new Seguimiento($user->id));
        return redirect()->back()->with(['alerta' => 'Correo Enviado']);
    }
}