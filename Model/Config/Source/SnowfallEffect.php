<?php
/**
 * @copyright Copyright (c) 2016 www.magebuzz.com
 */
namespace Magebuzz\Christmasdecoration\Model\Config\Source;

class SnowfallEffect implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [
            ['value' => 'swing', 'label' => __('Swing')], 
            ['value' => 'cross', 'label' => __('Cross')],
            ['value' => 'suspended', 'label' => __('Suspended')]
        ];
    }
}
