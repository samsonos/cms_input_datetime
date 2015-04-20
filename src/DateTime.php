<?php
/**
 * Created by PhpStorm.
 * User: onysko
 * Date: 17.04.2015
 * Time: 12:17
 */

namespace samsoncms\input\datetime;


use samsoncms\input\Field;

class DateTime extends Field
{
    /** Database object field name */
    protected $param = 'numeric_value';

    /**
     * Function to convert field value
     *
     * @param mixed $value
     * @return int Time value represented as int
     */
    public function convert($value)
    {
        // Convert to timestamp
        return strtotime($value);
    }

    /** {@inheritdoc} */
    public function value()
    {
        // Return formatted date
        return strftime('%Y-%m-%dT%H:%M:%S', $this->dbObject[$this->param]);
    }
}
