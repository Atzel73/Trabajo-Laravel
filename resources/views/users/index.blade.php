@extends('layout.master')
<div class="container mt-5">
 <div class="row justify content-right">
   <div class"rol-md-10>
      <h1 class="text-center mb-5">Usuarios registrados</h1>
       <a class="btn btn-success mb-5"    href="{{ url('/ekis') }}">Agregar nuevo usuario </a>
       @if (session('usuarioEliminado'))
                <div class="alert alert-success">
                    {{session('usuarioEliminado')}}
                </div>
            @endif

      <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Dirección</th>
      <th scope="col">Tipo de instrumento</th>
      <th scope="col">Experiencia del usuario</th>
      <th>Acciones</th>
    </tr>
  </thead>
          <tbody>
          @foreach ($users as $user)
            <tr>
             <td>{{ $user->nombre }}</td>
             <td>{{ $user->email }}</td>
             <td>{{ $user->direccion }}</td>
             <td>{{ $user->instrumento }}</td>
             <td>{{ $user->exp }}</td>
             
              <form action="{{route('delete', $user->id)}}" method="POST">
                @csrf @method('DELETE')
                <button type="submit"
                class="btn btn-danger">Eliminar
                <i class="fas fa-trash-alt"></i>
                </button> 
               
              
              
              </form>
             
             </td>)
            </tr>
          @endforeach 
          </tbody>    
       </table>
       {{$users->links()}}
     </div>
   </div>
</div>
