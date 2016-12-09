<?php

/**
 * @copyright Copyright (c) 2016 www.magebuzz.com
 */

namespace Magebuzz\Christmasdecoration\Block;

/**
 * Product View block
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Decoration extends \Magento\Framework\View\Element\Template {

    protected $_date;
    protected $_scopeConfig;
    protected $_helper;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context, 
        \Magento\Framework\Stdlib\DateTime\DateTime $date, 
        \Magebuzz\Christmasdecoration\Helper\Data $helper,
        array $data = []
    ) {
        $this->_date = $date;
        $this->_scopeConfig = $context->getScopeConfig();
        $this->_helper = $helper;
        parent::__construct($context, $data);
    }

    public function isEnableDecoration() {
        $isValidFromDate = false;
        $isValidToDate = false;
        $currentDate = strtotime($this->_date->gmtDate());
        $fromDate = $this->getScopeConfig('christmasdecoration/general/fromdate');
        if (!$fromDate) {
            $isValidFromDate = true;
        } else {
            $fromDate = strtotime($fromDate) ? (strtotime($fromDate) - $this->_date->getGmtOffset() + 86400) : 0;
            if ($fromDate && $fromDate <= $currentDate) {
                $isValidFromDate = true;
            }
        }
        $toDate = $this->getScopeConfig('christmasdecoration/general/todate');
        if (!$toDate) {
            $isValidToDate = true;
        } else {
            $todate = strtotime($toDate) ? (strtotime($toDate) - $this->_date->getGmtOffset() + 86400) : 0;
            if ($todate && $todate >= $currentDate) {
                $isValidToDate = true;
            }
        }
        if ($isValidFromDate && $isValidToDate) {
            return true;
        }
        return false;
    }

    public function getScopeConfig($path) {
        return $this->_scopeConfig->getValue($path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getHeaderImgUrl() {
        $uploadImg = $this->getScopeConfig('christmasdecoration/header_image/image');
        if ($uploadImg) {
            $uploadImgUrl = $this->_helper->getUploadImageUrl($uploadImg,'magebuzz/christmasdecoration/header/');
            if ($uploadImgUrl) {
                return $uploadImgUrl;
            }
        } 
        $pattern = $this->getScopeConfig('christmasdecoration/header_image/pattern');
        if ($pattern) {
//            $patternUrl = $this->_helper->getViewImageUrl('images/header/' . $pattern);
            $patternUrl = $this->getViewFileUrl('Magebuzz_Christmasdecoration::images/header/' . $pattern);
            $patternUrl = str_replace('frontend', 'adminhtml', $patternUrl);
            return $patternUrl;
        }
        return '';
    }
    
    public function getFooterImgUrl() {
        $uploadImg = $this->getScopeConfig('christmasdecoration/footer_image/image');
        if ($uploadImg) {
            $uploadImgUrl = $this->_helper->getUploadImageUrl($uploadImg,'magebuzz/christmasdecoration/footer/');
            if ($uploadImgUrl) {
                return $uploadImgUrl;
            }
        } 
        $pattern = $this->getScopeConfig('christmasdecoration/footer_image/pattern');
        if ($pattern) {
            $patternUrl = $this->getViewFileUrl('Magebuzz_Christmasdecoration::images/footer/' . $pattern);
            $patternUrl = str_replace('frontend', 'adminhtml', $patternUrl);
            return $patternUrl;
        }
        return '';
    }
    
    public function getBackgroundImgUrl() {
        $uploadImg = $this->getScopeConfig('christmasdecoration/background_image/image');
        if ($uploadImg) {
            $uploadImgUrl = $this->_helper->getUploadImageUrl($uploadImg,'magebuzz/christmasdecoration/background/');
            if ($uploadImgUrl) {
                return $uploadImgUrl;
            }
        } 
        $pattern = $this->getScopeConfig('christmasdecoration/background_image/pattern');
        if ($pattern) {
            $patternUrl = $this->getViewFileUrl('Magebuzz_Christmasdecoration::images/background/' . $pattern);
            $patternUrl = str_replace('frontend', 'adminhtml', $patternUrl);
            return $patternUrl;
        }
        return '';
    }
    
    public function getMovingImgUrl() {
        $uploadImg = $this->getScopeConfig('christmasdecoration/moving_image/image');
        if ($uploadImg) {
            $uploadImgUrl = $this->_helper->getUploadImageUrl($uploadImg,'magebuzz/christmasdecoration/moving/');
            if ($uploadImgUrl) {
                return $uploadImgUrl;
            }
        } 
        $pattern = $this->getScopeConfig('christmasdecoration/moving_image/pattern');
        if ($pattern) {
            $patternUrl = $this->getViewFileUrl('Magebuzz_Christmasdecoration::images/moving/' . $pattern);
            $patternUrl = str_replace('frontend', 'adminhtml', $patternUrl);
            return $patternUrl;
        }
        return '';
    }

    public function getSnowfallImgUrls() {
        $images = [];
        $uploadImg = $this->getScopeConfig('christmasdecoration/snowfall/image');
        if ($uploadImg) {
            $uploadImgUrl = $this->_helper->getUploadImageUrl($uploadImg,'magebuzz/christmasdecoration/snowfall/');
            if ($uploadImgUrl) {
                $images[] = $uploadImgUrl;
            }
        } 
        $pattern = $this->getScopeConfig('christmasdecoration/snowfall/pattern');
        if ($pattern) {
            $patternArr = explode(',', $pattern);
            foreach ($patternArr as $item) {
                $patternUrl = $this->getViewFileUrl('Magebuzz_Christmasdecoration::images/snowfall/' . $item);
                $patternUrl = str_replace('frontend', 'adminhtml', $patternUrl);
                $images[] = $patternUrl;
            }
            return implode(',', $images);
        }
        return '';
    }

    
}
