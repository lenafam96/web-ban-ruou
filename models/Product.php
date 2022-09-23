<?php

require_once 'models/Connect.php';
require 'models/ProductObject.php';

class Product
{
    public function all($sort = null): array
    {
        $sql = "select products.*,category_name from products
        left join categories on products.category_id = categories.category_id";
        if ($sort != '' && $sort != '0')
            $sql = $sql . " order by price " . $sort;
        $result = (new Connect())->excuteQuery($sql);

        $arr = [];
        foreach ($result as $each) {
            $object = new ProductObject($each);

            $arr[] = $object;
        }

        return $arr;
    }

    public function findByCategoryId($category, $sort): array
    {
        $sql = "select products.*,category_name from products
        left join categories on products.category_id = categories.category_id where products.category_id = " . $category;
        if ($sort != '' && $sort != '0')
            $sql = $sql . " order by price " . $sort;
        $result = (new Connect())->excuteQuery($sql);

        $arr = [];
        foreach ($result as $each) {
            $object = new ProductObject($each);

            $arr[] = $object;
        }

        return $arr;
    }

    public function create($params1, $params2): void
    {
        $object = new ProductObject($params1, $params2);
        $sql = "insert into products (product_name, image, category_id, brand, origin, concentration, volume, price)
        values('" . $object->getProductName() . "','" . $object->getImage() . "'," . $object->getCategoryId() . ",'" . $object->getBrand() . "','" . $object->getOrigin() . "'," . $object->getConcentration() . "," . $object->getVolume() . "," . $object->getPrice() . ")";
        (new Connect())->excuteNonQuery($sql);
    }

    public function find($id): object
    {
        $sql = "select * from products where product_id = $id";
        $result = (new Connect())->excuteQuery($sql);
        $each = mysqli_fetch_array($result);
        return new ProductObject($each);
    }

    public function update($params1, $params2 = null): void
    {
        $object = new ProductObject($params1, $params2);
        $sql = "update products set product_name = '" . $object->getProductName() . "', image = '" . $object->getImage() . "', category_id = " . $object->getCategoryId() . ", brand = '" . $object->getBrand() . "', origin = '" . $object->getOrigin() . "', concentration = " . $object->getConcentration() . ", volume =  " . $object->getVolume() . ",price = " . $object->getPrice() . " where product_id = " . $object->getProductId();
        (new Connect())->excuteNonQuery($sql);
    }

    public function delete($id): void
    {
        $sql = "delete from products where product_id = " . $id;
        (new Connect())->excuteNonQuery($sql);
    }
}
