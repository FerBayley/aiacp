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

		<section id="contenidoEstatuto">
			<!-- loop -->
           		<?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                <?php the_post(); ?>

                <div id="post-<?php the_ID(); ?>">

                    <hgroup>
                        <h2><?php the_title(); ?></h2>
                    </hgroup>

                <?php the_content('<a href="#"><small>ver +</small></a>'); ?>
                <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            <!-- fin loop -->
		</section> <!-- End of contenidoEstatuto -->

		<?php include("links.php"); ?>

		<?php include("banner-footer.php"); ?>

	<?php get_footer(); ?>