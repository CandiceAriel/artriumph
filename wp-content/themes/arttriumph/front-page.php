<?php
get_header();
?>
<main id="site-content" role="main">
	<div class="section-inner thin">

		<article class="content">
	    <div class='container'>
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="wp-content/themes/arttriumph/assets/images/LandscapeNearAntwerp.jpg" class="d-block w-100" alt="Landscape Near Antwerp">
				  </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			</div>
			
			<div class="row row-cols-1 mt-4 row-cols-md-2 pd-10">
				<div class="col mb-4">
				  <div class="card">
					<div class="card-body">
					  <h5 class="card-title">Card title</h5>
					  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					</div>
				  </div>
				</div>
				<div class="col mb-4">
				  <div class="card">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>
				  </div>
				</div>
			</div>

			<div class="row row-cols-1 mt-4 row-cols-md-2">
				<section class="border-dark py-5 mt-4 text-center newsletter">
					<h3 class='text-dark d-block'>Stay up to date with every uncoming event</h3>
					<form class="signup-form form-inline justify-content-center pt-3">
						<div class="form-group">
							<label class="sr-only" for="semail">Your email</label>
							<input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
						</div>
						<button type="submit" class="btn btn-primary">Subscribe</button>
					</form>
				</section>
			</div>
		</div>
	    </article>

	</div><!-- .section-inner -->
</main>

<?php
get_footer();
?>
