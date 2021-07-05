<?php

namespace Magentoyan\Holidays\Model\ResourceModel\Holidays;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    
    protected function _construct()
    {
        $this->_init('Magentoyan\Holidays\Model\Holidays', 'Magentoyan\Holidays\Model\ResourceModel\Holidays');
    }

}
