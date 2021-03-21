<?php

namespace App\Http\Controllers;

use App\models\Usuario; 
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsuariosController extends Controller
{
    public function userform(){
        return view ('users.userform');
    }


    public function save(Request $request){
        $validator = $this->validate($request,[
            'nombre'=>'required|string|max:255',
            'email'=>'required|string|max:255|email|unique:usuarios',
            'direccion'=>'required|string|max:128',
        ]);



        $userdata = request()->except('_token');
        Usuario::insert($userdata);
        return back()->with('usuarioGuardado', 'Usuario guardado');


    }
    public function list(){
      $data['users'] = Usuario::paginate(100);
      return view('users.index', $data);
    }
    public function delete($id){
        Usuario::destroy($id);
        return back()->with('usuarioEliminado', 'El usuario ha sido eliminado');
    }
}
