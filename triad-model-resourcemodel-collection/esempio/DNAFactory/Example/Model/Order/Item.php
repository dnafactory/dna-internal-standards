<?php

namespace DNAFactory\Example\Model\Order;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel implements
    \DNAFactory\Example\Api\Data\OrderItemInterface,
    IdentityInterface
{
    const CACHE_TAG = 'dnafactory_example_order_item';

    protected function _construct()
    {
        $this->_init(\DNAFactory\Example\Model\ResourceModel\Order::class);
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
