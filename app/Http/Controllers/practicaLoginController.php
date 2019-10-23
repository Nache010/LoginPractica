<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class practicaLoginController extends Controller{
    
    private $mensajes = [
        '' => '',
        ];
    private $users = [
        'ignaqnk@gmail.com'     =>  ['1234'     => 'Nacho'],
        'laurachiri@gmail.es'   =>  ['admin'    => 'Laura'],
        
        ];
    
    function guardardatos(string $name, string $email, string $pass){
        $this->users[$email] = [$pass => $name];
    }
    
    function home(){
        return view('home');
    }
    
    function perfil(){
        return 'Esta ruta no es accesible por este medio';
    }
    
    function recuperar(){
        return view('recuperar');
    }
    
    function store(Request $request){
        $datos = [];
        $clave  =   $request->input('clave');
        $correo =   $request->input('correo');
        //recorro el array users
        foreach($this->users as $pcorreo => $pobj){
            //compruebo los correos
            if($correo === $pcorreo){
                //si existe el correo, compruebo el array de dentro
                foreach($pobj as $pclave => $pnombre){
                    //valido la clave tambien
                    if($clave == $pclave){
                        //mando el nombre
                        $datos=[
                            'mensaje' => $pnombre
                            ];
                        return view('perfil')->with($datos);
                    }
                }
            }
        }
        $datos=[
            'mensaje' => 'Error de autenticación.'
            ];
        return view('home')->with($datos);
    }
    
    function store2(){
        $datos=[
            'mensaje' => 'El correo ha sido enviado con éxito.'
            ];
        return view('home')->with($datos);
    }
    
    function store3(Request $request){
        $nombre = $request->input('nombre');
        $correo = $request->input('correo');
        $clave = $request->input('clave');
        $this->guardardatos($nombre, $correo, $clave);
        
        foreach($this->users as $pcorreo => $pobj){    
            if($correo === $pcorreo){
                $datos=['mensaje' => $nombre];
                return view('perfil')->with($datos);
            }
        }
        
    }
    
    
}
