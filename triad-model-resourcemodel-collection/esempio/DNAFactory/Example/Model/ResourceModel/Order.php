<?php

namespace DNAFactory\Example\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Order extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('dnafactory_example_order', 'entity_id');
    }
}
