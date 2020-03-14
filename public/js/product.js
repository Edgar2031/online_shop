$(document).ready(function() {       
    const all_pro = $('#all_pro').val();
    $.ajax({
        url: '/g_profile/page_shop/page',
        type: 'post',
        data: {'_token': all_pro},
        success: function(r){
            r = JSON.parse(r);
            r.forEach( function(element, index) {
                if (element.cart === 1 && element.wishlist === 1) {                   
                    $('.product_append').append(`
                                            <div class="col-md-4">
                                                <div class="product-thumb">
                                                    <header class="product-header">
                                                        <span class="product-label label label-info">Featured</span>
                                                        <img src="http://localhost:8000/product_photo/${element.p_photo[0].photo}" alt="Image" title="Image">
                                                    </header>
                                                    <div class="product-inner">
                                                        <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                        </ul>
                                                        <h5 class="product-title">${element.name}</h5>
                                                        <p class="product-desciption">
                                                            ${element.description}
                                                        </p>
                                                        <div class="product-meta">
                                                            <span class="product-time">
                                                                <i class="fa fa-clock-o"></i> 
                                                                ${element.time}
                                                            </span>
                                                            <ul class="product-price-list">
                                                                <li>
                                                                    <span class="product-price">
                                                                        &#36; ${element.price}
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                            <ul class="product-actions-list">
                                                                <li>
                                                                    <a class="cart_${element.id} this_cart btn btn-sm" style="display: none;">
                                                                        <i class="fas fa-cart-arrow-down"></i> 
                                                                        To Cart
                                                                    </a>
                                                                    <a class="cart_${element.id}_remove this_cart_remove btn btn-sm">
                                                                        <i class="fas fa-shopping-cart"></i> 
                                                                        Remove From Cart
                                                                    </a>
                                                                    <a class="wishlist_${element.id} this_wishlist btn btn-sm" style="display: none;">
                                                                        <i class="fas fa-heart">To Wish List</i>
                                                                    </a>
                                                                    <a class="wishlist_${element.id} this_wishlist_remove btn btn-sm">
                                                                       <img src="http://localhost:8000/img/heart-broken-solid.svg" style="width: 20px; height: 20px;">
                                                                        Remove From Wish List
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div
                                            </div>
                    `);
                }else if (element.cart === 0 && element.wishlist === 0){
                    $('.product_append').append(`
                                            <div class="col-md-4">
                                                <div class="product-thumb">
                                                    <header class="product-header">
                                                        <span class="product-label label label-info">Featured</span>
                                                        <img src="http://localhost:8000/product_photo/${element.p_photo[0].photo}" alt="Image" title="Image">
                                                    </header>
                                                    <div class="product-inner">
                                                        <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                        </ul>
                                                        <h5 class="product-title">${element.name}</h5>
                                                        <p class="product-desciption">
                                                            ${element.description}
                                                        </p>
                                                        <div class="product-meta">
                                                            <span class="product-time">
                                                                <i class="fa fa-clock-o"></i> 
                                                                ${element.time}
                                                            </span>
                                                            <ul class="product-price-list">
                                                                <li>
                                                                    <span class="product-price">
                                                                        &#36; ${element.price}
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                            <ul class="product-actions-list">
                                                                <li>
                                                                    <a class="cart_${element.id} this_cart btn btn-sm">
                                                                        <i class="fas fa-cart-arrow-down"></i> 
                                                                        To Cart
                                                                    </a>
                                                                    <a class="cart_${element.id}_remove this_cart_remove btn btn-sm" style="display: none;">
                                                                        <i class="fas fa-shopping-cart"></i> 
                                                                        Remove From Cart
                                                                    </a>
                                                                    <a class="wishlist_${element.id} this_wishlist btn btn-sm">
                                                                        <i class="fas fa-heart">To Wish List</i>
                                                                    </a>
                                                                    <a class="wishlist_${element.id} this_wishlist_remove btn btn-sm" style="display: none;">                                                                        <img src="http://localhost:8000/img/heart-broken-solid.svg" style="width: 20px; height: 20px;">
                                                                        Remove From Wish List
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div
                                            </div>
                    `);
                }else if (element.cart === 1 && element.wishlist === 0){
                    $('.product_append').append(`
                                            <div class="col-md-4">
                                                <div class="product-thumb">
                                                    <header class="product-header">
                                                        <span class="product-label label label-info">Featured</span>
                                                        <img src="http://localhost:8000/product_photo/${element.p_photo[0].photo}" alt="Image" title="Image">
                                                    </header>
                                                    <div class="product-inner">
                                                        <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                        </ul>
                                                        <h5 class="product-title">${element.name}</h5>
                                                        <p class="product-desciption">
                                                            ${element.description}
                                                        </p>
                                                        <div class="product-meta">
                                                            <span class="product-time">
                                                                <i class="fa fa-clock-o"></i> 
                                                                ${element.time}
                                                            </span>
                                                            <ul class="product-price-list">
                                                                <li>
                                                                    <span class="product-price">
                                                                        &#36; ${element.price}
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                            <ul class="product-actions-list">
                                                                <li>
                                                                    <a class="cart_${element.id} this_cart btn btn-sm" style="display: none;">
                                                                        <i class="fas fa-cart-arrow-down"></i> 
                                                                        To Cart
                                                                    </a>
                                                                    <a class="cart_${element.id}_remove this_cart_remove btn btn-sm">
                                                                        <i class="fas fa-shopping-cart"></i> 
                                                                        Remove From Cart
                                                                    </a>
                                                                    <a class="wishlist_${element.id} this_wishlist btn btn-sm">
                                                                        <i class="fas fa-heart">To Wish List</i>
                                                                    </a>
                                                                    <a class="wishlist_${element.id} this_wishlist_remove btn btn-sm" style="display: none;">                                                                        <img src="http://localhost:8000/img/heart-broken-solid.svg" style="width: 20px; height: 20px;">
                                                                        Remove From Wish List
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div
                                            </div>
                    `);
                }else if (element.cart === 0 && element.wishlist === 1){
                    $('.product_append').append(`
                                            <div class="col-md-4">
                                                <div class="product-thumb">
                                                    <header class="product-header">
                                                        <span class="product-label label label-info">Featured</span>
                                                        <img src="http://localhost:8000/product_photo/${element.p_photo[0].photo}" alt="Image" title="Image">
                                                    </header>
                                                    <div class="product-inner">
                                                        <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                            <li><i class="fa fa-star"></i>
                                                            </li>
                                                        </ul>
                                                        <h5 class="product-title">${element.name}</h5>
                                                        <p class="product-desciption">
                                                            ${element.description}
                                                        </p>
                                                        <div class="product-meta">
                                                            <span class="product-time">
                                                                <i class="fa fa-clock-o"></i> 
                                                                ${element.time}
                                                            </span>
                                                            <ul class="product-price-list">
                                                                <li>
                                                                    <span class="product-price">
                                                                        &#36; ${element.price}
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                            <ul class="product-actions-list">
                                                                <li>
                                                                    <a class="cart_${element.id} this_cart btn btn-sm">
                                                                        <i class="fas fa-cart-arrow-down"></i> 
                                                                        To Cart
                                                                    </a>
                                                                    <a class="cart_${element.id}_remove this_cart_remove btn btn-sm" style="display: none;">
                                                                        <i class="fas fa-shopping-cart"></i> 
                                                                        Remove From Cart
                                                                    </a>
                                                                    <a class="wishlist_${element.id} this_wishlist btn btn-sm" style="display: none;">
                                                                        <i class="fas fa-heart">To Wish List</i>
                                                                    </a>
                                                                    <a class="wishlist_${element.id} this_wishlist_remove btn btn-sm" >                                                                        <img src="http://localhost:8000/img/heart-broken-solid.svg" style="width: 20px; height: 20px;">
                                                                        Remove From Wish List
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div
                                            </div>
                    `);
                }
            });
        }
    });
    
    $('.sort_btn').click(function() {
        $('.product_append').empty();
        const pro_sort_token = $('#all_pro').val();
        const product_val = $('.product_val').val();
        const sort_pro = $('#sort_pro').val();
        const sort_az = $('#sort_az').val();
        const range = $('.irs-single').html().split(' — ');
        let range_start = range[0].split('$');
            range_start = range_start[1];
        let range_end = range[1].split('$');  
            range_end = range_end[1];   
        $.ajax({
            url: '/g_profile/page_shop/page/sort_pro',
            type: 'post',
            data: {
                    '_token': pro_sort_token, 
                    product_val, 
                    sort_pro, 
                    sort_az, 
                    range_start, 
                    range_end
                },
            success: function(r){
                r = JSON.parse(r);
                r.forEach( function(element, index) {
                    if (element.cart === 1 && element.wishlist === 1) {                   
                        $('.product_append').append(`
                                                <div class="col-md-4">
                                                    <div class="product-thumb">
                                                        <header class="product-header">
                                                            <span class="product-label label label-info">Featured</span>
                                                            <img src="http://localhost:8000/product_photo/${element.p_photo[0].photo}" alt="Image" title="Image">
                                                        </header>
                                                        <div class="product-inner">
                                                            <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                            </ul>
                                                            <h5 class="product-title">${element.name}</h5>
                                                            <p class="product-desciption">
                                                                ${element.description}
                                                            </p>
                                                            <div class="product-meta">
                                                                <span class="product-time">
                                                                    <i class="fa fa-clock-o"></i> 
                                                                    ${element.time}
                                                                </span>
                                                                <ul class="product-price-list">
                                                                    <li>
                                                                        <span class="product-price">
                                                                            &#36; ${element.price}
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <ul class="product-actions-list">
                                                                    <li>
                                                                        <a class="cart_${element.id} this_cart btn btn-sm" style="display: none;">
                                                                            <i class="fas fa-cart-arrow-down"></i> 
                                                                            To Cart
                                                                        </a>
                                                                        <a class="cart_${element.id}_remove this_cart_remove btn btn-sm">
                                                                            <i class="fas fa-shopping-cart"></i> 
                                                                            Remove From Cart
                                                                        </a>
                                                                        <a class="wishlist_${element.id} this_wishlist btn btn-sm" style="display: none;">
                                                                            <i class="fas fa-heart">To Wish List</i>
                                                                        </a>
                                                                        <a class="wishlist_${element.id} this_wishlist_remove btn btn-sm">>
                                                                           <img src="http://localhost:8000/img/heart-broken-solid.svg" style="width: 20px; height: 20px;">
                                                                            Remove From Wish List
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        `);
                    }else if (element.cart === 0 && element.wishlist === 0){
                        $('.product_append').append(`
                                                <div class="col-md-4">
                                                    <div class="product-thumb">
                                                        <header class="product-header">
                                                            <span class="product-label label label-info">Featured</span>
                                                            <img src="http://localhost:8000/product_photo/${element.p_photo[0].photo}" alt="Image" title="Image">
                                                        </header>
                                                        <div class="product-inner">
                                                            <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                            </ul>
                                                            <h5 class="product-title">${element.name}</h5>
                                                            <p class="product-desciption">
                                                                ${element.description}
                                                            </p>
                                                            <div class="product-meta">
                                                                <span class="product-time">
                                                                    <i class="fa fa-clock-o"></i> 
                                                                    ${element.time}
                                                                </span>
                                                                <ul class="product-price-list">
                                                                    <li>
                                                                        <span class="product-price">
                                                                            &#36; ${element.price}
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <ul class="product-actions-list">
                                                                    <li>
                                                                        <a class="cart_${element.id} this_cart btn btn-sm">
                                                                            <i class="fas fa-cart-arrow-down"></i> 
                                                                            To Cart
                                                                        </a>
                                                                        <a class="cart_${element.id}_remove this_cart_remove btn btn-sm" style="display: none;">
                                                                            <i class="fas fa-shopping-cart"></i> 
                                                                            Remove From Cart
                                                                        </a>
                                                                        <a class="wishlist_${element.id} this_wishlist btn btn-sm">
                                                                            <i class="fas fa-heart">To Wish List</i>
                                                                        </a>
                                                                        <a class="wishlist_${element.id} this_wishlist_remove btn btn-sm" style="display: none;">
                                                                            <img src="http://localhost:8000/img/heart-broken-solid.svg" style="width: 20px; height: 20px;">
                                                                            Remove From Wish List
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        `);
                    }else if (element.cart === 1 && element.wishlist === 0){
                        $('.product_append').append(`
                                                <div class="col-md-4">
                                                    <div class="product-thumb">
                                                        <header class="product-header">
                                                            <span class="product-label label label-info">Featured</span>
                                                            <img src="http://localhost:8000/product_photo/${element.p_photo[0].photo}" alt="Image" title="Image">
                                                        </header>
                                                        <div class="product-inner">
                                                            <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                            </ul>
                                                            <h5 class="product-title">${element.name}</h5>
                                                            <p class="product-desciption">
                                                                ${element.description}
                                                            </p>
                                                            <div class="product-meta">
                                                                <span class="product-time">
                                                                    <i class="fa fa-clock-o"></i> 
                                                                    ${element.time}
                                                                </span>
                                                                <ul class="product-price-list">
                                                                    <li>
                                                                        <span class="product-price">
                                                                            &#36; ${element.price}
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <ul class="product-actions-list">
                                                                    <li>
                                                                        <a class="cart_${element.id} this_cart btn btn-sm" style="display: none;">
                                                                            <i class="fas fa-cart-arrow-down"></i> 
                                                                            To Cart
                                                                        </a>
                                                                        <a class="cart_${element.id}_remove this_cart_remove btn btn-sm">
                                                                            <i class="fas fa-shopping-cart"></i> 
                                                                            Remove From Cart
                                                                        </a>
                                                                        <a class="wishlist_${element.id} this_wishlist btn btn-sm">
                                                                            <i class="fas fa-heart">To Wish List</i>
                                                                        </a>
                                                                        <a class="wishlist_${element.id} this_wishlist_remove btn btn-sm" style="display: none;">
                                                                            <img src="http://localhost:8000/img/heart-broken-solid.svg" style="width: 20px; height: 20px;">
                                                                            Remove From Wish List
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        `);
                    }else if (element.cart === 0 && element.wishlist === 1){
                        $('.product_append').append(`
                                                <div class="col-md-4">
                                                    <div class="product-thumb">
                                                        <header class="product-header">
                                                            <span class="product-label label label-info">Featured</span>
                                                            <img src="http://localhost:8000/product_photo/${element.p_photo[0].photo}" alt="Image" title="Image">
                                                        </header>
                                                        <div class="product-inner">
                                                            <ul class="icon-group icon-list-rating" title="4.7/5 rating">
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                                <li><i class="fa fa-star"></i>
                                                                </li>
                                                            </ul>
                                                            <h5 class="product-title">${element.name}</h5>
                                                            <p class="product-desciption">
                                                                ${element.description}
                                                            </p>
                                                            <div class="product-meta">
                                                                <span class="product-time">
                                                                    <i class="fa fa-clock-o"></i> 
                                                                    ${element.time}
                                                                </span>
                                                                <ul class="product-price-list">
                                                                    <li>
                                                                        <span class="product-price">
                                                                            &#36; ${element.price}
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <ul class="product-actions-list">
                                                                    <li>
                                                                        <a class="cart_${element.id} this_cart btn btn-sm">
                                                                            <i class="fas fa-cart-arrow-down"></i> 
                                                                            To Cart
                                                                        </a>
                                                                        <a class="cart_${element.id}_remove this_cart_remove btn btn-sm" style="display: none;">
                                                                            <i class="fas fa-shopping-cart"></i> 
                                                                            Remove From Cart
                                                                        </a>
                                                                        <a class="wishlist_${element.id} this_wishlist btn btn-sm" style="display: none;">
                                                                            <i class="fas fa-heart">To Wish List</i>
                                                                        </a>
                                                                        <a class="wishlist_${element.id} this_wishlist_remove btn btn-sm" >
                                                                            <img src="http://localhost:8000/img/heart-broken-solid.svg" style="width: 20px; height: 20px;">
                                                                            Remove From Wish List
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        `);
                    }
                });
            }
        });
    });       
    
    $(document).on('click', '.this_cart', function() {
        const cart_token = $('#all_pro').val();
        const cart_id = Number($(this).attr('class').split(' ')[0].split('_')[1]);
        const btn = $(this).parent().find('.this_cart_remove');
        const is = $(this);  
        $.ajax({
            url: '/g_profile/page_cart/add',
            type: 'post',
            data: {
                    "_token": cart_token,
                    cart_id
                },
            success: function(r){
                    $(is).css({
                        display: 'none'
                    });
                    $(btn).css({
                        display: 'block'
                    });
            }
        })
    });

    $(document).on('click', '.this_cart_remove', function() {
        const cart_token_remove = $('#all_pro').val();
        const cart_id_remove = Number($(this).attr('class').split(' ')[0].split('_')[1]);
        const btn = $(this).parent().find('.this_cart');
        const is = $(this); 
        $.ajax({
            url: '/g_profile/page_cart/remove',
            type: 'post',
            data: {
                    "_token": cart_token_remove,
                    cart_id_remove
                },
            success: function(r){
                    $(is).css({
                        display: 'none'
                    });
                    $(btn).css({
                        display: 'block'
                    });
            }
        })
    });

    $(document).on('click', '.this_wishlist', function() {
        const wishlist_token = $('#all_pro').val();
        const wishlist_id = Number($(this).attr('class').split(' ')[0].split('_')[1]);
        const btn = $(this).parent().find('.this_wishlist_remove');
        const is = $(this);  
        $.ajax({
            url: '/g_profile/page_wishlist/add',
            type: 'post',
            data: {
                    "_token": wishlist_token,
                    wishlist_id
                },
            success: function(r){
                    $(is).css({
                        display: 'none'
                    });
                    $(btn).css({
                        display: 'block'
                    });
            }
        })
    });

    $(document).on('click', '.this_wishlist_remove', function() {
        const wishlist_token_remove = $('#all_pro').val();
        const wishlist_id_remove = Number($(this).attr('class').split(' ')[0].split('_')[1]);
        const btn = $(this).parent().find('.this_wishlist');
        const is = $(this); 
        $.ajax({
            url: '/g_profile/page_wishlist/remove',
            type: 'post',
            data: {
                    "_token": wishlist_token_remove,
                    wishlist_id_remove
                },
            success: function(r){
                    $(is).css({
                        display: 'none'
                    });
                    $(btn).css({
                        display: 'block'
                    });
            }
        })
    });

});