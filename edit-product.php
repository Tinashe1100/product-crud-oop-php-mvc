<?php
include_once 'includes/header.php';
$id = $_GET['id'];
?>
<div class="container p-4">
    <h1 class="my-4">Products Crud - Edit Product</h1>
    <a href="index.php" class="btn btn-success my-4">Go Back</a>

    <!-- <div>
            <img src="assets/images/<?php echo $product['image'] ?>" class="img-thumbnail mb-2" alt="..." style="width:100px; border:none;">
        </div> -->

    <form action="includes/products.php?id=<?php echo $id; ?>" method="post" class="form-group">
        <div>
            <label for="formFileLg" class="form-label">Select Image</label>
            <input class="form-control form-control-lg" type="file" name="image" value="">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Title</label>
            <input type="text" class="form-control" name="title" value="">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Description</label>
            <textarea type="text" class="form-control" name="desc" value=""></textarea>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Product Price</label>
            <input type="text" class="form-control" name="price" value="">
        </div>

        <button type="submit" class="btn btn-success" name="edit">Update Product</button>
    </form>

</div>
<?php
include_once 'includes/footer.php';
?>