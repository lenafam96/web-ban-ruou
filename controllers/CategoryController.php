<?php

class CategoryController
{
    public function index()
    {
        require 'models/Category.php';
        $arr = (new Category())->all();

        require 'views/category/index.php';
    }
}
