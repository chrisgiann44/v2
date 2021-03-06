<?php

namespace Neoan3\Component\Product;

use Neoan3\Apps\Cache;
use Neoan3\Component\Products\ProductsController;
use Neoan3\Core\Event;
use Neoan3\Frame\VastN3;

/**
 * Class TestController
 * @package Neoan3\Component\Test
 *
 * Generated by neoan3-cli for neoan3 v3.*
 */

class ProductController extends VastN3 {
    /**
     * Route: Test
     */
    function init(): void
    {
        $productCtrl = new ProductsController();
        $products = $productCtrl->getProducts();
        $this->renderer->storeObject('products', $products);
        $params = ['product'=>[]];
        if(sub(1)){
            foreach ($products as $product){
                if($product['id'] == sub(1)){
                    $params['product'] = $product;
                    $params['variants'] = $product['variants'];
                }
            }

        }
        $this->renderer->includeElement('Product', $params);
        $this->hook('main', 'product', $params);
        $this->output();
    }


}
