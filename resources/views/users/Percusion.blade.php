@extends('layout.master')
<h2 align="center"> Instrumentos de percusión </h2>

 <h4 aligm="justify" <p class="fst-italic">
 Los instrumentos de percusión son instrumentos que producen sonido al ser golpeados, agitados o percutidos de alguna forma.

Esta percusión puede realizarse mediante baquetas, con barras metálicas, con las manos, con teclados o golpeando dos cuerpos entre ellos. Esta gran variedad de posibilidades permite obtener un amplio rango de sonidos y tipos de instrumentos.
 </h4>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Instrumento</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">11</th>
      <td <p class="fst-italic">Mombo</td>                  
    </tr>
    <tr>
      <th scope="row">12</th>
      <td <p class="fst-italic">Maracas</td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td colspan="2" <p class="fst-italic">Platos</td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td colspan="2" <p class="fst-italic">Triángulo</td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td colspan="2" <p class="fst-italic">Pandereta</td>
    </tr>
  </tbody>
</table>
<a class="btn btn-success mb-5"    href="{{ url('/inicio') }}">Para poder comprar el instrumento que quieras, es necesario registrarte.  </a>
<a class="btn btn-success mb-5"    href="{{ url('/view') }}">Volver a la selección  </a>