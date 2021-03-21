@extends('layout.master')
<div class="container mt-5">
    <div class=" row justify-content-center">
        <div class="col-md-7 mt-5">
        @if (session('usuarioGuardado'))
                <div class="alert alert-success">
                    {{session('usuarioGuardado')}}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                </div>
            @endif


    <head class="estai">
      <link rel="stylesheet" type="text/css" href="estilo.css">
  
        <div class="card">
                <form action="{{route('save')}}" method="POST">
                @csrf
                    <div class="card-header text-center">Agregar usuario</div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2" position="right">Nambre</label>
                                <input type="text" name="nombre" class="form-control col-md-9">
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2">Email</label>
                                <input type="text" name="email" class="form-control col-md-9">
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2">Dirección de casa</label>
                                <input type="text" name="direccion" class="form-control col-md-9">
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2">Tipo de instrumento</label>
                                <input type="text" name="instrumento" class="form-control col-md-9">
                            </div>
                            <div class="row form-group">
                                <label for="" class="col-2  mb-2">¿Tiene experiencia con algún instrumento? Responda "sí" o "no"</label>
                                <input type="text" name="exp" class="form-control col-md-9">
                            </div>
                            <div class="row form-group mt-5">
<button type="submit" class="btn btn-success col-md-9 offset-2 btn-block" >
                                    Guardar
                                </button>
                            </div>
                            <div class="row form-group mt-7">
<button type="submit" class="btn btn-success col-md-9 offset-2 btn-block">
                                    Eliminar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</head>