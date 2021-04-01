@extends('layout.master')

<div class="card-header text-center">Bienvenido</div>
<h4 align="justify" > En esta página verás instrumentos músicales de todo tipo. Este es el apartado donde podrás encontrar qué tipo de instrumentos tenemos, además de su ID, el cual nos ayudará a saber cuál quieres. </h4> 

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tipo de instrumento</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td <p class="fst-italic">Frotación</td>
      <td><a class="btn btn-success mb-5"    href="{{ url('/frotar') }}">Página de los instrumentos de frotación </a></td>                   
    </tr>
    <tr>
      <th scope="row">2</th>
      <td <p class="fst-italic">Punteo</td>
      <td><a class="btn btn-success mb-5"    href="{{ url('/punteo') }}">Página de los instrumentos de punteo </a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2" <p class="fst-italic">Percusión</td>
      <td><a class="btn btn-success mb-5"    href="{{ url('/percusion') }}">Página de los instrumentos de percusión </a></td>
    </tr>
    <tr>
    <tr><th> <p><strong>A partir de aquí los siguientes tipos de instrumentos se clasificarán en los dos tipos siguientes, de los cuales vienen de la rama principal de "Instrumentos aerófonos" </p></strong> </th></tr>
      <th scope="row">4</th>
      <td colspan="2" <p class="fst-italic">Soplo mecánico</td>
      <td><a class="btn btn-success mb-5"    href="{{ url('/soplo1') }}">Página de los instrumentos de soplos mecánicos </a></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td colspan="2" <p class="fst-italic">Soplo directo</td>
      <td><a class="btn btn-success mb-5"    href="{{ url('/soplo2') }}">Página de los instrumentos de soplos directos </a></td>
    </tr>
  </tbody>
</table>

<a align="center" class="btn btn-success mb-5"    href="{{ url('/intro') }}"> Contáctanos </a>