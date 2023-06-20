<?php
include_once 'autoloader.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteProduct = new ProductsController();

    try {
        $deleteProduct->delete($id);

        header("Location: ../index.php?product=deleted");
    } catch (Error $e) {
        echo "Error $e";
    }
}
