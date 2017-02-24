<?php

/**
 * @copyright Copyright (c) 2016 www.magebuzz.com
 */

namespace Magebuzz\Christmasdecoration\Model\Config\Source;

class BackgroundImgPattern implements \Magento\Framework\Option\ArrayInterface {

    protected $_helper;

    public function __construct(
    \Magebuzz\Christmasdecoration\Helper\Data $helper
    ) {
        $this->_helper = $helper;
    }

    public function toOptionArray() {
        $url1 = $this->_helper->getViewImageUrl('images/background/background_1.gif');
        $url2 = $this->_helper->getViewImageUrl('images/background/background_2.gif');
        $url3 = $this->_helper->getViewImageUrl('images/background/background_3.gif');
        $url4 = $this->_helper->getViewImageUrl('images/background/background_4.gif');
        $url5 = $this->_helper->getViewImageUrl('images/background/background_5.png');
        return [
            ['value' => 'background_1.gif', 'label' => __('<img src="' . $url1 . '" height="50px" />')],
            ['value' => 'background_2.gif', 'label' => __('<img src="' . $url2 . '" height="50px" />')],
            ['value' => 'background_3.gif', 'label' => __('<img src="' . $url3 . '" height="50px" />')],
            ['value' => 'background_4.gif', 'label' => __('<img src="' . $url4 . '" height="50px" />')],
            ['value' => 'background_5.png', 'label' => __('<img src="' . $url5 . '" height="50px" />')]
        ];
    }

}
