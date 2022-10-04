@extends('layout.profile')
@section('title',  "Proyectos propuestos")

<meta name="csrf-token" content="{{ csrf_token() }}" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header" id="kt_chat_messenger_header">
				<div class="card-title">
				<div class="d-flex justify-content-center flex-column me-3">
				 
				</div>
			</div>
		</div>
			<div class="card-header">
				<h3 class="card-title">Proyectos propuestos</h3>
			</div>		
			<div class="card-footer">
				<form id="data" method="POST" action="" class="axios-form" accept-charset="utf-8">					
                    <x-input  name="precio_oferta" label="Precio de la oferta" :required="false" :value="auth()->user()->precio"/>
                    <x-textarea name="descripcion_proyecto" label="Descripcion del proyecto"  :required="false" :value="auth()->user()->descripcion"/>
                    <x-textarea name="plazo_proyecto" label="Plazo estimado del proyecto"  :required="false" :value="auth()->user()->plazo"/>
					
					<div style="float:right;">
						<button type="button" id="btnresult" class="btn btn-rosa mx-1 formulario-enviar"></button>	
					</div>			
				</form>		
				<div class="mt-5">
					  <button type="submit"  data-toggle="modal" data-target="#ofertaModal" class="btn btn-primary">Editar</button>
					  <!-- Modal -->
					  <div class="modal fade" id="ofertaModal" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
						  <div class="modal-content">
							<div class="modal-header">
							  <h5 class="modal-title" id="exampleModalLabel">Editar Datos</h5>
							  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							  </button>
							</div>	 
							<form id="data" method="POST" action="{{route('user.information')}}" class="axios-form" accept-charset="utf-8">
								@csrf
								@method('PUT')
							<div class="modal-body">				
								<x-input name="precio" label="Precio de la oferta" :required="false" :value="auth()->user()->precio" />
								@error('precio_oferta')
								<small style="color:red">{{ $message }}</small>
								@enderror
								<x-textarea name="descripcion" label="Descripcion del proyecto" cols="20" rows="10" :required="false" :value="auth()->user()->descripcion"/>
								@error('descripcion_proyecto')
								<small style="color:red">{{ $message }}</small>
								@enderror
								<x-textarea name="plazo" label="Plazo estimado del proyecto" :required="false" :value="auth()->user()->plazo"/>
								@error('plazo_proyecto')
								<small style="color:red">{{ $message }}</small>
								@enderror
								</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							  <button type="submit"  id="btnresult" class="btn btn-primary">Guardar</button>
							</div>
						</form>
						  </div>
						</div>
					  </div>
			</div>
			</div>			
		</div>
	</div>
</div>
@endsection

@push('js-scripts')
<script src="{{asset('js/form.js')}}" type="text/javascript" charset="utf-8" async defer></script>
<script>
	$('.formulario-enviar').button(function(e){
	e.preventDefault();
	
	Swal.fire({
	  title:'¿Estás seguro de enviar la oferta?',
	  showDenyButton: true,
	  showCancelButton: true,
	  confirmButtonText: 'Si',
	  cancelButtonText: 'No',
	  denyButtonText: `Don't save`,
	}).then((result) => {
	  /* Read more about isConfirmed, isDenied below */
	  if (result.isConfirmed) {
		Swal.fire('Saved!', '', 'success')
	  } else if (result.isDenied) {
		Swal.fire('Changes are not saved', '', 'info')
	  }
	
	  this.submit();
	})
	
	});
	
	
	</script>
@endpush