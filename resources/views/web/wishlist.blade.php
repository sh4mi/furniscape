@extends('web.layouts.app')

@section('content')
<section class="mt-4">
    <div class="container-fluid" data-aos="fade-in">
        <h1 class="mb-4">Wishlist Products</h1>
        <div id="wishlist-products" class="row g-4">
            <!-- Products will be dynamically loaded here -->
        </div>
    </div>
</section>
@endsection
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Retrieve wishlist IDs from local storage
        var wishlistIds = JSON.parse(localStorage.getItem('wishlist')) || [];
        console.log(wishlistIds);
        

        // Fetch wishlist products from the server
        axios.get('/wishlist-products', {
            params: { wishlist_ids: wishlistIds }
        })
        .then(function(response) {
            var products = response.data;
            var container = document.getElementById('wishlist-products');

            products.forEach(function(product) {
                var productHtml = `
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                            <div class="card-img position-relative">
                                <div class="card-badges">
                                    <span class="badge badge-card"></span>
                                </div>
                                <picture class="position-relative overflow-hidden d-block bg-light">
                                    ${product.images.length > 0
                                        ? `<img style="min-height: 300px;" src="${product.images[0].image_url}" alt="Product Image" class="w-100 img-fluid position-relative z-index-10">`
                                        : `<img style="height: 300px;" class="w-100 img-fluid position-relative z-index-10" src="/web/assets/images/product/placeholder.png" alt="">`
                                    }
                                </picture>
                            </div>
                            <div class="card-body px-0">
                                <a class="text-decoration-none link-cover" href="/product/${product.id}">${product.name}</a>
                        
                                <p class="mt-2 mb-0 small">
                                    ${product.discount_price
                                        ? `<s class="text-muted">PKR ${product.discount_price}</s>`
                                        : ''
                                    }
                                    <span class="text-danger">PKR ${product.price}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                `;
                container.innerHTML += productHtml;
            });
        })
        .catch(function(error) {
            console.error('Error fetching wishlist products:', error);
        });
    });
</script>
