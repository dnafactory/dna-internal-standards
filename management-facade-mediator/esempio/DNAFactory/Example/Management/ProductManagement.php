<?php

namespace DNAFactory\Example\Management;

use DNAFactory\Example\Api\ProductManagementInterface;

class ProductManagement implements ProductManagementInterface
{
    public function importProducts(array $products)
    {
        foreach ($products as $product) {
            // ...
        }
    }
}
