<?php

namespace DNAFactory\Example\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Order extends AbstractModel implements
    \DNAFactory\Example\Api\Data\OrderInterface,
    IdentityInterface
{
    const CACHE_TAG = 'dnafactory_example_order';

    protected function _construct()
    {
        $this->_init(\DNAFactory\Example\Model\ResourceModel\Order::class);
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
