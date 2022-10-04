@extends('layout.profile')
@section('title',  "Ofertas recibidas")

<meta name="csrf-token" content="{{ csrf_token() }}" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Ofertas recibidas</h3>
			</div>		
			<div class="card-footer">
				<form id="data" method="POST" action="{{route('user.information')}}" class="axios-form" accept-charset="utf-8">
					@csrf
					@method('PUT')					
                    <x-input  name="precio" label="Precio de la oferta" placeholder="Ingrese el precio de la oferta" :required="false" :value="auth()->user()->precio"/>
                    <x-textarea name="descipcion" label="Descripción del proyecto" placeholder="Describa el contenido del proyecto" :required="false" :value="auth()->user()->descipcion"/>
                    <x-textarea name="plazo" label="Plazo estimado del proyecto" placeholder="Describa plazo estimado del proyecto" :required="false" :value="auth()->user()->plazo"/>
				</form>
				<button type="submit" class="btn btn-rosa mx-1">Aceptar</button>
							<button type="submit" class="btn btn-primary">Declinar </button>
							<div style="float:right;">
								<button type="button" id="btnresult" class="btn btn-rosa mx-1 formulario-enviar"></button>	
							</div>
			</div>			
		</div>
	</div>
</div>
@endsection

@push('js-scripts')
<script src="{{asset('js/form.js')}}" type="text/javascript" charset="utf-8" async defer></script>
@endpush