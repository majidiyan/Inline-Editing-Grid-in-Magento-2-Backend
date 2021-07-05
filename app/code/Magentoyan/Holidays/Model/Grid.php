<?php

/**
 * Grid Grid Model.
 * @category  Magentoyan
 * @package   Magentoyan_Holidays
 * @author    Magentoyan
 * @copyright Copyright (c) 2010-2017 Magentoyan Software Private Limited (https://magentoyan.com)
 * @license   https://store.magentoyan.com/license.html
 */
namespace Magentoyan\Holidays\Model;

use Magentoyan\Holidays\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'holiday_title';

    /**
     * @var string
     */
    protected $_cacheTag = 'holiday_title';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'holiday_title';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Magentoyan\Holidays\Model\ResourceModel\Grid');
    }
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

   
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }
    

    
    
    public function getHolidayDate()
    {
        return $this->getData(self::HOLIDAY_DATE);
    }

   
    public function setHolidayDate($urlCode)
    {
        return $this->setData(self::HOLIDAY_DATE, $urlCode);
    }
    
    public function getHolidayTitle()
    {
        return $this->getData(self::HOLIDAY_TITLE);
    }

   
    public function setHolidayTitle($holidays)
    {
        return $this->setData(self::HOLIDAY_TITLE, $holidays);
    }
    
    public function getHolidayDesc()
    {
        return $this->getData(self::HOLIDAY_DESC);
    }

   
    public function setHolidayDesc($urlDesc)
    {
        return $this->setData(self::HOLIDAY_DESC, $urlDesc);
    }

   
}
