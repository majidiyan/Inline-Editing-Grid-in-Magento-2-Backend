<?php

namespace Magentoyan\Holidays\Model\ResourceModel;

class Holidays extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {

    protected function _construct() {
        $this->_init('holiday_title', 'id');
    }

}
