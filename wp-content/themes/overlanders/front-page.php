<?php
/* Template Name: Home */
get_header();
while(have_posts()): the_post();
?>

<section class="featured">
	<div class="carousel" data-flickity='{ "wrap": true, "prevNextButtons": false, "pageDots": true }'>

		<?php if( have_rows('slider') ): while ( have_rows('slider') ) : the_row(); ?>
			<div class="carousel-cell">

				<div class="sliderimg">
					<img src="<?php echo get_sub_field('image'); ?>">
				</div>
				<div class="slidercontent">
					<h3><?php echo get_sub_field('heading'); ?></h3>
					<p><?php echo get_sub_field('body'); ?></p>
				</div>
			</div>

		<?php endwhile; else : endif; ?>

		</div>
	</section>

	<section class="about">
		<div class="pagewrapper">
			<ul>
				<?php if( have_rows('blurbs') ): while ( have_rows('blurbs') ) : the_row(); ?>
					<li>
						<a href="<?php echo get_sub_field('page_link'); ?>">
							<img src="<?php echo get_sub_field('image'); ?>">
							<h4><?php echo get_sub_field('heading'); ?></h4>
							<p><?php echo get_sub_field('body'); ?></p>
						</a>
					</li>
				<?php endwhile; else : endif; ?>
				</ul>
			</div>
		</section>

		<section class="newsletter">
			<div class="pagewrapper">
				<h3>Subscribe to our Newsletter</h3>
				<p>Receive updates about recent events, products, and more!</p>
				<aside>
					<input type="email" name="" placeholder="EMAIL">
					<input type="submit" name="" value=" ">
				</aside>
			</div>
		</section>

		<section class="brands-home">
			<div class="pagewrapper">
				<aside>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/brandsimg.jpg">
				</aside>
				<article>
					<div class="carousel" data-flickity='{ "contain": true, "pageDots": false }'>

						<?php
						$args = array('post_type' => 'brand', 'posts_per_page' => -1);
						$the_query = new WP_Query($args);
						if ( $the_query->have_posts() ) {  while ( $the_query->have_posts() ): $the_query->the_post(); ?>
							<div class="carousel-cell">
								<a href="<?php the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
								<p><?php the_excerpt() ?></p>
									<h6><a href="<?php the_permalink() ?>">View More</a></h6>
								</div>
							<?php endwhile; wp_reset_postdata(); } else { /** no posts found **/ } ?>


						</div>
					</article>
				</div>
			</section>

			<?php
		endwhile;
		get_footer();
