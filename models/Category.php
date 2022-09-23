<?php

require_once 'models/Connect.php';
require 'models/CategoryObject.php';

class Category
{
    public function all()
    {
        $sql = "select * from categories";
        $result = (new Connect())->excuteQuery($sql);

        $arr = [];
        foreach ($result as $each) {
            $object = new CategoryObject($each);

            $arr[] = $object;
        }

        return $arr;
    }

    public function find($id): object
    {
        $sql = "select * from categories where category_id = $id";
        $result = (new Connect())->excuteQuery($sql);
        $each = mysqli_fetch_array($result);
        return new CategoryObject($each);
    }
}
