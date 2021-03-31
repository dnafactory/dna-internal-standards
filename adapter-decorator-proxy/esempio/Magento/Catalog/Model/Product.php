<?php

namespace Magento\Catalog\Model;

class Product
{
    public function getQty()
    {
        $qty = $this->qualcosaDiComplesso();
        return $qty;
    }

    private function qualcosaDiComplesso()
    {
        return rand(0, 100);
    }
}
