<?php get_header(); ?>

<body>

	<section id="contenedorPrincipal">

		<header>

			<div class="logo">
				<a href="http://www.aiacp.org"><img src="<?php bloginfo('template_directory')?>/img/logo.jpg" alt="Loigo del aiacp Argentina"></a>
				<h1>XVII Encuentro Iberoamericano</h1>
				<h2>Enfoque Centrado en la Persona</h2>
			</div> <!-- End of logo-->

			<?php include("banner-header.php"); ?>

		</header> <!-- End of header -->

		<div class="clear"></div>

		<?php include("nav.php"); ?>

		<section class="vidriera">
			<?php if ( function_exists( 'show_simpleresponsiveslider' ) ) show_simpleresponsiveslider(); ?>
		</section> <!-- End of vidriera -->

		<section class="division"></section>

		<section class="destacado">
			<!-- loop -->
            <?php query_posts('category_name=destacada&showposts=1'); ?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
            <?php the_post(); ?>

            <hgroup>
            	<h2><?php the_title(); ?></h2>
            </hgroup>

            <section class="verArticulo">
               	<?php the_content(); ?>
            </section> <!-- End of verArticulo -->

            </div>
            <?php endwhile; else:  endif; ?>
            <!-- fin loop -->
		</section> <!-- End of destacado -->

		<?php include("links.php"); ?>

		<?php include("banner-footer.php"); ?>

<?php get_footer(); ?>