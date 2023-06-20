<?php
include_once 'dbh.php';

if (isset($_POST['submit'])) {
    editProduct();
}

function editProduct()
{
    global $connect;
    $id = $_GET['id'];

    // form inputs
    $image = $_POST['image'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];

    $query = "UPDATE products SET image='$image', title='$title', description='$desc', price='$price' WHERE id='$id'";
    if (!mysqli_query($connect, $query)) {
        header("location: ../edit-product.php?error=updatefailer");
    } else {
        header("location: ../index.php?product=updated");
    }

    // $prepare = mysqli_stmt_init($connect);
    // mysqli_stmt_prepare($prepare, $query);
    // mysqli_stmt_bind_param($prepare, 'ssss', $image, $title, $desc, $price);
    // mysqli_stmt_execute($prepare);
}
