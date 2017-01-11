@extends('layouts.clear')
@section('meta')
<title>donde.huesped.org.ar | Fundación Huésped</title>
<meta name="description" content="Conocé dónde hacerte el test de VIH o dónde conseguir preservativos gratuitos.">
<meta name="author" content="Fundación Huésped">
<link rel="canonical" href="https://www.huesped.org.ar/donde/"/>
<meta property='og:locale' content='es_LA'/>
<meta property='og:title' content='donde.huesped.org.ar | Fundación Huésped'/>
<meta property="og:description" content="Conoce dónde hacerte la prueba de VIH y buscar condones gratis. También encuentra los vacunatorios y centros de infectología más cercanos." />
<meta property='og:url' content='https://www.huesped.org.ar/donde/'/>
<meta property='og:site_name' content='Fundación Huésped'/>
<meta property='og:type' content='website'/>
<meta property='og:image' content='https://www.huesped.org.ar/donde/img/icon/apple-touch-icon-152x152.png'/>
<meta property='fb:app_id' content='459717130793708' />
<meta name="twitter:card" content="summary">
<meta name='twitter:title' content='donde.huesped.org.ar | Fundación Huésped'/>
<meta name="twitter:description" content="Conocé dónde hacerte el test de VIH o dónde conseguir preservativos gratuitos." />
<meta name='twitter:url' content='https://www.huesped.org.ar/donde/'/>
<meta name='twitter:image' content='https://www.huesped.org.ar/donde/img/icon/apple-touch-icon-152x152.png'/>
<meta name='twitter:site' content='@fundhuesped' />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
@stop

@section('content')

 <nav>
    <div class="nav-wrapper">
      <a href="{{ url('/#/') }}" class="brand-logo"><img class="logoTop" src="/images/HUESPED_logo_donde_RGB-07_cr.png"> </a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      <ul class="right hide-on-med-and-down">
           <li><a class="modal-trigger" href="#modal1"><i class="mdi-action-info"></i></a></li>
           <li><a class="modal-trigger" href="/#/localizar/all/listado"><i class="mdi-maps-place left"></i></a></li>
           <li><a class="" href="/form"><i class="mdi-content-add-circle-outline"></i></a></li>
      </ul>
      
      <ul ng-show="navigating"  class="left wow fadeIn">
           <li><a href="{{ url('/#/') }}"> <i class="mdi-navigation-chevron-left right"></i></a></li>
	        <li>INICIO</li>
      </ul>

      <ul class="side-nav" id="mobile-demo">
          <li><a href="#/acerca">
            <i class="mdi-action-info left"></i>Información
            </a>
          </li>
          <li><a href="#/localizar/all/listado">
            <i class="mdi-maps-place left"></i>Cercanos</a></li>
          <li><a href="form">
            <i class="mdi-content-add-circle-outline left"></i>
            Sugerir</a>
          </li>

      </ul>
    </div>
  </nav>


<div class="boxLanding-seo">
	<ul class="collection">
		<li class="collection-item collection-seo">
			<div class="row valign">
				<div class="row left-align">
					<span><b class="text-seo">{{$pais}}</b> > <b class="text-seo">{{$provincia}}</b> > <b class="text-seo">{{$partido}}</b></span>
				</div>
			</div>
		</li>
		<li class="collection-item collection-seo">
			<div class="row valign ">
				<div class="Aligner-seo">
					<div class="Aligner-item Aligner-item--top"><i class="mdi-hardware-keyboard-arrow-down i-seo"></i></div>
					<div class="Aligner-item"><span><b>¿Qué estás buscando?</b></span></div>
				</div>
			</div>
		</li>
		<div class="icon-seo">
			<div class="">
				<table class="highlight centered">
				<div class="row">
					@foreach ($allElements as $key => $service)
					    <div class="col s6 m6 l6 grid-seo">
					        <a class="services-seo" href="servicio/{{serialize($service)}}">
					        	<div class="center promo">
					             <img width="70px" src="../../../../../../images/{{$service['icon']}}">
					             {{-- <img width="70px" src="/images/{{$service['icon']}}"> --}}
					            <p class="item-seo"> {{$service['title']}}</p>
					        	</div>
					        </a>
					    </div>
					@endforeach
				</div>
			</div>

		</div>
	</ul>
</div>

<div class="container" ng-show="main">

				<ul class="collection menuprincipal">
					<a ng-href="#/como-buscas/[[single.code]]" >
						@foreach ($allElements as $key => $service)	
						<li class="collection-item avatar">
				        <a ng-href="servicio/{{serialize($service)}}" class="secondary-content"><img src="../../../../../../images/{{$service['icon']}}"  class="circle"> </a>
				        <span class="title">{{$service['title']}}</span>
	 					 <a ng-href="servicio/{{serialize($service)}}" class="secondary-content"><i class="mdi-navigation-chevron-right"></i></a>
	 					{{-- <span><i class="mdi-navigation-chevron-right"></i></span> --}}
				        <p>{{$service['code']}}</p>
				    	</li>
						@endforeach
					</a>
				</ul>

			</div>


@include('acerca')

@stop


