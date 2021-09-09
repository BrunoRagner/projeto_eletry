
@extends('layouts.main')

@section('title', 'eletrytecnologias ')


@section('content')

<div class="topnav" id="myTopnav">
  <a href="b1" class="active">Inicio</a>
  <a href="b1">sobre nós</a>
  <a href="b2">Contatos</a>
  <div class="dropdown">
    <button class="dropbtn">equipamentos e serviços
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">desenvolvimento web</a>
      <a href="#">serurança eletronica </a>
      <a href="#">redes</a>
    </div>
  </div>
  <a href="#about"></a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-left:16px">
  <h2 >eletry tecnologia</h2>


</div>

 <!-- Slideshow container -->
 <div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="/img/cftv.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="/img/to.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="/img/ta.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>

@endsection
