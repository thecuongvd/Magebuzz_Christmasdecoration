<?php
/**
 * @copyright Copyright (c) 2016 www.magebuzz.com
 */
namespace Magebuzz\Christmasdecoration\Model\Config\Source;

class MovingImgDirection implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [
            ['value' => 'left_to_right', 'label' => __('Left to right')], 
            ['value' => 'right_to_left', 'label' => __('Right to left')],
            ['value' => 'top_to_bottom', 'label' => __('Top to bottom')],
            ['value' => 'bottom_to_top', 'label' => __('Bottom to top')],
            ['value' => 'random', 'label' => __('Random')]
        ];
    }
}
