// Quantity increment / decrement 
$(document).ready(function() {

    $('.variant-thumbnail').click(function () {
        
        var newSrc = $(this).attr('src');
        var name = $(this).attr("data-name");
        var price = $(this).attr("data-price");
        $(".var-price").text(price+" PKR");
        $(".var-name").text(name);
        $('.variant-thumbnail').closest(".variant-option").removeClass("selected-var");
        $(this).closest(".variant-option").addClass("selected-var");
        $('#main-image').attr('src', newSrc);
        console.log("asd");
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
        $.ajax({ 
            type: 'POST',
            url: '/delete-cart-item',
            data: {
                'prod_id': prod_id
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
        $.ajax({ 
            type: 'POST',
            url: '/update-cart',
            data: {
                'prod_id': prod_id,
                'prod_qty' : qty,
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
                'product_qty': product_qty
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
});