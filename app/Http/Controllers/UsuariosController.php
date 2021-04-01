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
            'instrumento'=>'required|string|max:128',
            'exp'=>'required|string|max:128',
            'usuarios'=>'required|string|max:128',
        ]);



        $userdata = request()->except('_token');
        Usuario::insert($userdata);
        return back()->with('usuarioGuardado', 'Usuario guardado');


    }
    public function list(){
       $users['users'] = Usuario::paginate(100);
        return view ('users.index', $users);
    }
    public function delete($id){
        Usuario::destroy($id);
        return back()->with('usuarioEliminado', 'El usuario ha sido eliminado');
    }

    //Código del "editform"
    public function editform($id){
        $usuario = Usuario::findOrFail($id);
        return view('users.editform', compact('usuario'));
    }
    public function edit(Request $request, $id){
        $datosusuario = request()->except((['_token','_method']));
        Usuario::where('id', '=', $id)->update($datosusuario);
        return back()->with('usuarioModificado', 'El usuario ha sido modificado');
    }
  public function view(){
      return view ('users.mostrar');
  }
  public function intro(){
    return view ('users.intro');
}
//Funciones para los instrumentos de las vistas
public function frotar(){
    return view ('users.Frotacion');
}
public function percusion(){
    return view ('users.Percusion');
}
public function punteo(){
    return view ('users.Punteo');
}
public function soplo1(){
    return view ('users.Soplo1');
}
public function soplo2(){
    return view ('users.Soplo2');
}
}
 