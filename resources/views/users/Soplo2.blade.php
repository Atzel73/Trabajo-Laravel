@extends('layout.master')
<h1 align="center"> Instrumentos de soplo directo </h1>
<ul class="list-unstyled">
   <li><h2 <p class="fst-italic"> Se clasifican en tres grupos: Viento metal, viento madera y viento mecánico. </h2></li>

   <ul>
    <li><h4 <p class="fst-italic"> <p><small> Viento metal: El sonido se produce por la vibración de los labios del músico en una boquilla metálica.</h4> </p></small> </li>
    <li><h4 <p class="fst-italic"> <p><small> Viento madera: El sonido se produce al soplar el músico sobre un bisel o una lengüeta, haciendo vibrar una caña. </h4> </p></small> </li>
    <li><h4 <p class="fst-italic"> <p><small> Instrumentos musicales de viento mecánico: El sonido se produce por medio del aire suministrado por fuelles, o motores eléctricos, accionados por el músico. </h4> </p></small> </li>
    <li><h4 <p class="fst-italic"> <p><small> Los de viento metal y viento madera son instrumentos de soplo directo, ya el músico es el que hace llegar el aire soplando por una boquilla, un bisel o una lengüeta. Son instrumentos de soplo directo, por ejemplo, el saxofón, la trompeta, el clarinete. </h4> </p></small> </li>

   <li><h4 <p class="fst-italic"> <p><small> Los de viento mecánico, en cambio, son instrumentos de soplo indirecto. En este caso, el aire es suministrado por fuelles o motores eléctricos. Un ejemplo de instrumento de soplo indirecto es, para entenderlo mejor, el acordeón.</h3> </p></small> </li>

   <li><h4 <p class="fst-italic"> <p><small> Los de viento madera, a su vez, se dividen en cinco grupos dependiendo del tipo de embocadura que tengan.</h4> </p></small> </li>

   <li><h4 <p class="fst-italic"> <p><small> Bisel sin conducto: En este grupo están, por ejemplo, la flauta travesera y el flautín. </h4> </p></small>  </li>
   <li><h4 <p class="fst-italic"> <p><small> Bisel con conducto: Algunos ejemplos de instrumentos de bisel con conducto son la flauta dulce y la ocarina. </h4> </p></small> </li>
  </ul>
</ul>






<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Instrumento</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">21</th>
      <td <p class="fst-italic">Saxofón</td>                  
    </tr>
    <tr>
      <th scope="row">22</th>
      <td <p class="fst-italic">Oboe</td>
    </tr>
    <tr>
      <th scope="row">23</th>
      <td colspan="2" <p class="fst-italic">Trompeta</td>
    </tr>
    <tr>
      <th scope="row">24</th>
      <td colspan="2" <p class="fst-italic">Clarinete</td>
    </tr>
    <tr>
      <th scope="row">25</th>
      <td colspan="2" <p class="fst-italic">Fagot</td>
    </tr>
    <tr>
      <th scope="row">26</th>
      <td colspan="2" <p class="fst-italic">Tuba</td>
    </tr>
    <tr>
      <th scope="row">27</th>
      <td colspan="2" <p class="fst-italic">Flauta</td>
    </tr>
    <tr>
      <th scope="row">28</th>
      <td colspan="2" <p class="fst-italic">Trombón</td>
    </tr>
    <tr>
      <th scope="row">29</th>
      <td colspan="2" <p class="fst-italic">Acordeón</td>
    </tr>
    <tr>
      <th scope="row">30</th>
      <td colspan="2" <p class="fst-italic">Ocarina</td>
    </tr>
    <tr>
      <th scope="row">31</th>
      <td colspan="2" <p class="fst-italic">Trompa</td>
    </tr>
    <tr>
      <th scope="row">32</th>
      <td colspan="2" <p class="fst-italic">Órgano</td>
    </tr>
    <tr>
      <th scope="row">33</th>
      <td colspan="2" <p class="fst-italic">Flauta dulce</td>
    </tr>
    <tr>
      <th scope="row">34</th>
      <td colspan="2" <p class="fst-italic">Corneta</td>
    </tr>
    <tr>
      <th scope="row">35</th>
      <td colspan="2" <p class="fst-italic">Fliscorno</td>
    </tr>
    <tr>
      <th scope="row">36</th>
      <td colspan="2" <p class="fst-italic">Saxofón alto</td>
    </tr>
    <tr>
      <th scope="row">37</th>
      <td colspan="2" <p class="fst-italic">Bombardino</td>
    </tr>
  </tbody>
</table>
<a class="btn btn-success mb-5"    href="{{ url('/inicio') }}">Para poder comprar el instrumento que quieras, es necesario registrarte.  </a>
<a class="btn btn-success mb-5"    href="{{ url('/view') }}">Volver a la selección  </a>