@extends('layout.profile')
@section('title', "Mis cursos")
@section('content')
<style>
    .contenedor {
        display: flex;
    }

    .h3-1 {
        margin-right: 559px;
    }
    .h3-2 {
        color: #38076D;
        font-size: 16px;
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
    
</style>
<div class="contenedor">
    <h4 class="h3-1">Curso de Emprendimiento Enti</h4>

    <a href="{{route('cursos.grade')}}" class="h3-2">Mostrar más&nbsp;<i class="fa fa-location-arrow"></i></a>
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
<script>
    var reproductor = videojs('fm-video', {
        fluid: true
    });
</script>
@endsection