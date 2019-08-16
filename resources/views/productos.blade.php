{{-- Para usar la plantilla template.blade.php --}}
@extends('template')

@section('pageTitle', 'Productos')
  <body>

    <div class="container">
      <div class="row">
      <!-- cabecera -->
    <header class="cabecera">
<!-- LOGO -->
</header>

<!-- productos -->
</section >
<div class="products-container">
  <!-- requerir archivo productos -->
  <!-- FOREACH PRODUCTOS -->
  <div class="lista-productos" style="width: 50%;">
    <div class="unProducto">
      <!-- <img src="img/    unProducto IMAGEN  class="card-img-top" alt="imagen del producto"> -->
      <div class="card-body">
        <!-- <h5 class="card-title">      unProducto NOMBRE              </h5> -->
        <!-- <a href="detalle-producto.php?id=     unProducto ID class="btn btn-success">Más info...</a> -->
      </div>
    </div>
  </div>


<!-- FOOTER -->

</div>
</div>
</div>
  </body>
</html>







@section('mainContent')
	<!-- Products -->
	<div class="container" style="margin-top:30px; margin-bottom: 30px;">
		<div class="row">
			<!-- Los productos -->
			@foreach ($productsList as $oneProduct)
			{{-- </?php foreach ($productsList as $oneProduct) : ?> --}}
			<div class="col-md-6 col-lg-4">
				<div class="card" style="margin-bottom: 30px">
					<img src="/images/{{ $oneProduct['image'] }}" class="card-img-top" alt="imagen del producto">
					<div class="card-body">
						<h5 class="card-title">{{ $oneProduct['title'] }}</h5>
						<p class="card-text">{{ substr($oneProduct['description'], 0, 145) }}...</p>
						<p class="card-text">
							@for ($i = 1; $i <= $oneProduct['ranking']; $i++)
								<i class="fa fa-star"></i>
							@endfor
						</p>
						<a href="/products/{{ $oneProduct['id'] }}" class="btn btn-success">Ver detalle del producto</a>
					</div>
				</div>
			</div>
			{{-- </?php endforeach; ?> --}}

			@endforeach
			<!-- Los productos -->
			</div>
		</div>
	</div>
	<!-- //Products -->
@endsection
{{-- Cuando sabemos que lo que vamos a mandar al yield() es contenido real html, estamos obligados a pasarlo de esta manera --}}
