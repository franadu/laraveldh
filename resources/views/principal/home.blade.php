@extends('principal/app')

@section('main')
	<main>
		<div	 class="container_home">
			<div class="containerHomeProducts">
				<h1 class="h1_home">Ofertas Para ti</h1>
				<!-- ......CONTAINER DEL HOME......... -->
				<div	 class="container_home">
					<!-- .......CONTAINER DE LOS PRODUCTOS.... -->
					<div class="containerHomeProducts">

						<section class="home_products">

							<article class="home_article">
								<img src="images/placaVideo/msi-radeon-rx-580-armor8gb.webp" alt="">
								<div class="home_product_inside">
		              <h3>$10.999</h3>
		              <h4>Notebook Asus Vivobook</h4>
		            </div>
							</article>

							<article class="home_article">
								<img src="images/placaVideo/msi-radeon-rx-580-armor8gb.webp" alt="">
								<div class="home_product_inside">
		              <h3>$10.999</h3>
		              <h4>Notebook Asus Vivobook</h4>
		            </div>
							</article>

							<article class="home_article">
								<img src="images/placaVideo/msi-radeon-rx-580-armor8gb.webp" alt="">
								<div class="home_product_inside">
		              <h3>$10.999</h3>
		              <h4>Notebook Asus Vivobook</h4>
		            </div>
							</article>

							<article class="home_article">
								<img src="images/placaVideo/msi-radeon-rx-580-armor8gb.webp" alt="">
								<div class="home_product_inside">
		              <h3>$10.999</h3>
		              <h4>Notebook Asus Vivobook</h4>
		            </div>
							</article>
						</section>

						<h2 class="home_titles">Lo mas destacado</h2>

						<section class="home_products">
							<article class="home_offers">

								<img src="images/placaVideo/msi-radeon-rx-580-armor8gb.webp" alt="">
								<div class="home_product_inside">
		              <h3>$10.999</h3>
		              <h4>Notebook Asus Vivobook</h4>
		            </div>
							</article>

							<article class="home_offers">
								<img src="images/placaVideo/msi-radeon-rx-580-armor8gb.webp" alt="">
								<div class="home_product_inside">
		              <h3>$10.999</h3>
		              <h4>Notebook Asus Vivobook</h4>
		            </div>
							</article>

							<article class="home_offers">
								<img src="images/placaVideo/msi-radeon-rx-580-armor8gb.webp" alt="">
								<div class="home_product_inside">
		              <h3>$10.999</h3>
		              <h4>Notebook Asus Vivobook</h4>
		            </div>
							</article>

						</section>

						<h2 class="home_titles">Placas de Videos</h2>

						<section class="home_products">
							<article class="home_article">
								<img src="images/placaVideo/msi-radeon-rx-580-armor8gb.webp" alt="">
								<div class="home_product_inside">
		              <h3>$10.999</h3>
		              <h4>Notebook Asus Vivobook</h4>
		            </div>
							</article>
							<article class="home_article">
								<img src="images/placaVideo/msi-radeon-rx-580-armor8gb.webp" alt="">
								<div class="home_product_inside">
		              <h3>$10.999</h3>
		              <h4>Notebook Asus Vivobook</h4>
		            </div>
							</article>
							<article class="home_article">
								<img src="images/placaVideo/msi-radeon-rx-580-armor8gb.webp" alt="">
								<div class="home_product_inside">
		              <h3>$10.999</h3>
		              <h4>Notebook Asus Vivobook</h4>
		            </div>
							</article>
							<article class="home_article">
								<img src="images/placaVideo/msi-radeon-rx-580-armor8gb.webp" alt="">
								<div class="home_product_inside">
		              <h3>$10.999</h3>
		              <h4>Notebook Asus Vivobook</h4>
		            </div>
							</article>
						</section>

					</div>


		<!-- .......CATEGORIAS........ -->
		@include ('principal/html/categorias')
		</div>
	</main>
@endsection
