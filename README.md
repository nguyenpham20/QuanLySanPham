# QuanLySanPham
Bước 1: Tạo một dự án mới với các thư mục và file như hình bên dưới



Bước 2: Khai báo lớp Product như sau:

<?php
namespace Models;

class Product
{
    private $name;
    private $price;

    public function __construct($name = NULL, $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
Lớp Product được đặt trong namespace là Models.
Lớp Product có 2 thuộc tính private là $name và $price
Lớp Product có các getter/setter để truy cập đến các thuộc tính private
Bước 3: Khai báo lớp ProductManager

<?php
namespace Services;

class ProductManager
{
    private $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function add($product) {
        $this->products[] = $product;
    }

    public function getProducts()
    {
        return $this->products;
    }
}
Lớp ProductManager được đặt trong namespace là Services
Lớp ProductManager có một thuộc tính là một mảng chứa danh sách các sản phẩm
Lớp ProductManager có phương thức add($product) được sử dụng để thêm một sản phẩm vào mảng
Lớp ProductManager có phương thức getProducts() để trả về mảng các sản phẩm
Bước 4: Viết kịch bản minh hoạ trong file index.php

<?php
include_once "Models/Product.php";
include_once "Services/ProductManager.php";

use Services\ProductManager;
use Models\Product;

$productManager = new ProductManager();
$productManager->add(new Product("Laptop"));
$productManager->add(new Product("Mobile"));

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo $product->getName() ."<br/>";
}
Hãy chạy ứng dụng và hiển thị nội dung của file index.php và quan sát kết quả.

Hãy để ý đến:

Sử dụng namespace Services và Models
Sử dụng các phương thức
