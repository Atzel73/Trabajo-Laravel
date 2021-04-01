@extends('layout.master')
<h3 align="center"> Instrumentos de frotación o cuerda frotada</h3>
 <h4 <p class="fst-italic">
 Pertenecen al grupo instrumentos de cuerdas frotadas aquellos cuyo sonido se obtiene a través de un arco (generalmente con el arco hecho de madera, que es la zona de sujeción, y un conjunto de cuerdas de crin tensadas debido a que se sujetan a los dos extremos del arco y con las que se frotan las cuerdas), aunque también existe una técnica de «pellizcar» la cuerda, llamada pizzicato.</h4>

<h5 <p class="fst-italic">1.- El pizzicato se logra pellizcando la cuerda con los dedos, no frotándola con el arco. </h5>
<h5 <p class="fst-italic">2.- El trémolo (en italiano, temblor) se indica trazando unas líneas a través de la plica de una nota y es el signo empleado para indicar la ejecución de una sola nota, rozando el arco rápidamente. </h5>
<h5 <p class="fst-italic">3.-Col legno (en italiano, con la madera) quiere decir que se debe rozar la cuerda con la madera de la barra del arco en lugar de con las cerdas. </h5>
<h5 <p class="fst-italic">4.- Col sordino (en italiano, con sordina) indica el empleo de la sordina, que es una pequeña grapa que se coloca encima o sobre el puente para impedir la total resonancia del cuerpo del instrumento. De esta forma se enmudece o se apaga la intensidad del sonido producido. </h5>
<h5 <p class="fst-italic">5.- Sul ponticello (sobre el puente) indica al ejecutante que roce el arco lo más cerca posible del puente del instrumento. Produce un sonido duro y agrio que puede resultar apto en ciertos contextos, por ejemplo para conseguir una atmósfera de misterio. </h5>
<h5 <p class="fst-italic">6.- Sul tasto (sobre el diapasón) indica todo lo opuesto a sul ponticello. El ejecutante debe rozar el arco cerca del diapasón del instrumento. El efecto conseguido es particularmente suave , sinfónico y meloso. </h5>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Instrumento</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td <p class="fst-italic">Violín</td>                  
    </tr>
    <tr>
      <th scope="row">2</th>
      <td <p class="fst-italic">Violonchelo</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2" <p class="fst-italic">La viola</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td colspan="2" <p class="fst-italic">Contrabajo</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td colspan="2" <p class="fst-italic">Guitarra</td>
    </tr>
  </tbody>
</table>
<a class="btn btn-success mb-5"    href="{{ url('/inicio') }}">Para poder comprar el instrumento que quieras, es necesario registrarte.  </a>
<a class="btn btn-success mb-5"    href="{{ url('/view') }}">Volver a la selección  </a>