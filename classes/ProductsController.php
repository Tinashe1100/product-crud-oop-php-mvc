<?php

class ProductsController extends Products
{
    public function addProduct($title, $image, $desc, $price)
    {
        $addProduct = $this->createProduct($title, $image, $desc, $price);
        return $addProduct;
    }

    public function editProduct($id, $title, $image, $desc, $price)
    {
        return $this->updateProducts($id, $title, $image, $desc, $price);
    }

    public function delete($id)
    {
        $delete = $this->deleteProduct($id);
        return $delete;
    }
}
