<?php

/**
 * @copyright Copyright (c) 2016 www.magebuzz.com
 */

namespace Magebuzz\Christmasdecoration\Model\Config\Source;

class FooterImgPattern implements \Magento\Framework\Option\ArrayInterface {

    protected $_helper;

    public function __construct(
    \Magebuzz\Christmasdecoration\Helper\Data $helper
    ) {
        $this->_helper = $helper;
    }

    public function toOptionArray() {
        $url1 = $this->_helper->getViewImageUrl('images/footer/footer_1.jpg');
        $url2 = $this->_helper->getViewImageUrl('images/footer/footer_2.jpg');
        $url3 = $this->_helper->getViewImageUrl('images/footer/footer_3.jpg');
        $url4 = $this->_helper->getViewImageUrl('images/footer/footer_4.jpg');
        $url5 = $this->_helper->getViewImageUrl('images/footer/footer_5.jpg');
        return [
            ['value' => 'footer_1.jpg', 'label' => __('<img src="' . $url1 . '" height="50px" />')],
            ['value' => 'footer_2.jpg', 'label' => __('<img src="' . $url2 . '" height="50px" />')],
            ['value' => 'footer_3.jpg', 'label' => __('<img src="' . $url3 . '" height="50px" />')],
            ['value' => 'footer_4.jpg', 'label' => __('<img src="' . $url4 . '" height="50px" />')],
            ['value' => 'footer_5.jpg', 'label' => __('<img src="' . $url5 . '" height="50px" />')]
        ];
    }

}
