<?php

/**
 * Grid Grid Collection.
 *
 * @category  Magentoyan
 * @package   Magentoyan_Holidays
 * @author    Magentoyan
 * @copyright Copyright (c) 2010-2017 Magentoyan Software Private Limited (https://magentoyan.com)
 * @license   https://store.magentoyan.com/license.html
 */
namespace Magentoyan\Holidays\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init(
            'Magentoyan\Holidays\Model\Grid',
            'Magentoyan\Holidays\Model\ResourceModel\Grid'
        );
    }
}
