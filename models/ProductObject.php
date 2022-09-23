<?php

class ProductObject
{
    private int $productId;
    private string $productName;
    private string $image;
    private int $categoryId;
    private string $categoryName;
    private string $brand;
    private string $origin;
    private int $concentration;
    private int $volume;
    private int $price;

    public function getProductId()
    {
        return $this->productId;
    }

    public function setProductId($value)
    {
        $this->productId = $value;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function setProductName($value)
    {
        $this->productName = $value;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($value)
    {
        $this->image = $value;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setCategoryId($value)
    {
        $this->categoryId = $value;
    }

    public function getCategoryName()
    {
        return $this->categoryName;
    }

    public function setCategoryName($value)
    {
        $this->categoryName = $value;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($value)
    {
        $this->brand = $value;
    }

    public function getOrigin()
    {
        return $this->origin;
    }

    public function setOrigin($value)
    {
        $this->origin = $value;
    }

    public function getConcentration()
    {
        return $this->concentration;
    }

    public function showConcentration()
    {
        return $this->concentration . " % vol";
    }

    public function setConcentration($value)
    {
        $this->concentration = $value;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function showVolume()
    {
        return $this->volume . " ml";
    }

    public function setVolume($value)
    {
        $this->volume = $value;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function showPrice()
    {
        return number_format($this->price, 0) . " ₫";
    }

    public function setPrice($value)
    {
        $this->price = $value;
    }

    public function __construct($each, $files = null)
    {
        $this->productId = $each['product_id'] ?? -1;
        $this->productName = $each['product_name'];
        if ($files != null) {
            $this->image = $files['image']['name'];
            $image_tmp = $files['image']['tmp_name'];
            move_uploaded_file($image_tmp, 'img/' . $this->image);
        } else {
            $this->image = $each['image'] ?? $each['img_old'];
        }
        $this->categoryId = $each['category_id'] ?? -1;
        $this->categoryName = $each['category_name'] ?? '';
        $this->brand = $each['brand'];
        $this->origin = $each['origin'];
        $this->concentration = $each['concentration'];
        $this->volume = $each['volume'];
        $this->price = $each['price'];
    }
}
