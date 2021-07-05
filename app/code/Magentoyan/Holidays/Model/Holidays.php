<?php

namespace Magentoyan\Holidays\Model;

use Magento\Framework\Pricing\PriceCurrencyInterface;

class Holidays extends \Magento\Framework\Model\AbstractModel {

     protected function _construct() {
        $this->_init('Magentoyan\Holidays\Model\ResourceModel\Holidays');
    }

}
