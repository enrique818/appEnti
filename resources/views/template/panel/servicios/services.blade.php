    @extends('layout.profile')
    @section('title',  "Buscar servicios")
    @section('content')
    <div class="row g-6 mb-6 g-xl-9 mb-xl-9">
    	<div class="col-lg-12 text-center">
    		<div style="border-radius: 10%;" class="card text-center">
    			<div class="card-body text-center">
    				<div class="d-flex flex-wrap">
    
            <div class="d-flex flex-column flex-center w-100 min-h-300px min-h-lg-200px px-9"> 
    		<div class="text-center mb-1 mb-lg-1 py-1 py-lg-1">
            <h1 style="color:#38076D;" class="lh-base fw-bolder fs-1x fs-lg-1x mb-1">Sin gastos fijos, sin cobrarte nada por adelantado, sin costos escondidos, en <strong>En</strong><span class="text-primary">ti</span> te ayudamos de forma personalizada a levantar capital para tu startup</span>
            </div>
        </div>
     	   <div class="d-flex flex-column flex-center w-100 min-h-3px min-h-lg-3px px-3">
        <div class="text-center mb-5 mb-lg-5 py-5 py-lg-7">
            <h1 style="color:#38076D;" class="lh-base fw-bolder fs-1x fs-lg-1x mb-1">Únicamente comisionamos si logramos traer capital a tu compañía</span>
            </div>
        </div>
           <div class="d-flex flex-column flex-center w-100 min-h-3px min-h-lg-3px px-3">
       <div class="text-center mb-1 mb-lg-2 py-2 py-lg-1">
            <h1 style="color:#38076D;" class="lh-base fw-bolder fs-1x fs-lg-1x mb-1">Contacta al equipo <strong>En</strong><span class="text-primary">ti</span> para conocer cómo te podemos ayudar</span>
            </div>
        </div>
        <div class="d-flex flex-column flex-center w-100 min-h-3px min-h-lg-3px px-3">
       <div class="text-center mb-1 mb-lg-1 py-1 py-lg-1">
       <a  href="https://wa.me/573015650462"  class="whatsapp" target="_blank"><img alt="whatsApp" style="border-radius: 10%;" src="{{asset('enti/whatsApp.png')}}" </a>
        </div>
        </div>
          </div>
    			</div>
    		</div>
    	</div>
    @endsection
