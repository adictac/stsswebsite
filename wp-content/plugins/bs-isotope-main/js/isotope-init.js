
// Set .equal-height class to equal height
jQuery(document).ready(function ($) {
    $(window).resize(function () {
        if (window.matchMedia("(min-width: 768px)").matches) {

            var maxHeight = 0;

            $(".equal-height").each(function () {
                if ($(this).height() > maxHeight) {
                    maxHeight = $(this).height();
                }
            });

            $(".equal-height").height(maxHeight);

        }
    }).trigger("resize");
});
// Set .equal-height class to equal height End


// Initialize Isotope

// Equal Height
jQuery(function ($) {

    var $container = $('#equal-height'); //The ID for the list with all the blog posts
    $container.isotope({ //Isotope options, 'item' matches the class in the PHP
        itemSelector: '.item',
        layoutMode: 'fitRows'
    });

    //Add the class active to the item that is clicked, and remove from the others
    var $optionSets = $('#filters-equal-height'),
        $optionLinks = $optionSets.find('a');

    $optionLinks.click(function () {
        var $this = $(this);
        // don't proceed if already active
        if ($this.hasClass('active')) {
            return false;
        }
        var $optionSet = $this.parents('#filters-equal-height');
        $optionSets.find('.active').removeClass('active');
        $this.addClass('active');

        //When an item is clicked, sort the items.
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector
        });

        return false;
    });

});
// Equal Height End


// Masonry
jQuery(function ($) {

    var $container = $('#masonry'); //The ID for the list with all the blog posts
    $container.isotope({ //Isotope options, 'item' matches the class in the PHP
        itemSelector: '.item',
        layoutMode: 'masonry'
    });

    //Add the class active to the item that is clicked, and remove from the others
    var $optionSets = $('#filters-masonry'),
        $optionLinks = $optionSets.find('a');

    $optionLinks.click(function () {
        var $this = $(this);
        // don't proceed if already active
        if ($this.hasClass('active')) {
            return false;
        }
        var $optionSet = $this.parents('#filters-masonry');
        $optionSets.find('.active').removeClass('active');
        $this.addClass('active');

        //When an item is clicked, sort the items.
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector
        });

        return false;
    });

});
// Masonry End


// Masonry Overlay
jQuery(function ($) {

    var $container = $('#masonry-overlay'); //The ID for the list with all the blog posts
    $container.isotope({ //Isotope options, 'item' matches the class in the PHP
        itemSelector: '.item',
        layoutMode: 'masonry'
    });

    //Add the class active to the item that is clicked, and remove from the others
    var $optionSets = $('#filters-masonry-overlay'),
        $optionLinks = $optionSets.find('a');

    $optionLinks.click(function () {
        var $this = $(this);
        // don't proceed if already active
        if ($this.hasClass('active')) {
            return false;
        }
        var $optionSet = $this.parents('#filters-masonry-overlay');
        $optionSets.find('.active').removeClass('active');
        $this.addClass('active');

        //When an item is clicked, sort the items.
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector
        });

        return false;
    });

});
// Masonry Overlay End


// Equal Height Overlay
jQuery(function ($) {

    var $container = $('#equal-height-overlay'); //The ID for the list with all the blog posts
    $container.isotope({ //Isotope options, 'item' matches the class in the PHP
        itemSelector: '.item',
        layoutMode: 'fitRows'
    });

    //Add the class active to the item that is clicked, and remove from the others
    var $optionSets = $('#filters-equal-height-overlay'),
        $optionLinks = $optionSets.find('a');

    $optionLinks.click(function () {
        var $this = $(this);
        // don't proceed if already active
        if ($this.hasClass('active')) {
            return false;
        }
        var $optionSet = $this.parents('#filters-equal-height-overlay');
        $optionSets.find('.active').removeClass('active');
        $this.addClass('active');

        //When an item is clicked, sort the items.
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector
        });

        return false;
    });

});
// Equal Height Overlay End


// Products
jQuery(function ($) {

    var $container = $('#product'); //The ID for the list with all the blog posts
    $container.isotope({ //Isotope options, 'item' matches the class in the PHP
        itemSelector: '.item',
        layoutMode: 'fitRows'
    });

    //Add the class active to the item that is clicked, and remove from the others
    var $optionSets = $('#filters-product'),
        $optionLinks = $optionSets.find('a');

    $optionLinks.click(function () {
        var $this = $(this);
        // don't proceed if already active
        if ($this.hasClass('active')) {
            return false;
        }
        var $optionSet = $this.parents('#filters-product');
        $optionSets.find('.active').removeClass('active');
        $this.addClass('active');

        //When an item is clicked, sort the items.
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector
        });

        return false;
    });

});
// Products End

// Initialize Isotope End