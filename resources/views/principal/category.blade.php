@extends('/principal/app')

@section('main')
	@section('main')
		<main>
			<div	 class="container_home">
				<div class="containerHomeProducts">
					<h1 class="h1_home">{{$category[0]->name}}</h1>
						<section class="home_products">
							<h2><a href="/{{$category[0]->name}}">{{$category[0]->name}}</a></h2>
							<!-- blade para ingresar los articulos de home-->
							@if ($products!==[])
								@foreach ($products as $product)
									<article class="home_article">
										<img src="{{$product->image}}" alt="">
										<div class="home_product_inside">
											<a href="/{{$category[0]->name}}/{{$product->id}}">
												<h3>${{$product->price}}</h3>
			              		<h4>{{$product->description}}</h4>
											</a>
		            		</div>
									</article>
								@endforeach
							@else
								<article class="home_article">
									<h3>En Esta sección no se encuentran articulos</h3>
								</article>
							@endif
					</section>
				</div>


			<!-- .......CATEGORIAS........ -->
			@include ('principal/html/categorias')
			</div>
		</main>
	@endsection

@endsection
