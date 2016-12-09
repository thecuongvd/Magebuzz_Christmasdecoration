<?php
/**
 * @copyright Copyright (c) 2016 www.magebuzz.com
 */
namespace Magebuzz\Christmasdecoration\Model\Config\Source;

class SnowfallPattern
{
    protected $_helper;
    
    public function __construct(
    \Magebuzz\Christmasdecoration\Helper\Data $helper
    ) {
        $this->_helper = $helper;
    }
    
    public function toOptionArray()
    {
        $url1 = $this->_helper->getViewImageUrl('images/snowfall/snowfall_1.png');
        $url2 = $this->_helper->getViewImageUrl('images/snowfall/snowfall_2.png');
        $url3 = $this->_helper->getViewImageUrl('images/snowfall/snowfall_3.png');
        $url4 = $this->_helper->getViewImageUrl('images/snowfall/snowfall_4.png');
        $url5 = $this->_helper->getViewImageUrl('images/snowfall/snowfall_5.png');
        $url6 = $this->_helper->getViewImageUrl('images/snowfall/snowfall_6.png');
        $url7 = $this->_helper->getViewImageUrl('images/snowfall/snowfall_7.png');
        $url8 = $this->_helper->getViewImageUrl('images/snowfall/snowfall_8.png');
        $url9 = $this->_helper->getViewImageUrl('images/snowfall/snowfall_9.png');
        $url10 = $this->_helper->getViewImageUrl('images/snowfall/snowfall_10.png');
        return [
            ['value' => 'snowfall_1.png', 'label' => __('<img src="' . $url1 . '" />')],
            ['value' => 'snowfall_2.png', 'label' => __('<img src="' . $url2 . '" />')],
            ['value' => 'snowfall_3.png', 'label' => __('<img src="' . $url3 . '" />')],
            ['value' => 'snowfall_4.png', 'label' => __('<img src="' . $url4 . '" />')],
            ['value' => 'snowfall_5.png', 'label' => __('<img src="' . $url5 . '" />')],
            ['value' => 'snowfall_6.png', 'label' => __('<img src="' . $url6 . '" />')],
            ['value' => 'snowfall_7.png', 'label' => __('<img src="' . $url7 . '" />')],
            ['value' => 'snowfall_8.png', 'label' => __('<img src="' . $url8 . '" />')],
            ['value' => 'snowfall_9.png', 'label' => __('<img src="' . $url9 . '" />')],
            ['value' => 'snowfall_10.png', 'label' => __('<img src="' . $url10 . '" />')]
        ];
    }
}