$(document).ready(function() {

    var availableTags = [];
    $.ajax({
        method: "GET",
        url: "/product-list",
        success: function(response){
            startAutoComplete(response);
        }
    });
    function startAutoComplete(availableTags) {
        $("#search_product").autocomplete({
            source: availableTags
        });
    }
    // Function to update the cart count
    function updateCartCount() {
        $.ajax({
            type: 'GET',
            url: '/cart-count',  // You need to create a route and controller for this
            success: function(response) {
                $('#cartCount').text(response.count);  // Update the cart count
            }
        });
    }

    // Call updateCartCount on page load
    updateCartCount();

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
        $('#featured-image').attr('src', newSrc);
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
                updateCartCount();
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
                updateCartCount();
                 // Create the alert
                var alertHtml = '<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                response.status + 
                '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
                '</div>';

                // Append the alert to the page
                $('#alert-placeholder').html(alertHtml);

                // Optionally, auto-dismiss the alert after a few seconds
                setTimeout(function() {
                $('.alert').alert('close');
                }, 3000); 
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
});