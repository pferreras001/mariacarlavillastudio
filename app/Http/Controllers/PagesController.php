<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blogentry;
use App\Models\EtiquetasBlog;
use Illuminate\Support\Facades\Auth;
use App\Mail\gestionSociosMailable;
use App\Mail\contactoMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
  public function inicio(){
    return view('inicio');
  }

  public function enviar_contacto(Request $req){
    $correo= new contactoMailable($req->input('email'),$req->input('asunto'),$req->input('mensaje'));
    Mail::to('begolardies@gmail.com')->send($correo);
    return view('contacto_enviado');
  }
}
