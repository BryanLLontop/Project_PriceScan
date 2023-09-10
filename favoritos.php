<?php include("template/header.php");?>

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
                        <li><a href="/index.php">Inicio</a></li>
						<li><a href="/categorias.php">Categorias</a></li>
						<li><a href="#">Ofertas</a></li>
						<li><a href="/nosotros.php">Nosotros</a></li> 
                        <li class="active"><a href="#">Favoritos</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Favoritos</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Inicio</a></li>
							<li class="active">Favoritos</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				<table class="table table-hover">
					<thead>
						<tr>
						<th scope="col">#</th>
						<th scope="col" class="text-center">Imagen</th>
						<th scope="col" class="text-center">Producto</th>
						<th scope="col" class="text-center">Mejor Tienda</th>
						<th scope="col" class="text-center">Precio</th>
						<th scope="col" class="text-center">Accion</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<th scope="row">1</th>
						<td class="text-center">
							<a href="#" class="card-3 c-26-thumbnail">
                                                <picture>
                                                    <img loading="lazy" src="/img/product01.png" width="60" height="60">
                                                </picture>
                                            </a>
						</td>
						<td class="text-center">Fideo Don Victorio Codo Rayado 225gr</td>
						<td class="text-center"><a href="https://www.plazavea.com.pe/apple-iphone-14-plus-6-7--128gb-rojo-100794853/p?utm_source=compy.pe&amp;utm_medium=compy" target="_blank" class="card-3 c-26-store">
                        	<span>Plaza Vea</span>
                            </a> </td>
						<td class="text-center">S/.2.89</td>
						<td class="text-center">
							<div>
                                <button class="btn">
                                    <picture>
                                    <i class="fa fa-close"></i>
                                    </picture>
                                </button>
                                <button class="btn">
                                	<picture>
									<i class="fa fa-bell"></i>
                                	</picture>
                                </button>
                            </div></td>
						</tr>

						<tr>
						<th scope="row">2</th>
						<td class="text-center"><a href="#" class="card-3 c-26-thumbnail">
                                                <picture>
												<img loading="lazy" src="/img/product02.png" width="60" height="60">
                                                </picture>
                                            </a></td>
						<td class="text-center">Aceite Primor 1.8L</td>
						<td class="text-center"><a href="https://www.plazavea.com.pe/apple-iphone-14-plus-6-7--128gb-rojo-100794853/p?utm_source=compy.pe&amp;utm_medium=compy" target="_blank" class="card-3 c-26-store">
                        	  	<span>Metro</span>
                            </a></td>
						<td class="text-center">S/.7.30</td>
						<td class="text-center"><div>
								<button class="btn">
                                    <picture>
                                    <i class="fa fa-close"></i>
                                    </picture>
                                </button>
                                <button class="btn">
                                	<picture>
									<i class="fa fa-bell"></i>
                                	</picture>
                                </button>
                            </div></td>
						</tr>
						
					</tbody>
				</table>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->


<?php include("template/footer.php");?>