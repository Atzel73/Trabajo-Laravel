@extends('layout.master')


<div class="card-header text-center">¡Te damos la bienvenida!</div>
<h3 align="left">Te damos la bienvenida a este blog de instrumentos músicales. Encontrarás: </h3> 
 <h4 <p class="fst-italic">1.- Tipos de instrumentos. </h4>
 <h4 <p class="fst-italic">2.- Un apartado para registrarte y estar al tanto de nuestros productos. </h4>
 <h4 <p class="fst-italic">3.- el contacto de la empresa para resolverte cualquier duda posible. </h4>

 <h2>Esperamos que te sea de gran comodidad usar nuestra página. ¡Pasala bien!</h2>

 <img src="src=e:\Users\Propietario\Pictures\Camera Roll\kaede.jpg" class="img-fluid" >


 <a class="btn btn-success mb-5"    href="{{ url('/view') }}" align="center">Comenzar </a>
 <a align="left" class="btn btn-success mb-5"    href="{{ url('/intro') }}">Datos de la empresa </a>