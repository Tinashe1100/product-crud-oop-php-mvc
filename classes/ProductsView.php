<?php

class ProductsView extends Products
{
    public function showProducts()
    {
        $results = $this->getProducts();

        return $results;
        // foreach ($results as $key => $product) {
        //     return $product['id'] . $product['image'] . $product['title'] . $product['description'] . $product['price'] . $product['date_created'];
        // }
    }
}
