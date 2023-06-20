<?php
include_once 'includes/header.php';
?>
<div class="container p-4">
    <h1 class="my-4">Products Crud</h1>
    <a href="create-product.php" class="btn btn-success my-4">Create Product</a>
    <?php
    if (isset($_GET['product'])) {
        if ($_GET['product'] == 'created') {
            echo '<div class="alert alert-info">Product created successful</div>';
        } else if ($_GET['product'] == 'updated') {
            echo '<div class="alert alert-info">Product update successful</div>';
        } else if ($_GET['product'] == 'deleted') {
            echo '<div class="alert alert-info">Product deleted successful</div>';
        }
    }
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Create Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $showProducts = new ProductsView();
            $products = $showProducts->showProducts();
            foreach ($products as $key => $product) {
            ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><img src="assets/images/<?php echo $product['image'] ?>" class="img-thumbnail" alt="..." style="width: 50px; border:none;"></td>
                    <td><?php echo $product['title']; ?></td>
                    <td><?php echo $product['description']; ?></td>
                    <td>&dollar;<?php echo $product['price']; ?></td>
                    <td><?php echo $product['date_created']; ?></td>
                    <td>
                        <a href="includes/delete-product.php?id=<?php echo $product['id'] ?>" class="btn btn-outline-danger">Delete</a>
                        <a href="edit-product.php?id=<?php echo $product['id'] ?>" class="btn btn-outline-success">Edit</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>

    </table>
</div>
<?php
include_once 'includes/footer.php';
?>