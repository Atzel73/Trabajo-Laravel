@extends('layout.master')
<h2 align="center">Instrumento musical mecánico</h2>


<h4 align="justify"> Un instrumento musical mecánico, también llamado automático o automatófono, es un instrumento musical que ejecuta música por sí mismo, sin necesidad de la acción de un intérprete. También entran dentro de esta categoría aquellos instrumentos, como el organillo, que pueden reproducir música con la ayuda de una palanca o algún tipo de mecanismo que debe ser accionado por una persona. </h4>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Instrumento</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">16</th>
      <td <p class="fst-italic">Armónica</td>                  
    </tr>
    <tr>
      <th scope="row">17</th>
      <td <p class="fst-italic">Gaita</td>
    </tr>
    <tr>
      <th scope="row">18</th>
      <td colspan="2" <p class="fst-italic">Flauta de pan</td>
    </tr>
    <tr>
      <th scope="row">19</th>
      <td colspan="2" <p class="fst-italic">Quena</td>
    </tr>
    <tr>
      <th scope="row">20</th>
      <td colspan="2" <p class="fst-italic">Órgano</td>
    </tr>
  </tbody>
</table>
<a class="btn btn-success mb-5"    href="{{ url('/inicio') }}">Para poder comprar el instrumento que quieras, es necesario registrarte.  </a>
<a class="btn btn-success mb-5"    href="{{ url('/view') }}">Volver a la selección  </a>