<?php
/**
 * @copyright Copyright (c) 2016 www.magebuzz.com
 */
namespace Magebuzz\Christmasdecoration\Model\Config\Source;

class SnowfallPattern implements \Magento\Framework\Option\ArrayInterface 
{

    public function toOptionArray()
    {
        return [
            ['value' => '10052', 'label' => __('&#10052;')], 
            ['value' => '10053', 'label' => __('&#10053;')],
            ['value' => '10054', 'label' => __('&#10054;')],
            
            ['value' => '9733', 'label' => __('&#9733;')],
            ['value' => '9734', 'label' => __('&#9734;')],
            ['value' => '10026', 'label' => __('&#10026;')],
            ['value' => '10031', 'label' => __('&#10031;')],
            ['value' => '10037', 'label' => __('&#10037;')],
            
            ['value' => '9825', 'label' => __('&#9825;')],
            ['value' => '9829', 'label' => __('&#9829;')]

        ];
    }
}
