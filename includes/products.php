<?php
include_once 'autoloader.php';

if (isset($_POST['create'])) {
    createProduct();
} else if (isset($_POST['edit'])) {
    editProduct();
} else if (isset($_GET['id'])) {
    deleteProduct();
}

// create product function
function createProduct()
{
    // form inputs
    $image = $_POST['image'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];

    if (empty($image) || empty($title) || empty($desc) || empty($price)) {
        header("Location: ../create-product.php?error=emptyinput");
    } else {

        $createProduct = new ProductsController();

        try {
            $createProduct->addProduct($title, $image, $desc, $price);
            header("Location: ../index.php?product=created");
        } catch (Error $e) {
            echo "Error $e";
        }
    }
}

// update product function
function editProduct()
{
    $id = $_GET['id'];

    // form inputs
    $image = $_POST['image'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];

    $updateProduct = new ProductsController();
    try {
        $updateProduct->editProduct($id, $title, $image, $desc, $price);
    } catch (\Throwable $th) {
        header("Location: ../index.php?product=updated");
    }
}

// delete product function
function  deleteProduct()
{
    $id = $_GET['id'];

    $deleteProduct = new ProductsController();

    try {
        $deleteProduct->delete($id);

        header("Location: ../index.php?product=deleted");
    } catch (Error $e) {
        echo "Error $e";
    }
}
