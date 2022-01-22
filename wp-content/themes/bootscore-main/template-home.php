<?php

/**
 * Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>


<div id="content" class="site-content container py-5 mt-5">

    <!-- Carousel -->


    <!-- Service -->

    <div id="service">
        <div class="container">

            <div class="row pt-5">
                <h3 class="text-center pb-5 pt-5 h1"> SERVICES </h3>
            </div>

            <div class="row">

                <div class="col-sm">
                    <div class="card w-100 mb-5 shadow-sm">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/commercial-card.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">COMMERCIAL SOLAR PANELS</h5>
                            <p class="card-text">At South Texas Solar Systems we offer the best high-efficiency commercial solar panels for business, schools, and farms. All of our solar panel modules come with a 25-year warranty, the best on the market.</p>
                            <a href="#" class="btn btn-warning text-white rounded-0 shadow">READ</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm">

                    <div class="card w-100 card-border mb-5 shadow-sm">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/residential-card.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">RESIDENTIAL SOLAR PANELS</h5>
                            <p class="card-text">Your home is the most important place for your family, and South Texas Solar Systems Inc. is aware of that. This is why we put time and effort into creating and installing solar panels for the home that adapts to your own electrical necessities.</p>
                            <a href="#" class="btn btn-warning text-white rounded-0 shadow">READ</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="card w-100 card-border mb-5 shadow-sm">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/offgrid-card.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">OFF GRID SOLAR PANELS</h5>
                            <p class="card-text">At South Texas Solar Systems, we offer solar power for homes that stay off the grid. Hence, these systems are called "off-grid solar systems,” and are not connected to the electrical grid.</p>
                            <a href="#" class="btn bg-warning text-white rounded-0 shadow">READ</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Area Service -->

    <!-- Icons -->

    <!-- News -->

    <!-- Testimonios -->

</div><!-- #content -->
<?php
get_footer();
