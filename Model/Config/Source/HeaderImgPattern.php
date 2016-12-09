<?php

/**
 * @copyright Copyright (c) 2016 www.magebuzz.com
 */

namespace Magebuzz\Christmasdecoration\Model\Config\Source;

class HeaderImgPattern implements \Magento\Framework\Option\ArrayInterface {

    protected $_helper;

    public function __construct(
    \Magebuzz\Christmasdecoration\Helper\Data $helper
    ) {
        $this->_helper = $helper;
    }

    public function toOptionArray() {
        $url1 = $this->_helper->getViewImageUrl('images/header/header_1.png');
        $url2 = $this->_helper->getViewImageUrl('images/header/header_2.png');
        $url3 = $this->_helper->getViewImageUrl('images/header/header_3.png');
        $url4 = $this->_helper->getViewImageUrl('images/header/header_4.png');
        $url5 = $this->_helper->getViewImageUrl('images/header/header_5.png');
        return [
            ['value' => 'header_1.png', 'label' => __('<img src="' . $url1 . '" height="50px" />')],
            ['value' => 'header_2.png', 'label' => __('<img src="' . $url2 . '" height="50px" />')],
            ['value' => 'header_3.png', 'label' => __('<img src="' . $url3 . '" height="50px" />')],
            ['value' => 'header_4.png', 'label' => __('<img src="' . $url4 . '" height="50px" />')],
            ['value' => 'header_5.png', 'label' => __('<img src="' . $url5 . '" height="50px" />')]
        ];
    }

}
