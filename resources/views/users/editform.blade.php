@extends('layout.master')
<div class="container mt-5">
    <div class=" row justify-content-center">
        <div class="col-md-7 mt-5">
        @if (session('usuarioModificado'))
                <div class="alert alert-success">
                    {{session('usuarioModificado')}}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                </div>
            @endif


    <head>
      
  
        <div class="card">
        <form action="{{route('edit', $usuario->id)}}" method="POST">
                @csrf @method('POST')
                     
                    <div class="card-header text-center">Actualizar usuario {{$usuario->id}}</div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2" position="right">Nombre</label>
                                <input type="text" name="nombre" value="{{$usuario->nombre}}"  class="form-control col-md-9">
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2">Email</label>
                                <input type="text" name="email" value="{{$usuario->email}}" class="form-control col-md-9">
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2">Dirección de casa</label>
                                <input type="text" name="direccion"  value="{{$usuario->direccion}}" class="form-control col-md-9">
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2">Tipo de instrumento</label>
                                <input type="text" name="instrumento" value="{{$usuario->instrumento}}" class="form-control col-md-9">
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2">Número de usuario</label>
                                <input type="text" name="usuarios" value="{{$usuario->usuarios}}" class="form-control col-md-9">
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2">¿Tiene experiencia con algún instrumento? Responda "sí" o "no"</label>
                                <input type="text" name="exp" value="{{$usuario->exp}}" class="form-control col-md-9">
                            </div>
                            <div class="row form-group mt-5">
<button type="submit" class="btn btn-success col-md-9 offset-2 btn-block" >
                                    Actualizar
                                </button>
                                <a class="btn btn-primary col-md6 btn-block" href="{{ url('/index') }}"> Ver usuarios </a>
                            </div>
                        
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</head>