@extends('layout.profile')
@section('title', "Mis cursos")
@section('content')
<style>
    .contenedor {
        display: flex;
    }
    .h3-1 {
        margin-right: 490px;
        font-size: 16px;  
       
    }     
    i.{
        position: absolute;
    }
 img{
        width: 100%;
    }
    iframe{
        width: 100%;
    }
    i{
        color: #009ef7;
    }
</style>
<div class="contenedor">  
   <a href="{{route('cursos.mine')}}"  class="h3-1"> <i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Volver a Cursos</a>    
    <h4 class="h3-2">Videos relacionados</h4>  
</div>
<div class="row">
<div class="col-lg-8 col-md-6 col-12 mt-6">
    <div  class="card h-100">
        <div>
            <iframe width="627" height="350" src="https://www.youtube.com/embed/vhSnFWEksog" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 1 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 col-12 mt-6">
    <div  class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}" width="300" height="200"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-6 col-1 mt-1">    
</div>
<div class="col-lg-4 col-md-6 col-12 mt-6">
    <div  class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}" width="300" height="200"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-6 col-12 mt-6">    
</div>
<div class="col-lg-4 col-md-6 col-12 mt-6">
    <div  class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}" width="300" height="200"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-6 col-12 mt-6">    
</div>
<div class="col-lg-4 col-md-6 col-12 mt-6">
    <div  class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}" width="300" height="200"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-6 col-12 mt-6">    
</div>
<div class="col-lg-4 col-md-6 col-12 mt-6">
    <div  class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}" width="300" height="200"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-6 col-12 mt-6">    
</div>
<div class="col-lg-4 col-md-6 col-12">
    <div  class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}" width="300" height="200"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-6 col-12 mt-6">    
</div>
<div class="col-lg-4 col-md-6 col-12 mt-6">
    <div  class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}" width="300" height="200"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-6 col-12 mt-6">    
</div>
<div class="col-lg-4 col-md-6 col-12 mt-6">
    <div  class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}" width="300" height="200"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-6 col-12 mt-6">    
</div>
<div class="col-lg-4 col-md-6 col-12 mt-6">
    <div  class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}" width="300" height="200"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-6 col-12 mt-6">    
</div>
<div class="col-lg-4 col-md-6 col-12 mt-6">
    <div  class="card h-30">
        <div>
            <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}" width="300" height="200"></a>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <p>Day 3 - Demystifying Pitch Decks</p>
        </div>
    </div>
</div> 
</div>
</div>
@endsection