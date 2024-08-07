// Quantity increment / decrement 
$(document).ready(function() {

    $('.small-Img').on('click', function () {
        var src = $(this).attr('src');
        $('#featured-image').attr('src', src);

        $('.small-Img').removeClass('sm-card');
        $(this).addClass('sm-card');
    });



    var selectedVariantId = null;
    $('.variant-thumbnail').click(function () {
        
        var newSrc = $(this).attr('src');
        var name = $(this).attr("data-name");
        var price = $(this).attr("data-price");
        $(".var-price").text(price+" PKR");
        $(".var-name").text(name);
        $('.variant-thumbnail').closest(".variant-option").removeClass("selected-var");
        $(this).closest(".variant-option").addClass("selected-var");
        $('#main-image').attr('src', newSrc);
        // Update the selected variant ID
        selectedVariantId = $(this).closest('.variant-option').data('variant-id');        
    });


    $('.increment-btn').click(function(e) {
        e.preventDefault();
        var inc_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(inc_value);
        value = isNaN(value) ? 0 : value;
        value++;
        $(this).closest('.product_data').find('.qty-input').val(value);
    });
    $('.decrement-btn').click(function(e) {
        e.preventDefault();
        var dec_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(dec_value);
        value = isNaN(value) ? 0 : value;
        if(value > 1)
            value--;
        $(this).closest('.product_data').find('.qty-input').val(value);
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.deleteCartItem').click(function(e) {
        e.preventDefault();
        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        var variant_id = $(this).closest('.product_data').find('.variant_id').val();
        $.ajax({ 
            type: 'POST',
            url: '/delete-cart-item',
            data: {
                'prod_id': prod_id,
                'variant_id': variant_id || null
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });

    $('.changeQuantity').click(function(e) {
        e.preventDefault();
        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        var qty = $(this).closest('.product_data').find('.qty-input').val();
        var variant_id = $(this).closest('.product_data').find('.variant_id').val(); 
        $.ajax({ 
            type: 'POST',
            url: '/update-cart',
            data: {
                'prod_id': prod_id,
                'prod_qty' : qty,
                'variant_id': variant_id || null,
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });
    // Add To Cart Functionality
    $('.addToCartBtn').click(function(e) {
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_qty = $(this).closest('.product_data').find('.qty-input').val();

        $.ajax({ 
            type: 'POST',
            url: '/add-to-cart',
            data: {
                'product_id': product_id,
                'product_qty': product_qty,
                'variant_id': selectedVariantId
            },
            success: function(response) {
                alert(response.status);
            }
        });
    });

    $('.mydatatable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
    });

    // // Initialize the wishlist state based on local storage
    // var wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

    // function updateHeartIcon(productId, $heartIcon) {
    //     if (wishlist.includes(productId)) {
    //         $heartIcon.addClass('ri-heart-fill'); // Filled heart icon
    //         $heartIcon.removeClass('ri-heart-line');
    //     } else {
    //         $heartIcon.addClass('ri-heart-line'); // Outline heart icon
    //         $heartIcon.removeClass('ri-heart-fill');
    //     }
    // }

    // // Add event listener to toggle wishlist
    // $(document).on('click', '.wishlist', function(e) {
    //     e.stopPropagation(); // Prevent the click event from propagating to the parent <a> tag
    //     e.preventDefault(); // Prevent the default action of the click event
        
    //     var $heartIcon = $(this).find('i'); // Find the <i> tag inside the clicked span
    //     var productId = $(this).data('product-id');
    //     if (!productId) return;

    //     console.log("Heart icon clicked. Product ID:", productId);

    //     var index = wishlist.indexOf(productId);
    //     if (index === -1) {
    //         // Add to wishlist
    //         wishlist.push(productId);
    //         console.log("Added to wishlist.");
    //     } else {
    //         // Remove from wishlist
    //         wishlist.splice(index, 1);
    //         console.log("Removed from wishlist.");
    //     }

    //     // Update local storage
    //     localStorage.setItem('wishlist', JSON.stringify(wishlist));

    //     // Update heart icon state
    //     updateHeartIcon(productId, $heartIcon);
    // });

    // // Initialize heart icons based on current wishlist
    // $('.wishlist').each(function() {
    //     var $heartIcon = $(this).find('i'); // Find the <i> tag inside the span
    //     var productId = $(this).data('product-id');
    //     if (productId) {
    //         updateHeartIcon(productId, $heartIcon);
    //     }
    // });
});