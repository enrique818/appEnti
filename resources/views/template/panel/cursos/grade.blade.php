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
</style>
<div class="row align-items-stretch">
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div class="card h-100">
            <div>
                <video src="{{asset('videos/ejemplo.mp4')}}" width=298 controls>
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
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div style="border-radius: 10%;" class="card h-100">
            <div>
                <iframe width="300" height="170" src="https://www.youtube.com/embed/vhSnFWEksog" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <p>Day 1 - Demystifying Pitch Decks</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12 mt-4">
        <div style="border-radius: 10%;" class="card h-100">
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
        <div style="border-radius: 10%;" class="card h-100">
            <div>
                <iframe width="300" height="170" src="https://www.youtube.com/embed/vhSnFWEksog" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>                
            <div class="card-body d-flex flex-column justify-content-between">
                <p>Day 3 - Pitch Deck Section 1: Intro</p>
            </div>
        </div>
    </div>
</div>
@endsection