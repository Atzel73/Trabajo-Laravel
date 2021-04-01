@extends('layout.master')
<h2 align="center">Instrumentos punteados </h2>
 

<h3 align="justify" <p class="fst-italic">La mayoría de instrumentos de cuerda punteada se basa exactamente en el mismo principio que los de arco – tienen una caja de resonancia y un mástil a lo largo del cual se extienden las cuerdas con un sistema de clavijas y puentes; el instrumentista presiona las cuerdas contra un diapasón (con trastes) unido al mástil para acortar la longitud de las cuerdas y producir una gama de sonidos muy completa. </h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Instrumento</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">6</th>
      <td <p class="fst-italic">Laúd</td>                  
    </tr>
    <tr>
      <th scope="row">7</th>
      <td <p class="fst-italic">Arpa</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td colspan="2" <p class="fst-italic">Cítara</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td colspan="2" <p class="fst-italic">Mandolina</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td colspan="2" <p class="fst-italic">Bandurria</td>
    </tr>
  </tbody>
</table>
<a class="btn btn-success mb-5"    href="{{ url('/inicio') }}">Para poder comprar el instrumento que quieras, es necesario registrarte.  </a>
<a class="btn btn-success mb-5"    href="{{ url('/view') }}">Volver a la selección  </a>