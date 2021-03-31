<?php

namespace DNAFactory\Example\Adapter\Magento\Catalog\Model;

class ProductAdapter
{
    /**
     * @var \Magento\Catalog\Model\Product
     */
    protected $product;

    public function __construct(\Magento\Catalog\Api\Data\ProductInterface $product)
    {
        $this->product = $product;
    }

    /**
     * Modifica di una funzionalità già esistente
     * @return int
     */
    public function getQty()
    {
        return $this->product->getQty() + rand(0, 100);
    }

    /**
     * Aggiunta di una nuova funzionalità
     * @return string
     */
    public function getWarehouse()
    {
        return 'Arzano';
    }
}
