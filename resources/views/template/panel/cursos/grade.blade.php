@extends('layout.profile')
@section('title', "Mis cursos")
@section('content')
<style>
 img{
        width: 100%;
    }
    iframe{
        width: 100%;
    }
    .h3-4 {
        font-size: 16px;   
        color: #38076D;    
    }
    i{
        color: #38076D;
    }
</style>
<div class="contenedor">  
    <a href="{{route('cursos.mine')}}"  class="h3-4"> <i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Volver a Cursos</a>  
 </div>
 <div class="row align-items-stretch">
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div style="border-radius: 6%; overflow:hidden;" class="card h-100">
            <div>
                <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}"></a>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <p>Day 1 - Demystifying Pitch Decks</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div style="border-radius: 6%; overflow:hidden;" class="card h-100">
            <div>
                <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}"></a>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <p>Day 2 - The Ideal Pitch Deck Structure
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div style="border-radius: 6%; overflow:hidden;" class="card h-100">
            <div>
                <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}"></a>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <p>Day 3 - Pitch Deck Section 1: Intro</p>
            </div>
        </div>
    </div>    
</div>
@endsection