<?php

class Products extends Database
{
    // private $title;
    // private $image;
    // private $description;
    // private $price;

    // public function __construct($title, $image, $description, $price)
    // {
    //     $this->title = $title;
    //     $this->image = $image;
    //     $this->description = $description;
    //     $this->price = $price;
    // }

    /** CREATE, READ, UPDATE, DELETE(CRUD) METHODS
     
     * CREATE - createProduct();
     * READ - getProducts();
     * UPDATE - editProducts();
     * DELETE - deleteProducts();
     
     */

    protected function createProduct($title, $image, $desc, $price)
    {
        $title = $title;
        $image = $image;
        $desc = $desc;
        $price = $price;

        $query = "INSERT INTO products(title, image, description, price) VALUES(?,?,?,?)";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$title, $image, $desc, $price]);
    }

    protected function getProducts()
    {
        $query = "SELECT * FROM products ORDER BY id DESC ";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }

    protected function editProducts($id, $title, $image, $desc, $price)
    {
        $title = $title;
        $image = $image;
        $desc = $desc;
        $price = $price;
        $id = $id;

        $query = "UPDATE products SET image='$image', title='$title', description='$desc', price='$price' WHERE id='$id'";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute([$title, $image, $desc, $price]);
    }

    public function deleteProduct($id)
    {
        $id = $id;

        $query = "DELETE FROM products WHERE id = '$id'";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
    }
}
