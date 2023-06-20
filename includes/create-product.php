<?php
include_once 'autoloader.php';

if (isset($_POST['submit'])) {
    // form inputs
    $image = $_POST['image'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];

    $createProduct = new ProductsController();

    try {
        $createProduct->addProduct($title, $image, $desc, $price);
        header("Location: ../index.php?product=created");
    } catch (Error $e) {
        echo "Error $e";
    }
}
