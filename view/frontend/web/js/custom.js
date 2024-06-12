/**
 * @author: Raphael Baako <rbaako@baakoconsultingllc.com>
 * @package: BCMarketplace_Excustomer
 *
 *
 */
define(['jquery',
        'Magento_Customer/js/model/customer',
        'jquery-ui-modules/core',
        'jquery-ui-modules/widget'],
    function ($,customer) {

        'use strict';
        var customer = window.excustomerData;

        var addToCart = $('#product-addtocart-button');
        var pdpPrice = $(".catalog-product-view .product-info-main .product-info-price");
        var stock = $(".qty-lable");

        var categoryAddToCart = $(".product-items li.product-item .action.tocart.primary");
        var categoryPrice = $(".product-items li.product-item .price-box");

        if(typeof categoryAddToCart != 'undefined' && categoryAddToCart.length > 0 && customer == false){
            categoryAddToCart.find('span').html("Login to View Price");
            categoryPrice.hide();
            stock.hide();
            categoryAddToCart.bind('click', function(e){
                e.stopPropagation();
                e.preventDefault();
                $('.block-authentication').modal('openModal');
            });
        } else if(typeof addToCart != 'undefined' && customer == false) {
            addToCart.find('span').html("Login to View Price");
            pdpPrice.hide();
            stock.hide();
            addToCart.bind('click', function(e){
                e.stopPropagation();
                e.preventDefault();
                $('.block-authentication').modal('openModal');
            });
        } else {
            categoryPrice.show();
            pdpPrice.css('display','flex');
            stock.show();
        }

    }
);
