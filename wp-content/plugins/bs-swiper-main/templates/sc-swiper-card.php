<?php
/*

 * Post/Page/CPT Card slider template.
 *
 * This template can be overriden by copying this file to your-theme/bs-swiper-main/sc-swiper-card.php
 *
 * @author 		Bastian Kreiter
 * @package 	bS Swiper
 * @version     5.1.0.0


Posts: 
[bs-swiper-card type="post" category="cars, boats" order="ASC" orderby="date" posts="6"]

Child-pages: 
[bs-swiper-card type="page" post_parent="21" order="ASC" orderby="title" posts="6"]

Custom post types:
[bs-swiper-card type="isotope" tax="isotope_category" terms="dogs, cats" order="DESC" orderby="date" posts="5"]

Single items:
[bs-swiper-card type="post" id="1, 15"]
[bs-swiper-card type="page" id="2, 25"]
[bs-swiper-card type="isotope" id="33, 31"]
*/


// Card Slider Shortcode
add_shortcode( 'bs-swiper-card', 'bootscore_swiper' );
function bootscore_swiper( $atts ) {
	
	ob_start();
	extract( shortcode_atts( array (
		'type' => 'post',
		'order' => 'date',
		'orderby' => 'date',
		'posts' => -1,
		'category' => '',
        'post_parent'    => '',
		'tax' => '',
		'terms' => '',
		'id' => ''
	), $atts ) );

	$options = array(
		'post_type' => $type,
		'order' => $order,
		'orderby' => $orderby,
		'posts_per_page' => $posts,
		'category_name' => $category,
        'post_parent' => $post_parent,
	);

	$tax = trim( $tax );
	$terms = trim( $terms );
	if ( $tax != '' && $terms != '' ) {
		$terms = explode( ',', $terms );
		$terms = array_map( 'trim', $terms );
		$terms = array_filter( $terms );
		$terms = array_unique( $terms );
		unset( $options['category_name'] );
		$options['tax_query'] = array( array(
            'taxonomy' => $tax,
            'field'    => 'name',
            'terms'    => $terms,
        ) );
	}

	if ( $id != '' ) {
		$ids = explode( ',', $id );
		$ids = array_map( 'intval', $ids );
		$ids = array_filter( $ids );
		$ids = array_unique( $ids );
		$options['post__in'] = $ids;
	}

	$query = new WP_Query( $options );
	if ( $query->have_posts() ) { ?>


<!-- Swiper -->

<div class="px-5 position-relative">

    <div class="cards swiper-container swiper position-static">

        <div class="swiper-wrapper">

            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="swiper-slide card h-auto mb-5">
                <!-- Featured Image-->
                <?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>

                <div class="card-body d-flex flex-column">

                    <?php bootscore_category_badge(); ?>

                    <!-- Title -->
                    <h2 class="blog-post-title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <!-- Meta -->
                    <?php if ( 'post' === get_post_type() ) : ?>
                    <small class="text-muted mb-2">
                        <?php
                            bootscore_date();
                            bootscore_author();
                            bootscore_comments();
                            bootscore_edit();
                        ?>
                    </small>
                    <?php endif; ?>
                    <!-- Excerpt & Read more -->
                    <div class="card-text">
                        <?php the_excerpt(); ?>
                    </div>

                    <div class="mt-auto">
                        <a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read more »', 'bootscore'); ?></a>
                    </div>
                    <!-- Tags -->
                    <?php bootscore_tags(); ?>

                </div>

            </div><!-- .card -->

            <?php endwhile; wp_reset_postdata(); ?>

        </div> <!-- .swiper-wrapper -->

        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next end-0"></div>
        <div class="swiper-button-prev start-0"></div>

    </div><!-- swiper-container -->

</div>

<!-- Swiper End -->

<?php $myvariable = ob_get_clean();
	return $myvariable;
	}	
}

// Card Slider Shortcode End
