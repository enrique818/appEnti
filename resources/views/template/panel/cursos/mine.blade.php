@extends('layout.profile')
@section('title', "Mis cursos")
@section('content')
<style>
    .contenedor {
        display: flex;
    }

    .h3-1 {
        margin-right: 715px;
    }
    .h3-2 {
        color: #009ef7;
        font-size: 16px;
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
    <h4 class="h3-1">Pitch Decks</h4>

    <a href="{{route('cursos.grade')}}" class="h3-2">Mostrar más</a>&nbsp;<i class="fa fa-location-arrow"></i>
</div>
<div class="row align-items-stretch">
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div class="card h-100">
            <div>
                <video width=298 class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}" controls id="fm-video">
                    <source src="{{asset('videos/ejemplo.mp4')}}"  type="video/mp4">
                    Lo sentimos. Este vídeo no puede ser reproducido en tu navegador.<br>
                    La versión descargable está disponible en <a href="URL">Enlace</a>.
                </video>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <p>Day 1 - Demystifying Pitch Decks</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div class="card h-100">
            <div>
                <video src="{{asset('videos/granja.mp4')}}" width=298 controls>
                    Lo sentimos. Este vídeo no puede ser reproducido en tu navegador.<br>
                    La versión descargable está disponible en <a href="URL">Enlace</a>.
                </video>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <p>Day 2 - The Ideal Pitch Deck Structure
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div class="card h-100">
            <div>
                <video src="{{asset('videos/arroz.mp4')}}" width=298 controls>
                    Lo sentimos. Este vídeo no puede ser reproducido en tu navegador.<br>
                    La versión descargable está disponible en <a href="URL">Enlace</a>.
                </video>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <p>Day 3 - Pitch Deck Section 1: Intro</p>
            </div>
        </div>
    </div>
    <div class="mt-6">
   <div class="contenedor">
        <h4 class="h3-1">Pitch Decks</h4>
        <a href="{{route('cursos.grade')}}" class="h3-2">Mostrar más</a>&nbsp;<i class="fa fa-location-arrow"></i>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div class="card h-100">
            <div>
                <iframe width="300" height="200" src="https://www.youtube.com/embed/vhSnFWEksog" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <p>Day 1 - Demystifying Pitch Decks</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div class="card h-100">
            <div>
                <iframe width="300" height="200" src="https://www.youtube.com/embed/vhSnFWEksog" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <p>Day 2 - The Ideal Pitch Deck Structure
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div class="card h-100">
            <div>
                <iframe width="300" height="200" src="https://www.youtube.com/embed/vhSnFWEksog" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <p>Day 3 - Pitch Deck Section 1: Intro</p>
            </div>
        </div>
    </div>
    <div class="mt-6">
    <div class="contenedor">
        <h4 class="h3-1">Pitch Decks</h4>    
        <a href="{{route('cursos.grade')}}" class="h3-2">Mostrar más</a>&nbsp;<i class="fa fa-location-arrow"></i>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div class="card h-100">
            <div>
                <iframe width="300" height="170" src="https://www.youtube.com/embed/vhSnFWEksog" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <p>Day 1 - Demystifying Pitch Decks</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div class="card h-100">
            <div>
                <iframe width="300" height="170" src="https://www.youtube.com/embed/vhSnFWEksog" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <p>Day 2 - The Ideal Pitch Deck Structure
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div class="card h-100">
            <div>
               <iframe width="300" height="170" src="https://www.youtube.com/embed/vhSnFWEksog" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <p>Day 3 - Pitch Deck Section 1: Intro</p>
            </div>
        </div>
    </div>
    <div class="mt-6">
        <div class="contenedor">
             <h4 class="h3-1">Pitch Decks</h4>
             <a href="{{route('cursos.grade')}}" class="h3-2">Mostrar más</a>&nbsp;<i class="fa fa-location-arrow"></i>
         </div>
         </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div style="border-radius: 10%;" class="card h-100">
            <div>
                <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}" width="300" height="200"></a>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <p>Day 1 - Demystifying Pitch Decks</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div style="border-radius: 10%;" class="card h-100">
            <div>
                <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}"   width="300" height="200"></a>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <p>Day 2 - The Ideal Pitch Deck Structure
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div style="border-radius: 10%;" class="card h-100">
            <div>
                <a href="{{route('cursos.detail')}}"><img alt="Logo" src="{{asset('enti/Day-1.png')}}" width="300" height="200"></a>
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