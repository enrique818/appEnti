@extends('layout.profile')
@section('title', "Mis cursos")
@section('content')
<style>
    .contenedor {
        display: flex;
    }
    .h3-4 {
        margin-right: 490px;
        font-size: 16px;  
        color: #38076D;
       
    }        
 img{
        width: 100%;
    }
    iframe{
        width: 100%;
        
    }
    i{
        color: #38076D;
    }
    .bt iframe{
        height: 350px;
    }
</style>
<div class="contenedor">  
   <a href="{{route('cursos.mine')}}"  class="h3-4"> <i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Volver a Cursos</a>    
    <h4 class="h3-2">Videos relacionados</h4>  
</div>
<div class="row">
<div style="width: 600px; " class="col-lg-4 col-md-6 col-12 mt-6">
    <div style="border-radius: 6%; overflow:hidden;" class="card h-30">
        <div class="bt">
            <iframe   src="https://www.youtube.com/embed/vhSnFWEksog" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 1 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="col-lg-4 col-md-6 col-12 mt-1">
    <div style="border-radius: 6%; overflow:hidden;" class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-1 col-1 mt-1">    
</div>
<div class="col-lg-4 col-md-6 col-12 mt-1">
    <div  style="border-radius: 6%; overflow:hidden;" class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-6 col-12 mt-6">    
</div>
<div class="col-lg-4 col-md-6 col-12 mt-6">
    <div style="border-radius: 6%; overflow:hidden;" class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-6 col-12 mt-6">    
</div>
<div class="col-lg-4 col-md-6 col-12 mt-6">
    <div style="border-radius: 6%; overflow:hidden;" class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-6 col-12 mt-6">    
</div>
<div class="col-lg-4 col-md-6 col-12 mt-6">
    <div style="border-radius: 6%; overflow:hidden;" class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-6 col-12 mt-6">    
</div>
<div class="col-lg-4 col-md-6 col-12  mt-6">
    <div style="border-radius: 6%; overflow:hidden;" class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-6 col-12 mt-6">    
</div>
<div class="col-lg-4 col-md-6 col-12 mt-6">
    <div style="border-radius: 6%; overflow:hidden;" class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-6 col-12 mt-6">    
</div>
<div class="col-lg-4 col-md-6 col-12 mt-6">
    <div style="border-radius: 6%; overflow:hidden;" class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-6 col-12 mt-6">    
</div>
<div class="col-lg-4 col-md-6 col-12 mt-6">
    <div style="border-radius: 6%; overflow:hidden;" class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-6 col-12 mt-6">    
</div>
<div class="col-lg-4 col-md-6 col-12 mt-6">
    <div style="border-radius: 6%; overflow:hidden;" class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div> 
</div>
</div>
@endsection