<?php
/**
 * Created by PhpStorm.
 * User: onysko
 * Date: 17.04.2015
 * Time: 12:17
 */
namespace samsoncms\input\datetime;

/**
 * SamsonCMS Date time input field
 * @package samsoncms\input\datetime
 */
class Field extends samsoncms\input\Field
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
        // Return formatted date
        return strftime('%Y-%m-%dT%H:%M:%S', strtotime($this->dbObject[$this->param]));
    }
}
