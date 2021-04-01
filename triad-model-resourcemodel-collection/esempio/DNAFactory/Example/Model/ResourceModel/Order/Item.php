<?php

namespace DNAFactory\Example\Model\ResourceModel\Order;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('dnafactory_example_order_item', 'entity_id');
    }
}
