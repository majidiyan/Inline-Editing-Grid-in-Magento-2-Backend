<?php

/**
 * Grid GridInterface.
 * @category  Magentoyan
 * @package   Magentoyan_Holidays
 * @author    Magentoyan
 * @copyright Copyright (c) 2010-2017 Magentoyan Software Private Limited (https://magentoyan.com)
 * @license   https://store.magentoyan.com/license.html
 */

namespace Magentoyan\Holidays\Api\Data;

interface GridInterface {

    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ID = 'id';
    const HOLIDAY_DATE = 'holiday_date';
    const HOLIDAY_TITLE = 'holiday_title';

    const HOLIDAY_DESC = 'holiday_desc';

    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getId();

    /**
     * Set EntityId.
     */
    public function setId($id);

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getHolidayDate();

    public function setHolidayDate($urlCode);

    public function getHolidayTitle();

    public function setHolidayTitle($holidays);

    public function getHolidayDesc();

    public function setHolidayDesc($urlDesc);


}
