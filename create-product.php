<?php
include_once 'includes/header.php';
?>
<div class="container p-4">

    <h1 class="my-4">Products Crud - Create New Product</h1>
    <a href="index.php" class="btn btn-success my-4">Go Back</a>

    <form action="includes/create-product.php" method="post" class="form-group">
        <div>
            <label for="formFileLg" class="form-label">Select Image</label>
            <input class="form-control form-control-lg" type="file" name="image">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Description</label>
            <textarea type="text" class="form-control" name="desc"></textarea>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Price</label>
            <input type="number" class="form-control" name="price">
        </div>

        <button type="submit" class="btn btn-success" name="submit">Create Product</button>
    </form>

</div>
<?php
include_once 'includes/footer.php';
?>