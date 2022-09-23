<?php
require 'models/Product.php';

class ProductController
{
    public function index(): void
    {
        $arr = (new Product())->all();

        require 'views/product/index.php';
    }

    public function create(): void
    {
        require 'models/Category.php';
        $categories = (new Category())->all();

        require 'views/product/create.php';
    }

    public function store(): void
    {
        (new Product())->create($_POST, $_FILES);

        header('location: index.php');
    }

    public function edit(): void
    {
        $id = $_GET['id'];
        require 'models/Category.php';
        $categories = (new Category())->all();
        $each = (new Product())->find($id);

        require 'views/product/update.php';
    }

    public function update(): void
    {
        if ($_FILES['image']['name'] != null) (new Product())->update($_POST, $_FILES);
        else (new Product())->update($_POST);
        header('location: index.php');
    }

    public function delete(): void
    {
        (new Product())->delete($_GET['id']);
        header('location: index.php');
    }

    public function check($action)
    {
        if (isset($_SESSION['email']))
            $this->$action();
        else
            header('location: views/404.php');
    }
}
