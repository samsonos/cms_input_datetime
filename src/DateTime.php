<?php
/**
 * Created by PhpStorm.
 * User: onysko
 * Date: 17.04.2015
 * Time: 12:17
 */
namespace samsoncms\input\datetime;

use samsoncms\input\Field;

/**
 * SamsonCMS Date time input field
 * @package samsoncms\input\datetime
 */
class DateTime extends Field
{
    /** Database object value field name */
    protected $param = 'numeric_value';

    /** {@inheritdoc} */
    public function convert($value)
    {
        // Convert to timestamp
        return strtotime($value);
    }

    /** {@inheritdoc} */
    public function value()
    {
        $ts = $this->dbObject[$this->param];

        // Return formatted date
        return strftime(
            '%Y-%m-%dT%H:%M:%S',
            ((string) (int) $ts === $ts) ? $ts : strtotime($ts)
        );
    }
}
